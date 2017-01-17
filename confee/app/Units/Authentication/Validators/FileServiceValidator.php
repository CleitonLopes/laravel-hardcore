<?php

namespace Confee\Units\Authentication\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class FileServiceValidator extends LaravelValidator
{

    protected $rules = [

        ValidatorInterface::RULE_CREATE => [

            'file' => 'required'

        ]
   ];
}
