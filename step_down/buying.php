<!doctype html>
<html lang="en">

<head>
    <title>Outwood Cars &#8212; Let us find your dream vehicle</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Icon css -->
    <link href="assets/css/icon.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <script type="text/javascript" nonce="7553913d92c74d478f5c81c030c" src="//local.adguard.org?ts=1589830970546&amp;type=content-script&amp;dmn=freelancer-msg-attachments.s3.amazonaws.com&amp;css=1&amp;js=1&amp;gcss=1&amp;rel=1&amp;rji=1"></script>
    <script type="text/javascript" nonce="7553913d92c74d478f5c81c030c" src="//local.adguard.org?ts=1589830970546&amp;name=AdGuard%20Popup%20Blocker&amp;name=AdGuard%20Assistant&amp;name=AdGuard%20Extra&amp;type=user-script"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/purecookie.css" async />
    <script src="./assets/js/purecookie.js" async></script>
    <link href="./assets/css/outwood.css" rel="stylesheet" type="text/css">
    <meta name="google-site-verification" content="F0iHs5sDK-Z29EbhAuOQTLNLn02fJ5R45l8pnsCjwg8" /> 
<style type="text/css">
    .contenterror {
        font: 12px/22px 'gothamlightregular', sans-serif;
        color: #f30f0f;
    }
    .ajaxsuccess {
        background: #ffffff;
        color: #f30f0f;
        font: 12px/22px 'gothamlightregular', sans-serif;
        padding-left: 10px;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 30px;
    }
</style>
</head>

<body>
    <div class="mywrapper">
    <div id="banner-pic"> <img id="mbg" src="assets/images/search-header.png" alt="" style="width:100%" /> </div>
    <div id="headerM" class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-7 text-center text-md-left">
                <div id="logo">
                    <a href="./index.php"><img src="assets/nav-images/outwood-cars.png" width="368" height="103" alt="Outwood Cars" /></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 pl-md-4 pt-4">
                <div class="call-to-action">
                    <p>FOR FURTHER INFORMATION OR TO DISCUSS
                        <br> YOUR REQUIREMENTS PLEASE CALL US ON</p>
                    <h2 style="color:#4492C0"><a href="tel:01794367800" style="color:#4492C0">
                            <h2>07736 360360</h2>
                    <p style="margin-bottom:0px"><a href="mailto:sales@outwoodcars.com?subject=Website Enquiry">E: SALES@OUTWOODCARS.COM</p>
                        </a> </div>
            </div>
        </div>
    </div>
    <nav id="navm" class="navbar navbar-expand-sm navbar-light bg-transparent mt-md-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 w-100">
                <li class="nav-item" id="menu"> <a class="nav-link" href="index.php">HOME</a> </li>
                <li class="nav-item" id="menu"> <a class="nav-link" href="classic.php">CLASSIC</a> </li>
                <li class="nav-item" id="menu"> <a class="nav-link" href="specialist.php">SPECIALIST</a> </li>
                <li class="nav-item" id="menu"> <a class="nav-link" href="selling.php">SELLING</a> </li>
                <li class="nav-item active" id="menu"> <a class="nav-link" href="buying.php">PERSONAL SEARCH</a> </li>
                <li class="nav-item" id="menu"> <a class="nav-link" href="contact.php">CONTACT US</a> </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid mt-5">
        <div id="page-frame">
            <div class="row">
                <div class="col-md-12">
                    <H2>Let us find your perfect vehicle</H2> </div>
                <div class="col-md-4 onethird">
                    <p>Us the form to let as know your dream vehicle and we'll use our network of specialists to search for you.</p>
                </div>
                <div class="col-md-7 twothird">
                  <!--   <form name="ajax-form" id="ajax-form" action="assets/mail/mail-it.php" method="post"> -->
                        <label for="name">Your Name: * <span class="contenterror" id="err-name"></span> </label>
                        <input name="name" id="name" type="text" />
                        <label for="email">E-Mail: * <span class="contenterror" id="err-email"></span> <span class="contenterror" id="err-emailvld"></span> </label>
                        <input name="email" id="email" type="text" />
                        <label for="message">Vehicle Description:* <span class="contenterror" id="err-message"></span></label>
                        <textarea name="message" id="message"></textarea>
                        <div id="button-con">
                            <button class="send_message" id="send" onclick="sendingMail()">Submit</button>
                        </div>
                        
                    <div class="ajaxsuccess" id="successstatus"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php')?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> --></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function sendingMail(){
            uname = $("#name").val();
            uemail = $("#email").val();
            ucontent = $("#message").val();
            console.log(uname);
            console.log(uemail);
            console.log(ucontent);
            $.ajax({ //create an ajax request to display.php
                type: "GET",
                url: "./assets/mail/mail-itapi.php",
                data: { uname: uname, uemail: uemail, ucontent: ucontent },  // data to submit
            
                success: function(response) {
                    console.log(response);
                    var myresponse = JSON.parse(response);
                    
                    var mycontent = myresponse.content;
                    if (mycontent == 'no-email') {
                        $("#err-name").text('');
                        $("#err-email").text('Please enter your email');
                        $("#err-emailvld").text('');
                        $("#err-message").text('');
                        $("#successstatus").text('');
                    }
                    else if (mycontent == 'no-name') {
                        $("#err-name").text('Please enter your name');
                        $("#err-email").text('');
                        $("#err-emailvld").text('');
                        $("#err-message").text('');
                        $("#successstatus").text('');
                    }
                    else if (mycontent == 'no-message') {
                        $("#err-name").text('');
                        $("#err-email").text('');
                        $("#err-emailvld").text('');
                        $("#err-message").text('Please enter a message');
                        $("#successstatus").text('');
                    }
                    else if (mycontent == 'true') {
                        $("#err-name").text('');
                        $("#err-email").text('');
                        $("#err-emailvld").text('');
                        $("#err-message").text('');
                        $("#successstatus").text('Email sent, we will get back to you ASAP');
                    }
                    else if (mycontent == 'invalid-email') {
                        $("#err-name").text('');
                        $("#err-email").text('');
                        $("#err-emailvld").text('Please enter a valid email address');
                        $("#err-message").text('');
                        $("#successstatus").text('');
                    }
                }
            });
            
        }
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ed130bdb7da77ef"></script>
</body>

</html>