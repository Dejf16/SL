
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
                <a href="index.html"><img src="images/logo.png" alt="" title="logo"></a>
            </div>
            <div class="search">
                <form>
                    <input type="text" value="">
                    <input type="submit" value="">
                </form>
            </div>
            <div class="drp-dwn">
                <select onchange="window.location=this.options[this.selectedIndex].value">
                    <option value="index.html">Home</option>
                    <option value="about.html">About</option>
                    <option value="service.html">Service</option>
                    <option value="contact.html">Contact</option>
                </select>
            </div>
            <div class="menu">
                <ul class="nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li  class="active"><a href="contact.html">Contact</a></li>
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
                        <h3>Find Us Here:</h3>
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
                        <h3>Contact Us</h3>
                        <form action="">
                            <div>
                                <span><label>NAME</label></span>
                                <span><input type="text" name="name" value=""></span>
                            </div>
                            <div>
                                <span><label>E-MAIL</label></span>
                                <span><input type="text" name="email" value=""></span>
                            </div>
                            <div>
                                <span><label>SUBJECT</label></span>
                                <span><input type="text" name="subject" value=""></span>
                            </div>
                            <div>
                                <span><label>MESSAGE</label></span>
                                <span><textarea name="message"> </textarea></span>
                            </div>
                            <div>
                                <span><input type="submit" name="submit" value="Submit"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_POST['submit'])){
    echo " [o4lfaogfsdfdhdfhhdghdhshaehehehahdfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";
    $company_mail = "xdonov00@stud.fit.vutbr.cz";
    $name_tmp = $_POST['name'];
    $email_tmp = $_POST['email'];
    $subject_tmp = $_POST['subject'];
    $message_tmp = $_POST['message'];
    $headers = "Reply-to:$email_tmp";
    mail($company_mail,$subject_tmp,$message_tmp,$headers);
}
?>
<div class="footer-bg">
    <div class="wrap">
        <div class="footer">
            <div class="section group">
                <div class="col_1_of_4 span_1_of_4">
                    <h3>Follow Us</h3>
                    <ul class="nav1">
                        <li><a href="#"><img src="images/facebook.png" title="facebook" alt="" />Facebook</a></li>
                        <li><a href="#"><img src="images/twitter.png" title="twitter" alt=""/>Twitter</a></li>
                        <li><a href="#"><img src="images/gplus.png" title="googole+" alt=""/>Google+</a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h3>Information</h3>
                    <ul class="nav1">
                        <li><a href="#">Always free from repetition</a></li>
                        <li><a href="#">Morbi blandit turpis ewuhre</a></li>
                        <li><a href="#">Integer id ante nec elit mo</a></li>
                        <li><a href="#">Maecenas accumsan lorem sed</a></li>
                    </ul>
                </div>

                <div class="col_1_of_4 span_1_of_4">
                    <h3>Contact Us</h3>
                    <ul class="nav2">
                        <li>22-56-2-9 Sit Amet, Lorem,</li>
                        <li>USA</li>
                        <li>Phone:(00) 222 666 444 </li>
                        <li>Email:<a href="mailto:info@gmail.com"><span> info@mycompany.com</span></a></li>
                    </ul>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <a href="#"><img src="images/logo.png" alt="" /></a>
                    <p class="nav1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer1-bg">
    <div class="wrap">
        <div class="footer1">
            <p></p>
            <p class="w3-link">© 2013 land_agent. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
</div>
</body>
</html>