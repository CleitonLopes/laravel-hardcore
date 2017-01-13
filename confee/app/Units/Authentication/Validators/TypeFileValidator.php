<?php

namespace Confee\Units\Authentication\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class TypeFileValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'arquivo'       => 'required|string',
            'nomeOriginal'  => 'required|string',
            'extensao'      => 'required|string',
            'mime'          => 'required|string',
            'pasta'         => 'required|string',
            'tamanho'       => 'required|string',
            'iduser'        => 'required|integer'

        ],
        ValidatorInterface::RULE_UPDATE => [

        ],
   ];
}
