<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>

<body>

    <div class="baniere">

        <div>
            <div>
                <p>Portfolio Hugo Gergereau</p>
            </div>
        </div>
        <div>
            <div>
                <p>CONTACT</p>
            </div>
        </div>
    </div>

    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';



    if (isset($_POST['formvalid'])) : //envoi du formulaire 
        
        $mail = new PHPMailer(); //envoi Email LienToKen
        $mail->Host = "smtp.gmail.com"; //SMTP server
        $mail->Port = "587"; //SMTP Port
        $mail->SMTPSecure = 'tls';
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = "serveur.hugo.gergereau@gmail.com"; //mon email
        $mail->Password = "hugo22012003"; //mon mdp
        $mail->setFrom('serveur.hugo.gergereau@gmail.com', 'no-reply'); // email de l envoyeur
        $mail->Subject = 'mail coucou';
        $mail->addAddress("serveur.hugo.gergereau@gmail.com"); //email Ã  envoyer ici $email est poser------------------
        // $mail->AddEmbeddedImage('src/images/logo-insta-1.jpg', 'logo_2u');
        // $mail->AddEmbeddedImage('src/images/linkedin.jpg', 'logo_3u');
        // $mail->AddEmbeddedImage('src/images/twitter.jpg', 'logo_4u');
        // $mail->AddEmbeddedImage('src/images/facebook.jpg', 'logo_5u');
        $mail->MsgHTML('message de ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' ' . $_POST['objet'] . ' ' . $_POST['email'] . ' ' . $_POST['message'] . '
                ');
        $mail->Send();

    endif;

    ?>


    <nav>
        <ul>
            <li>
                <p>HUGO GERGEREAU</p>
            </li>
            <li><a class="lien" href="index.html">Accueil</a></li>
            <li><a class="lien" href="cv.html">Mon Cv</a></li>
            <li><a class="lien" href="mon-labos.html">Mon Labo</a></li>
            <li><a class="lien" href="epreuve-e4.html">Épreuve E4</a></li>
            <li><a class="lien" href="epreuve-e5.html">Épreuve E5</a></li>
            <li><a class="lien" href="a-propos.html">A Propos</a></li>
        </ul>
    </nav>

    <div class="box">
        <div class="box-parent">
            <div><img class="image-tel anim-tel" src="03-resource/tel.png" title="TÉLÉPHONE" br></a></div>
            <div>
                <pc class="texte-tel anim-tel">07.50.26.01.40</p>
            </div>
            <div><img class="image-mail anim-mail" src="03-resource/mail.png" title="EMAIL"></a></div>
            <div>
                <p class="texte-mail anim-mail">hugo.gergereau.pro@gmail.com</p>
            </div>
            <div><img class="image-adresse anim-adresse" src="03-resource/adresse.png" title="ADRESSE"></a></div>
            <div>
                <p class="texte-adresse anim-adresse"> 23 rue Jean Rostand 77240 Vert Saint Denis</p>
            </div>
            <div><img class="image-linkedin anim-linkedin" src="03-resource/linkedin.png" title="LINKEDIN"></div>
            <div><a class="texte-linkedin anim-linkedin" href="https://www.linkedin.com/in/hugo-gergereau-b66947216/">www.linkedin/hugo-gergereau.com</a></div>
        </div>


        <div class="box-parent-formulaire">
            <div class="contain">
                <form method="post">
                    <h1 class="text-contact">Me contacter :</h1>
                    <div class="text-formulaire">
                        <h2>Nom :</h2>
                        <input name="nom" type="text" required>
                    </div>

                    <div class="text-formulaire">
                        <h2>Prénom :</h2>
                        <input name="prenom" type="text" required>
                    </div>

                    <div class="text-formulaire">
                        <h2>Email :</h2>
                        <input name="email" type="text" required>
                    </div>

                    <div class="text-formulaire">
                        <h2>Objet :</h2>
                        <input name="objet" type="text" required>
                    </div>

                    <h2 cclass="text-formulaire">Message :</h2>
                    <textarea class="text-message-entre"></textarea>

                    <button class="bouton-message" type="submit" name="formvalid">envoyer</button>
                </form>
            </div>

        </div>
    </div>






</body>

</html>