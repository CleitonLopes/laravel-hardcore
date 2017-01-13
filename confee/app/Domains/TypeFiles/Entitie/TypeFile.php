<?php

namespace Confee\Domains\TypeFiles\Entitie;


use Illuminate\Database\Eloquent\Model;

class TypeFile extends Model
{
    protected $fillable = ['id', 'arquivo', 'nomeOriginal', 'extensao', 'mime', 'pasta', 'tamanho', 'iduser'];
}
