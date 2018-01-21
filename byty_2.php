<?php
    $hideTable = false; // is set true when specific apt is chosen, doesnt show the table if true
?>
<!DOCTYPE HTML>

<script type="text/javascript">
    // Specify the normal table row background color
    //   and the background color for when the mouse
    //   hovers over the table row.

    var TableBackgroundNormalColor = "#5F5D51";
    var TableBackgroundMouseoverColor = "#9999ff";

    // These two functions need no customization.
    function ChangeBackgroundColor(row) { row.style.backgroundColor = TableBackgroundMouseoverColor; }
    function RestoreBackgroundColor(row) { row.style.backgroundColor = TableBackgroundNormalColor; }
</script>
<script language="javascript">
    function changeImage(imgSrc, row) {
        $hideTable = true;

        img = document.getElementById("im_1");
        img.src = imgSrc;
        img.title = imgSrc;
        img.style.height = '550px';
        img.style.width = '400px';
        document.getElementById("byt_nazov").innerText = "Byt " + row.cells[0].innerText;
        document.getElementById("poschodie").innerText = "Podlažie: " +  row.cells[1].innerText;
        document.getElementById("poc_izieb").innerText = "Počet izieb: " + row.cells[2].innerText;
        document.getElementById("rozloha").innerText =   "Rozloha: " + row.cells[3].innerText + " metrov štvorcových";
        //  document.getElementById("info_table").rows[1].columns[1].innerHTML = '789';
        // document.getElementById("info_table").rows[1].columns[1].innerHTML= row.cells[1].innerText;
        // document.getElementById("info_table").rows[2].columns[1].innerHTML = row.cells[1].innerText;
        document.getElementById("btn1").innerText = "Máte Záujem? Konkatujte nás!";
        document.getElementById("btn2").innerText = "Naspäť na prehľad bytov.";
        document.getElementById("btn1").style.fontWeight = 'bold';
        document.getElementById("line_r").style.display = 'inline-block';
        document.getElementById("line_l").style.display = 'inline-block';
        window.scrollTo(0, 0);

    }
</script>
<html>
<head>
    <title>Slovenska Lupca</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Baumans' rel='stylesheet' type='text/css'>
    <!--slider-->
    <script src="js/modernizr.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(function(){
            SyntaxHighlighter.all();
        });
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <style>
        #t01 {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #t01 td, #t01 th {
            border: 1px solid #ddd;
            padding: 14px;
            text-align: center;

        }


        #t01 tr:hover {background-color: #ddd;}

        #t01 th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #4CAF50;
            color: white;
            font-weight: bold;

        }

        .lineContainer {
            overflow: hidden;
            margin: 10px;
            display: inline-block;

        }
        .left {
            float: left;
            margin: 30px;
        }
        .right {
            overflow: hidden;
            margin: 30px;
        }

        #byt_nazov {
            font-family: times, Times New Roman, times-roman, georgia, serif;
            margin: 0;
            padding: 0px 0px 6px 6px;
            font-size: 51px;
            line-height: 44px;
            letter-spacing: -2px;
            font-weight: bold;
        }

        #poschodie, #poc_izieb, #rozloha{
            font-family: times, Times New Roman, times-roman, georgia, serif;
            margin: 2px;
            padding: 0px 0px 6px 6px;
            font-size: 41px;
            line-height: 44px;

            border-bottom: 1px solid #1ab828;
        }

    </style>
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
                    <option selected value="byty.html">Byty</option>
                    <option value="about.html">O nas</option>
                    <option value="contact.php">Kontakt</option>
                </select>
            </div>
            <div class="menu">
                <ul class="nav">
                    <li><a href="index.html">Úvod</a></li>
                    <li class="active"><a href="byty.html">Byty</a></li>
                    <li><a href="about.html">O nás</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
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
                <div class="lineContainer">
                    <div id="line_l" class="left">
                        <img src="images/1np_podorys.png" alt="" id="im_1"/>
                    </div>
                    <div id="line_r" class="right">

                        <div id="byt_nazov" style="text-align: center;font-size: xx-large; color: #4CAF50"></div>
                        <br><br>
                        <div id="poschodie" style="text-align: left;font-size: x-large;"></div>
                        <div id="poc_izieb" style="text-align: left;font-size: x-large;"></div>
                        <div id="rozloha" style="text-align: left;font-size: x-large;"></div>
                        <div align="center"><a href="contact.php" class="myButton"  id="btn1"></a></div>
                        <div align="center"><a href="byty.html" class="myButton" id="btn2"></a></div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <?php if(!$hideTable) : ?>
                <table style="width:100%; overflow-x:auto;" id="t01">
                    <tr>
                        <th>Číslo bytu</th>
                        <th>Podlažie</th>
                        <th>Počet izieb</th>
                        <th>Rozloha bytu (m<sup>2</sup>)</th>
                        <th>Stav</th>
                    </tr>
                    <tr class='clickable-row' onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a11.png', this, this)">
                        <td>A/1/1</td>
                        <td>1.NP</td>
                        <td>3</td>
                        <td>64,60</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a14.jpg', this)">
                        <td>A/1/4</td>
                        <td>1.NP</td>
                        <td>2</td>
                        <td>52,14</td>
                        <td><ul>
                            <li style="color: #ee8c14"><span>Rezervovaný</span></li>
                        </ul></td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a17.png', this, this)">
                        <td>A/1/7</td>
                        <td>1.NP</td>
                        <td>3</td>
                        <td>64,60</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a110.png', this, this)">
                        <td>A/1/10 ?todo</td>
                        <td>1.NP</td>
                        <td>2</td>
                        <td>52,14</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/b112.png', this)">
                        <td>B/1/12</td>
                        <td>1.NP</td>
                        <td>1 ?todo</td>
                        <td>76,66</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a22.png', this)">
                        <td>A/2/2</td>
                        <td>2.NP</td>
                        <td>3</td>
                        <td>70,35</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a25.png', this)">
                        <td>A/2/5</td>
                        <td>2.NP</td>
                        <td>2</td>
                        <td>56,64</td>
                        <td><ul>
                            <li style="color: #ee8c14"><span>Rezervovaný</span></li>
                        </ul></td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a222.png', this)">
                        <td>A/2/22 ?todo</td>
                        <td>2.NP</td>
                        <td>3</td>
                        <td>70,35</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a211.png', this)">
                        <td>A/2/11</td>
                        <td>2.NP</td>
                        <td>2</td>
                        <td>58,12</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/b214.png', this)">
                        <td>B/2/14</td>
                        <td>2.NP</td>
                        <td>3</td>
                        <td>85,27</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/b212.png', this)">
                        <td>B/2/12 ?todo</td>
                        <td>2.NP</td>
                        <td>1</td>
                        <td>25,30</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/b213.png', this)">
                        <td>B/2/13</td>
                        <td>2.NP</td>
                        <td>3</td>
                        <td>79,19</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a33.png', this)">
                        <td>A/3/3</td>
                        <td>Podkrovie</td>
                        <td>3</td>
                        <td>70,35</td>
                        <td><ul>
                            <li style="color: #ee8c14"><span>Rezervovaný</span></li>
                        </ul></td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a36.png', this, this)">
                        <td>A/3/6</td>
                        <td>Podkrovie</td>
                        <td>2</td>
                        <td>56,64</td>
                        <td><ul>
                            <li style="color: #ee8c14"><span>Rezervovaný</span></li>
                        </ul></td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a39.png', this, this)">
                        <td>A/3/9</td>
                        <td>Podkrovie</td>
                        <td>3</td>
                        <td>70,35</td>
                        <td>Dostupný</td>
                    </tr>

                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/a312.png', this, this)">
                        <td>A/3/12</td>
                        <td>Podkrovie</td>
                        <td>2</td>
                        <td>58,12</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/b316.png', this, this)">
                        <td>B/3/16</td>
                        <td>Podkrovie</td>
                        <td>3</td>
                        <td>85,39</td>
                        <td>Dostupný</td>
                    </tr>
                    <tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" onclick="changeImage('images/b315.png', this, this)">
                        <td>B/3/15</td>
                        <td>Podkrovie</td>
                        <td>2 ?todo</td>
                        <td>74,54</td>
                        <td>Dostupný</td>
                    </tr>

                </table>
                <?php endif;?>
                <br>
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