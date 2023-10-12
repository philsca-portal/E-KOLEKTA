<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Process the GCash payment
  $itemName = $_POST['item_name'];
  $amount = $_POST['amount'];

  // Initialize GCash API connection and make the necessary API calls to process the payment

  // Generate a unique transaction ID
  $transactionId = uniqid();

  // Prepare the payment details
  $paymentDetails = array(
    'transaction_id' => $transactionId,
    'item_name' => $itemName,
    'amount' => $amount,
    // Add other relevant details as required
  );

  // Save the payment details to your database for future reference
  // You can use your preferred method to interact with the database (e.g., MySQL, PostgreSQL, etc.)

  // Generate the redirect URL to the GCash payment page
  $gcashRedirectUrl = 'https://www.gcash.com/pay?';
  $gcashRedirectUrl .= http_build_query($paymentDetails);

  // Redirect the user to the GCash payment page
  header('Location: ' . $gcashRedirectUrl);
  exit;
}
?>
