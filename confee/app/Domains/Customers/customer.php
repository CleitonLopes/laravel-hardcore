<?php

namespace Confee\Domains\Customers;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['id', 'nome', 'razaosocial', 'fantasia', 'cpfcnpj', 'ie', 'fisicajuridica'];
}
