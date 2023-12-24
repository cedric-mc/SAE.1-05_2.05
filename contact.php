<?php
if (isset($_POST['user_mail']) && isset($_POST['user_message'])) {
    $mail = $_POST['user_mail'];
    $msg = $_POST['user_message'];

    $to = "toledo-sae@googlegroups.com";
    $subject = "Réponse vis-à-vis du site de Tolède";

    $message = "Retour du site de Tolède:";
    $message .= "<br><br>";
    $message .= $msg;

    if (isset($_POST['user_nom']) && isset($_POST['user_prenom']) && isset($_POST['user_dateN']) && isset($_POST['user_themef'])) {
        $message .= '<br>Vient de ' . $_POST['user_nom'] . ' ' . $_POST['user_prenom'] . '.<br>Né le ' . $_POST['user_dateN'] . '.<br>A aimé les thèmes suivants:<br>';
        foreach ($_POST['user_themef'] as $theme) {
            $message .= '- ' . $theme . '<br>';
        }
    }

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to, $subject, $message, $headers);
    header("Location: page_principale.php");
}
?>