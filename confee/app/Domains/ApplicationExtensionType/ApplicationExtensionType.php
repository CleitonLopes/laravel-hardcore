<?php

namespace Confee\Domains\ApplicationExtensionType;

use Illuminate\Database\Eloquent\Model;

class ApplicationExtensionType extends Model
{
    protected $fillable = ['idApplication', 'idExtensionType'];
}
