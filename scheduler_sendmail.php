
<?php
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');
require('PHPMailer/src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

define('ON_SECOND', true); // 準時寄出(false)、準時收到(true)

define('SMTP_USERNAME', 'hansonng00@gmail.com');
define('SMTP_PASSWORD', 'dguw pigi ykys hzqe');
define('FROM_NAME',     'name');
define('FROM_MAIL',     '');
define('TO_MAIL',       'hansonng00@gmail.com');
define('TO_NAME',       '');

mb_internal_encoding('UTF-8');

$mail = new PHPMailer();
if (!is_object($mail) || !$mail) {
    echo "Mail initial error\n";
    exit;
}

$mail->IsSMTP();

// $mail->SMTPDebug = 1;
$mail->Port       = 465; // 465 or 578
$mail->SMTPSecure = 'ssl'; // ssl or tls
$mail->Host       = 'smtp.gmail.com'; // ssl://smtp.gmail.com
$mail->Encoding   = 'base64';
$mail->CharSet    = 'utf-8';
$mail->SMTPAuth   = true;
$mail->Username   = 'hansonng00@gmail.com';
$mail->Password   = 'dguw pigi ykys hzqe';
$mail->WordWrap   = 70;

$mail->setFrom('hansonng00@gmail.com');

$mail->AddAddress($_POST["email"]);
// $mail->AddAddress(TO_MAIL2, TO_NAME2); // add more email

// $mail->AddAttachment('path/filename'); // Attachment
$mail->IsHTML(true);
$mail->Subject = $_POST["subject"];
$mail->Body    = $_POST["message"];

$mail->send();

echo"


<script>
alert('Sent Successfully');
document.location.href = 'index.php'
</script>
";
?>
