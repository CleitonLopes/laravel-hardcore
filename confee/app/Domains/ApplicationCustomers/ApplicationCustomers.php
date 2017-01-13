<?php

namespace Confee\Domains\ApplicationCustomers;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ApplicationCustomers extends Model implements Transformable
{

    use TransformableTrait;

    protected $fillable = ['idApplication', 'idCustomer'];
}
