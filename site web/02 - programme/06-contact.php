<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="06-contact.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marcellus&display=swap');
    
        .objet {
            font-family: 'Marcellus', serif;
            display: flex;
            justify-content: space-between;
            align-items: center;
    
        }
    
        .input_nav {
            width: 240px;
            height: 30px;
        }
    
        .contain {
            width: 400px;
            background: rgba(212, 128, 73, 0.493);
            border-radius: 20px;
            padding: 30px;
            -webkit-animation: shadow-drop-2-center 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                animation: shadow-drop-2-center 0.4s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }
    
        @-webkit-keyframes shadow-drop-2-center {
      0% {
        -webkit-transform: translateZ(0);
                transform: translateZ(0);
        -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
      }
      100% {
        -webkit-transform: translateZ(50px);
                transform: translateZ(50px);
        -webkit-box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
                box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
      }
    }
    @keyframes shadow-drop-2-center {
      0% {
        -webkit-transform: translateZ(0);
                transform: translateZ(0);
        -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
                box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
      }
      100% {
        -webkit-transform: translateZ(50px);
                transform: translateZ(50px);
        -webkit-box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
                box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.35);
      }
    }
    
    </style>
    </head>

    
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';



if (isset($_POST['formvalid'])) : //envoi du formulaire 
    $mail = new PHPMailer(); //envoi Email LienToKen
    $mail->Host = "smtp.office365.com"; //SMTP server
    $mail->Port = "587"; //SMTP Port
    $mail->SMTPSecure = 'tls';
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "h.gergereau@insta.fr"; //mon email
    $mail->Password = "H.ugo/2201 "; //mon mdp
    $mail->setFrom('h.gergereau@insta.fr', 'no-reply'); // email de l envoyeur
    $mail->Subject = 'mail coucou';
    $mail->addAddress("serveur.hugo.gergereau@gmail.com"); //email Ã  envoyer ici $email est poser------------------
    // $mail->AddEmbeddedImage('src/images/logo-insta-1.jpg', 'logo_2u');
    // $mail->AddEmbeddedImage('src/images/linkedin.jpg', 'logo_3u');
    // $mail->AddEmbeddedImage('src/images/twitter.jpg', 'logo_4u');
    // $mail->AddEmbeddedImage('src/images/facebook.jpg', 'logo_5u');
    $mail->MsgHTML('message de '.$_POST['nom'].' '.$_POST['prenom'].' '.$_POST['objet'].' '.$_POST['email'].' '.$_POST['message'].'
                ');
    $mail->Send();
    
endif;

?>

<body>
<nav>
    <ul>
        <li><a class="lien" href="01-index.html">Acceuil</a></li>
        <li><a class="lien" href="02-cv.html">Mon Cv</a></li>
        <li><a class="lien" href="03-mon-labos.html">Mon Labo</a></li>
        <li><a class="lien" href="04-situation-pro.html">Situation Pro</a></li>    
        <li><a class="lien" href="05-a-propos.html">A Propos</a></li>  
    </ul>
</nav>


<div class="box-parent">
    <div><img class="image-tel" src="03-resource/tel.png" title="TÉLÉPHONE"  br ></a></div>
    <div><pc class="texte-tel" >07.50.26.01.40</p></div>
    <div><img class="image-mail" src="03-resource/mail.png" title="EMAIL"  ></a></div>
    <div><p class="texte-mail" >hugo.gergereau.pro@gmail.com</p></div>
    <div><img class="image-adresse" src="03-resource/adresse.png" title="ADRESSE"  ></a></div>
    <div><p class="texte-adresse" > 23 rue jean rostand 77240 Vert Saint Denis</p></div>
    <div><img class="image-linkedin" src="03-resource/linkedin.png" title="LINKEDIN"  ></div>
    <div><a class="texte-linkedin" href="https://www.linkedin.com/in/hugo-gergereau-b66947216/">www.linkedin/hugo-gergereau.com</a></div>
</div>


<div class="box-parent-formulaire">
<div class="contain">
        <form action="" method="post">
        <h1>Me contacter :</h1>
        <div class="objet">
            <h2>Nom :</h2>
                <input class="input_nav" name="nom" type="text" required>
        </div>
        <div class="objet">
            <h2>Prénom :</h2>
                <input class="input_nav" name="prenom" type="text" required>
        </div>
        <div class="objet">
            <h2>Email :</h2>
                <input class="input_nav"  name="email" type="text" required>
        </div>
        <div class="objet">
            <h2>Objet :</h2>
                <input class="input_nav"  name="objet" type="text" required>
        </div>

        <h2 class="objet">Message :</h2>
            <textarea style="width:100%; resize: none;" name="message" id="" cols="30" rows="10" required></textarea>
        
        <button type="submit" name="formvalid">envoyer</button>
        </form>
    </div>
    
</div>







</body>
</html>
