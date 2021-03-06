<?php

namespace Confee\Domains\ApplicationExtensionType;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ApplicationExtensionType extends Model implements Transformable
{

    use TransformableTrait;

    protected $fillable = ['idApplication', 'idExtensionType'];
}
