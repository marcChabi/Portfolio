<?php

//On uilise PHPMailer pour envoyer les mails
session_start();

//on importe les fonctions dont on aura besoin
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Assainissement et validation des entrées utilisateur
//pour éviter les injections xss

$email =  htmlentities($_POST['email']);
$message = htmlentities($_POST['message']);
$sujet = "Portfolio - Nouveau message";

//on importe les page php à utiliser dans PHPMailer
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

//on crée une instance de mail qu'o veux envoyer
$mail = new PHPMailer(true);

    //paramétrage du smtp
    try {
        $mail->isSMTP();                                            //le smpt utilisé ici est Gmail
        $mail->Host       = 'smtp.gmail.com';                     //on authorise l'authentificatin
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'assikachabimarc@gmail.com';                     //SMTP username
        $mail->Password   = 'cnbp lncs svxs gefd';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption (pour la sécurité)
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


        //paramétrage de la réception

        $mail->addReplyTo($email); //on définie ici le mail de retour (pour la réponse)
        
        //Destiantion
        $mail->addAddress('marc.chabi@groupe-esigelec.org');  // destinataire 

        //Content
        $mail->isHTML(true);  //Set email format to HTML
        $mail->CharSet = 'UTF-8'; // on définie l'encodage utf8
        $mail->Subject = $sujet;
        $mail->Body = "<h2>Vous avez un nouveau message</h2> <br> Email: $email <br> Message: $message <br>";
        $mail->Body .= "<meta charset='UTF-8'>   <meta name='viewport' content='width=device-width, initial-scale=1.0'>";

        if($mail->send()){
            header("Location: ../index.php?status=success");
            exit();
        }
        
    
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
