<?php

namespace http\forms;

use core\Form;
use core\Validator;

class ContactForm extends Form
{
    public function validate($email, $name, $message, $datenschutz)
    {

        if (!Validator::isEmail($email)) {
            $this->addError("Bitte geben Sie eine gültige E-Mail Adresse ein.");
        }

        if (!Validator::isString($name, 1, 255)) {
            $this->addError("Bitte geben Sie ihren Namen an.");
        }

        if (!Validator::isString($message, 1, 5000)) {
            $this->addError("Bitte teilen Sie mir ihr Anliegen mit. Z. B. 'Interesse an einem Einzelcoaching'");
        }

        if (!$datenschutz) {
            $this->addError("Bitte bestätigen Sie die Datenschutzerklärung");
        }

        return (bool) empty($this->errors);
    }
}