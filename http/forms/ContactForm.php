<?php

namespace http\forms;

use core\Form;
use core\Validator;

class ContactForm extends Form
{

    //TODO MAximum characters?
    public function validate($email, $name, $message)
    {

        if (!Validator::isEmail($email)) {
            $this->addError("Bitte geben Sie eine gültige E-Mail Adresse ein.");
        }

        if (!Validator::isString($name)) {
            $this->addError("Bitte geben Sie ihren Namen an.");
        }

        if (!Validator::isString($message)) {
            $this->addError("Bitte teilen Sie mir ihr Anliegen mit. Z. B. 'Interesse an einem Einzelcoaching'");
        }

        return (bool) empty($this->errors);
    }
}