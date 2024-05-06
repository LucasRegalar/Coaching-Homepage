<?php

namespace http\forms;

//require composer autoloader
// TODO nur composers autoloader benutzen?
require base_path("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Mailer
{

    protected function setSettings(PHPMailer $phpmailer)
    {
        //for more Debug Information:
        //$mailToCostumer->SMTPDebug = SMTP::DEBUG_SERVER;

        $phpmailer->isSMTP();

        //SERVER SESSTINGS 
        //when Server requires auth:
        // $phpmailer->SMTPAuth = true;
        $phpmailer->Host = "localhost";
        // $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $phpmailer->Port = 1025;
        // $phpmailer->Username = "";
        // $phpmailer->Password ="";
    }


    public function sendToSelf($name, $phone, $email, $message)
    {
        $mail = new PHPMailer(true);

        $this->setSettings($mail);

        $mail->setFrom("noreply@silvinaregalar.com", "Coaching Server");
        $mail->addAddress("kontakt@coaching-silvina-regalar.de", "Silvina Regalar");
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "Coaching Anfrage von {$name}";
        $body = $this->buildEmailToSelf($name, $phone, $email, $message);
        $mail->Body = $body;
        $mail->AltBody = $body;

        $mail->send();
    }

    protected function buildEmailToSelf($name, $phone, $email, $message)
    {

        return "
        <p>$message</p> 
        <hr/> 
        <br/> 
        gesendet von <b>$name</b> 
        <br/> 
        <br/>
        Email: $email 
        <br/> 
        <br/>
        Phone: $phone
    ";
    }

    public function sendToCostumer($name, $phone, $email, $message)
    {
        $mail = new PHPMailer(true);

        $this->setSettings($mail);

        $mail->setFrom("noreply@silvinaregalar.com", "Silvina Regalar");
        $mail->addAddress($email, $name);
        $mail->addReplyTo("kontakt@coaching-silvina-regalar.de", "Silvina Regalar");

        $mail->isHTML(true);
        $mail->Subject = "Kopie ihrer Coaching Anfrage";
        $body = $this->buildEmailToCostumer($name, $message);
        $mail->Body = $body;
        $mail->AltBody = $body;

        $mail->send();
    }

    protected function buildEmailToCostumer($name, $message)
    {

        return "
        <p>Sehr geehrte/r $name,</p>
        <br/> 
        <p>Vielen Dank für Ihre Nachricht.</p>
        <p>Ich habe Ihre Anfrage erhalten und werde mich in Kürze bei Ihnen melden.</p>
        <br/> 
        <p>Liebe Grüße</p>
        <p>Silvina Regalar</p>
        <br/> 
        <p>Email: kontakt@coaching-silvina-regalar.de</p>
        <p>Telefonnummer: 0571 7797756</p>
        <a href='https://www.coaching-silvina-regalar.de/'>www.coaching-silvina-regalar.de</a>
        <br/> 
        <hr/> 
        <br/> 
        <h3>Kopie ihrer Anfrage</h3>
        <p>$message</p>
    ";
    }

}