<?php

namespace Confee\Domains\Customers;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Customer extends Model implements  Transformable
{

    use TransformableTrait;

    protected $fillable = ['id', 'nome', 'razaosocial', 'fantasia', 'cpfcnpj', 'ie', 'fisicajuridica'];
}
