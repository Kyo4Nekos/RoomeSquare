<?php
  require_once('../vendor/autoload.php');
  require_once('config/db.php');

  \Stripe\Stripe::setApiKey('sk_test_51HWE0bAsk276NFNXs040kIwOdLSPMjq8DCTdydDJtMsR8DmrlgNNEvBq9PqTGCU0VRfyfJOARPsyfu0ilHqd67wG00IowzBsTL');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $token = $POST['stripeToken'];
 $email = $POST['email'];
 $price = $POST['price'];
 $room = $POST['roomTypeBook'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $price,
  "currency" => "myr",
  "description" => "K Boutique Room Payment",
  "customer" => $customer->id
));

$sql = "UPDATE `payment` SET `transactionID` = '.$charge->id.', `paymentMethod` = 'Stripe - Credit Card', `status` = '2' WHERE `payment`.`userID` = '".$_POST['userID']."'";
mysqli_query($con, $sql);

$to = $email;
$subject = 'K Boutique Hotel | Room Payment Confirmed';
$message = 'Booking succesful!
            Below is reference for your payment.

            Amount: '.$price.'
            Room Type: '.$room.'
            Reference: '.$charge->id.'
            
     
    ';
$headers = 'From: kloveboutique420@gmail.com';

mail($to, $subject, $message, $headers);

// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);