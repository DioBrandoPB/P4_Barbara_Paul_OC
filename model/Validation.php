<?php

namespace App\model;

class Validation
{
    public function validate($data, $name)
    {
        if ($name === 'User') {
            $userValidation = new UserValidation();
            $errors = $userValidation->check($data);
            return $errors;
        }
    }
}