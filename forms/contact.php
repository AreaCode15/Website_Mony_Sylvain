<?php
header('Content-Type: text/html;charset=UTF-8');

    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: monysylvain.fr' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis votre site web</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
            <b>Sujet : </b>' . $_POST['subject'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('monysylvain@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';

echo '


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta charset=”utf-8″>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="assets/img/logo.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <center><h1><br /><br /><br />Merci de nous avoir contactez.<br /> Nous vous répondrons dans les plus bref délais.</h1>
    <p class="back"><br /><br />Revenir à <a href="index.html">l accueil</a></p></center>
</div>

</body>

</html>

';
    }

?>