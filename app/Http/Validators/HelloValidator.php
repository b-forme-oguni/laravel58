<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
    public function validateHello($attribute, $value, $parameters)
    {

        if (is_numeric($value)) {
            return $value % 2 == 0;
        }
    }
}
