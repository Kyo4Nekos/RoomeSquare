<?php
session_start();
  require_once('../vendor/autoload.php');
  require_once('config/db.php');
  include "../Homepage_signin/booking/bookingRoom/booking.php";
  \Stripe\Stripe::setApiKey('sk_test_51HWE0bAsk276NFNXs040kIwOdLSPMjq8DCTdydDJtMsR8DmrlgNNEvBq9PqTGCU0VRfyfJOARPsyfu0ilHqd67wG00IowzBsTL');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $token = $POST['stripeToken'];
 $email = $POST['email'];
 $price = $POST['price'];
 $room = $POST['roomTypeToBook'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));



$con = mysqli_connect("localhost","id14806959_hotel","Zagx&Pk8|RGX-^Hw","hoteldb");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array or system 

 $Cust_no = $_SESSION['username'];
 $room = $POST['roomTypeToBook'];
 $Date_Reserved = date("Y-m-d");
 $Date_rent_start = $_POST['startDate'];
 $Date_rent_end= $_POST['endDate'];
 $Rental_period=getDayDiff($Date_rent_start,$Date_rent_end);
 $total = $Rental_period * $_POST['price'];
 $tax=0.06 * $total;
 $Amount_due = $tax + $total;
 


  $sql="INSERT INTO bookings(Booking_reference,Cust_no, Reserved_by,Date_Reserved,Date_rent_start, Date_rent_end,
  roomType,Rental_period, Amount_due, Paid, bookingStatus)
	VALUES ('$charge->id','$Cust_no','$Cust_no','$Date_Reserved','$Date_rent_start','$Date_rent_end','$room','$Rental_period','$Amount_due','Paid', 'Waiting for Approval')";
  
  $qry = mysqli_query($con,$sql); 


// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $price*100,
  "currency" => "myr",
  "description" => "K Boutique Room Payment",
  "customer" => $customer->id
));


$to = $email;
$subject = 'K Boutique Hotel | Room Payment Confirmed';
$message = 'Booking succesful!
            Below is reference for your payment.

            Amount: RM'.$price.'
            Check-In Date: '.$Date_rent_start.'
            Check-Out Date '.$Date_rent_end.'
            Room Type: '.$room.'
            Reference: '.$charge->id.'
            
     
    ';
$headers = 'From: kloveboutique420@gmail.com';

mail($to, $subject, $message, $headers);

// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);