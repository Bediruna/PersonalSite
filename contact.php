﻿<?php
    require_once('bedir_php/PHPMailerAutoload.php');

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML();

    $mail->Username = 'dmloadnotifications@gmail.com';
    $mail->Password = 'Test123!';

    $mail->AddAddress('bedir@dmwtrans.com');
    $mail->Subject = 'Load needs to be delivered soon.';
    $mail->Body = 'TEST';
    $mail->Send();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bedir Aygun</title>
    <link rel="shortcut icon" href="ManIcon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bedir_css/main.css">
    <link href="bedir_css/aos.css" rel="stylesheet">
    <script src="bedir_js/aos.js"></script>
    <script src="bedir_assets/jquery-3.3.1.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Oswald|Mina" rel="stylesheet">

</head>

<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="navFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

            <a href="http://www.bedir.tech" class="w3-bar-item w3-button w3-padding-large">BEDIR AYGUN</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><i class="fa fa-th"></i> PROJECTS</a>
            <a href="resume.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><i class="fa fa-file-text"></i> RESUME</a>
            <a href="contact.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>

            <a href="https://www.linkedin.com/in/bedir-aygun-52129596" class="w3-bar-item w3-button w3-padding-large w3-right"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/bediruna" class="w3-bar-item w3-button w3-padding-large w3-right"><i class="fa fa-github"></i></a>
        </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="#" class="w3-bar-item w3-button w3-padding-large">PROJECTS</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
        <a href="resume.html" class="w3-bar-item w3-button w3-padding-large">RESUME</a>
    </div>




    <footer style="position:absolute">
        <p>Website under construction.</p>
        <p>Copyright &copy; 2018</p>
        <a href="https://github.com/bediruna"><i class="fa fa-github"></i></a>
        <a href="https://www.linkedin.com/in/bedir-aygun-52129596"><i class="fa fa-linkedin"></i></a>
    </footer>

    <script>
        function navFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }
    </script>
</body>
</html>