<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['customer_email'])) {
        $customerEmail = $_POST['customer_email'];


        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host = 'in.mailjet.com'; 
            $mail->SMTPAuth = true;
            $mail->Username = '27957b9594a1466e7c44e7b18d4a3c35'; 
            $mail->Password = 'd12a220337c91858ff659929fd6773c1'; 
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            
            $mail->setFrom('galosjohnaljenne@gmail.com', 'John Aljenne Galos');
            $mail->addAddress($customerEmail);

            $mail->AddEmbeddedImage('employee/img/rey.png', 'image_cid');

            
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
              <p>Best regards,<br>John Rey 'Pogi' Enceso</p>
              <p style='text-align: center; font-size: 12px; color: #888;'>Do not reply to this email. This is an automated message.</p>
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