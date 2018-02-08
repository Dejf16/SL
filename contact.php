
<?php


require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = false;
$mail->Host = 'mail.donivostk.eu';
$mail->SMTPAuth = true;
$mail->Port=25;
$mail->Username='postmaster@donivostk.eu';
$mail->Password='DoniVoStk223';

$mail->SetFrom('noreplydonivo@gmail.com','developer');
$mail->addAddress('xdonov00@fit.vutbr.cz');
$mail->addReplyTo('xdonov00@fit.vutbr.cz','info');


//mail('xdonov00@stud.fit.vutbr.cz','dobre','tralalla');
$feedback = '';


    $company_mail = "xdonov00@stud.fit.vutbr.cz";
    $name_tmp = $_POST['name'];
    $email_tmp = $_POST['email'];
    $subject_tmp = $_POST['subject'];
    $msg_tmp = $_POST['message'];
    $message_tmp = <<<EMAIL
Meno: $name_tmp
E-mail: $email_tmp
Sprava: 
$msg_tmp
EMAIL;

$mail->Subject=$subject_tmp;
$mail->Body=$message_tmp;

    $feedback = '';
if(isset($_POST['submit'])){

    if($mail->send()){
        $feedback = 'Email úspešne odoslaný.';
    }else{
        $feedback = 'Email nebol odoslaný.';
    }


}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>The Free Land-Agent Website Template | Contact :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Baumans' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header-bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="index.html"><img src="images/logo1.png" alt="" title="logo"></a>
            </div>
            <div class="drp-dwn">
                <select onchange="window.location=this.options[this.selectedIndex].value">
                    <option value="index.html">Úvod</option>
                    <option value="byty_uvod.html">Byty</option>
                    <option value="about.html">O nas</option>
                    <option selected value="contact.html">Kontakt</option>
                </select>
            </div>
            <div class="menu">
                <ul class="nav">
                    <li ><a href="index.html">Úvod</a></li>
                    <li><a href="byty_uvod.html">Byty</a></li>
                    <li><a href="about.html">O nás</a></li>
                    <li class="active"><a href="contact.html">Kontakt</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="content-bg">
    <div class="wrap">
        <div class="content">
            <div class="section group">
                <div class="col span_1_of_3">
                    <div class="contact_info">
                        <h3>Nájdete nás:</h3>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2632.6408924789757!2d19.1306194!3d48.7123444!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47153dda353456d3%3A0xca5e6b146496d369!2sSl%C3%A1dkovi%C4%8Dova+4370%2F27%2C+974+05+Bansk%C3%A1+Bystrica!5e0!3m2!1ssk!2ssk!4v1513957685681" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="company_address">
                        <h3>Informácie o firme :</h3>
                        <h4>Adresa:</h4>
                        <p>DONIVO STK s.r.o.</p>
                        <p>Sládkovičova 27/A</p>
                        <p>Banská Bystrica</p>
                        <h4>Tel:</h4>
                        <p>048/4161444</p>
                        <p>048/4161445</p>
                        <h4>Email: <span><a href="mailto: donivostk@donivostk.sk"> donivostk@donivostk.sk</a></span></h4>
                    </div>
                </div>
                <div class="col span_2_of_3">
                    <div class="contact-form">
                        <h3>Kontaktujte nás</h3>
                        <p id="feedback"><?php echo $feedback?> </p>
                        <form action="?" method="post">
                            <div>
                                <span><label>MENO</label></span>
                                <span><input type="text" name="name" id="name"></span>
                            </div>
                            <div>
                                <span><label>E-MAIL</label></span>
                                <span><input type="text" name="email" id="email"></span>
                            </div>
                            <div>
                                <span><label>PREDMET</label></span>
                                <span><input type="text" name="subject" id="subject"></span>
                            </div>
                            <div>
                                <span><label>SPRÁVA</label></span>
                                <span><textarea name="message" id="message"> </textarea></span>
                            </div>
                            <div>
                                <span><input class="button" type="submit" name="submit" value="Submit"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer-bg">
    <div class="wrap">
        <div class="footer">
            <div class="section group">
                <div class="col_1_of_4 span_1_of_4">
                    <h3>Sledujte nas</h3>
                    <ul class="nav1">
                        <li><a href="#"><img src="images/facebook.png" title="facebook" alt="" />Facebook</a></li>
                    </ul>
                </div>

                <div class="col_1_of_4 span_1_of_4">
                    <h3>Kontakt</h3>
                    <ul class="nav2">
                        <li>Banska Bystrica</li>
                        <li>Slovensko</li>
                        <li>Telefon:0901 111 111</li>
                        <li>Email:<a href="mailto:stk@stk.sk"><span> stk@stk.sk</span></a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <a href="#"><img src="images/logo1.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer1-bg">
    <div class="wrap">
    </div>
</div>
</body>
</html>