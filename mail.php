<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail= new PHPMailer();

$mail->isSMTP();
$mail->Host='smtp.gmail.com';

$mail->SMTPAuth='true';

$mail->Username='donovaldavid@gmail.com';     // valid mail id

$mail->Password='donko888';    // valid mail pass

$mail->SMTPSecure='tls';

$mail->Port=587;


$mail->SetFrom('oldoheld11@gmail.com','Developer');
$mail->addAddress('xdonov00@stud.fit.vutbr.cz');   // add To address
$mail->addReplyTo('xdonov00@stud.fit.vutbr.cz','Info');
$mail->isHTML(true);
$mail->Subject='U-tube';
$mail->Body='Sample For U-tube Viewers<br> <h1>hello</h1> ';

$mail->isMail();
if($mail->send())
{
	echo'Mail Sent';
}
else
{
	echo "Mail sending failed";
}
?>