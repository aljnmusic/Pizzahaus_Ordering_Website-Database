<?php
// Ensure this script is called via AJAX after a delay

// Get customer email from POST data
$customerEmail = $_POST['customer_email'];

// Email content
$subject = "Your Order is Ready!";
$message = "
<html>
<head>
  <title>Order Ready Notification</title>
</head>
<body>
  <h1>Your order is ready for pickup!</h1>
  <p>Thank you for your patience. You can now pick up your order at the counter.</p>
</body>
</html>
";

// Headers for HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: no-reply@yourdomain.com" . "\r\n";

// Send email
if (mail($customerEmail, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>