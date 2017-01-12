<?php

namespace Confee\Domains\Applications;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['id', 'descricao'];
}
