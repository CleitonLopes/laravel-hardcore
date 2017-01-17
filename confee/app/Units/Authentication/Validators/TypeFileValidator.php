<?php

namespace Confee\Units\Authentication\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class TypeFileValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'arquivo'       => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [

        ],
   ];
}
