<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['customer_email'])) {
        $customerEmail = $_POST['customer_email'];

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'in.mailjet.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true;
            $mail->Username = '27957b9594a1466e7c44e7b18d4a3c35'; // SMTP username
            $mail->Password = 'd12a220337c91858ff659929fd6773c1'; // SMTP password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('galosjohnaljenne@gmail.com', 'John Aljenne Galos');
            $mail->addAddress($customerEmail);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Your Order is Ready!';
            $mail->Body    = "
            <html>
            <head>
              <title>Order Ready Notification</title>
            </head>
            <body>
              <h2 style='font-family: \"Dancing Script\", cursive; font-size: 40px; font-weight: bold; color: #ff0000; text-shadow: 2px 2px 5px black; text-align: center;'>Pizza Haus</h2>
              <h1 style='cursive; font-size: 40px; font-weight: bold; text-shadow: 2px 2px 5px black; text-align: center;'>Your order is ready for pickup!</h1>
              <p>Thank you for your patience. You can now pick up your order at the counter.</p>
            </body>
            </html>
            ";

            $mail->send();
            echo 'Email sent successfully.';
        } catch (Exception $e) {
            echo "Failed to send email. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Email address not provided.";
    }
}

?>