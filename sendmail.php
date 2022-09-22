
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'quytran52003@gmail.com';                     //SMTP username
    $mail->Password   = 'pxnykrztrihaxava';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;   
    $mail->CharSet    = 'UTF-8';                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('quytran52003@gmail.com', 'Trần Quý');
    $mail->addAddress( $_POST["email"], 'Trần Quý');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('quytran52003@gmail.com', 'Trần Quý');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('assets/images/gau-cute.jpg');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mail này dc gửi tự động từ Trần Quý';
    $mail->Body    = "<div> Xin chào <b>$_POST[fullname]</b> Chúc mừng bạn đã nhận được cuốn ebook Người nam châm </div> <div>Nhấn vào đây để có thể nói ib với Quý <a href= 'https://www.facebook.com/shopcongnghe159/'>Facebook</a></div>";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "Thông tin đã được gửi <br> <b>Hãy check email của bạn</b>
    <div> Quay về <a href = 'home.php'><b>Trang chủ</b></a></div>";

} catch (Exception $e) {
    echo "Mail không được gửi: {$mail->ErrorInfo}";
}