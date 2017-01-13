<?php

namespace Confee\Domains\Applications;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Application extends Model implements Transformable
{

    use TransformableTrait;

    protected $fillable = ['id', 'descricao'];
}
