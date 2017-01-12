<?php

namespace Confee\Domains\TypeFiles;


use Illuminate\Database\Eloquent\Model;

class TypeFile extends Model
{
    protected $fillable = ['id', 'arquivo', 'nomeOriginal', 'extensao', 'mime', 'pasta', 'tamanho', 'idUsuario'];
}
