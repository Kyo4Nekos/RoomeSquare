<?php
session_start();
if (!(isset($_SESSION['username']) && ($_SESSION['pass']))){
	header ("Location: ../customerlogin/index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Pay Page</title>
</head>
<body>
  <div class="container">
    <h2 class="my-4 text-center">K Boutique Payment Gateway</h2>
    <form action="./charge.php" method="post" id="payment-form">
      <div class="form-row">
       <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
       <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
       <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
       
       <h3 class="my-4 text-center">Amount to Pay</h3>
       <?php
       echo '<input type="number" name="price" class="form-control mb-3 StripeElement StripeElement--empty" readonly value="'.$_GET['price'].'">';
       echo "<input type='hidden' value='".$_GET['roomType']."' name='roomTypeToBook'>";
       echo "<input type='hidden' value='".$_GET['startDate']."' name='startDate'>";
       echo "<input type='hidden' value='".$_GET['endDate']."' name='endDate'>";
       echo "<input type='hidden' value='".$_GET['Cust_no']."' name='custIdToBook'>";
       

      
       ?>

        <div id="card-element" class="form-control">
          <!-- a Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors -->
        <div id="card-errors" role="alert"></div>
      </div>

      <button class="btn btn-primary btn-block mt-4">Submit Payment</button>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="js/charge.js"></script>
</body>
</html>