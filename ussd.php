<?php
// Reads the variables sent via POST from our gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = trim($_POST["text"]);

switch ($text) {
  case '':
    // This is the first request. Note how we start the response with CON
     $response  = "CON What would you like to do \n";
     $response .= "1. Mobile Checkout \n";
     $response .= "2. Send Airtime \n";
     $response .= "3. Exit";
    break;

  //
  case '1':
    $response = "CON Select a payment option \n";
    $response .= "1. Pay via Mpesa \n";
    $response .= "2. Back \n";
    $response .= "3. Exit";
  break;

  //
  case '2':
    $response = "CON How much airtime do you want to send? \n";
  break;

  case '3':
    $response = "END "
  break;

  case
  
  default:
    # code...
    break;
}

function mpesaCheckout($amount) {
  return $amount;
}

function sendAirtime($amount) {
  return $amount;
}

// Print the response onto the page so that our gateway can read it
header('Content-type: text/plain');
echo $response;
?>