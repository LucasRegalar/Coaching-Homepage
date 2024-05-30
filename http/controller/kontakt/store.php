<?php

use core\Grecaptcha;
use core\Responses;
use core\Session;
use http\forms\ContactForm;
use http\forms\Mailer;

$form = new ContactForm();
$mailer = new Mailer();
$captcha = new Grecaptcha;

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$message = $_POST["message"];
$datenschutz = isset($_POST["datenschutz"]);

Session::flash("old", [
    "name" => $name,
    "phone"=> $phone,
    "email" => $email,
    "message" => $message,
]);

//Validation
if (!$form->validate($email, $name, $message, $datenschutz)) {
    http_response_code(Responses::BadRequest->value);
    Session::flash("errors", $form->getErrors());
    redirect("/kontakt#submit-btn");
}

//google capture
//token received from client
$token = $_POST["g-recaptcha-response"];
$result = $captcha->validate(($token));

if(!$result->success) {
    http_response_code(Responses::Rejected->value);
    redirect("/kontakt/fehler");
}

//Sending Mails
$mailer->sendToSelf($name, $phone, $email, $message);
$mailer->sendToCostumer($name, $phone, $email, $message);

redirect("/kontakt/gesendet");