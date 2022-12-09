<?php

$back = 'http://challenge.test/settimana2/g3/inviare-email/';

//se manca anche un solo dato obbligatorio reindirizzo l'utente alla pagina del form
if (empty($_POST['oggetto']) || empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['messaggio'])) {
    header("Location: $back?msg=Devi compilare tutti i campi");
    exit;//termino l'esecuzione
}


//controllo anche se l'email è una email vera
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header("Location: $back?msg=Devi inserire una email valida");
    exit;//termino l'esecuzione
}

    
    $a = "info@wp-admin.it";//destinatario
    $oggetto = $_POST['oggetto'];
    
    $body = "Email inviata da: $_POST[nome]<br> Indirizzo e-mail mittente: $_POST[email]";
    $body .= $_POST['messaggio'];
    
    $headers = "From: info@challenge.test \r\n";//da dove parte la mail
    $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";//per la codifica corretta dei caratteri
    $headers .= "Reply-To: $_POST[email] \r\n";
    $headers .= 'Cc: altrapersona@example.com '."\r\n";//altri destinatari in cc

    if( mail($a, $oggetto, $body, $headers) ){
        //SE LA MAIL è INVIATA CON SUCCESSO
        header("Location: $back?msg=Invio riuscito");
    }else{
        header("Location: $back?msg=Invio non riuscito");
    }

    exit;


    //servizio per testare le e-mails => mailtrap.io
    
