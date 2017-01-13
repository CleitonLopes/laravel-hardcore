<?php

namespace Confee\Domains\ApplicationCustomers;

use Illuminate\Database\Eloquent\Model;

class ApplicationCustomers extends Model
{
    protected $fillable = ['idApplication', 'idCustomer'];
}
