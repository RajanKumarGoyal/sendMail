<?php 

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

if(isset($_POST['submit'])) 
{
    $mail = new PHPMailer;
    $mail->isSMTP();
    
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'enter-gmail-username';
    $mail->Password = 'enter-gmail-password';

    $mail->setFrom('from-email-address', 'Test 1');
    $mail->addReplyTo('from-email-address', 'Test 1');
    $mail->addAddress('to-email-address', 'Test 2');

    //Content
    $mail->isHTML(true);              
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'Here is mine name <b>'.$_POST['name'].'</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'The email message was sent.';
    }
}

?>

<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="cName">Name:</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
            </div>
            <input type="submit" class="btn btn-info" name="submit" value="Save">
        </form>
    </div>
</body>
</html>