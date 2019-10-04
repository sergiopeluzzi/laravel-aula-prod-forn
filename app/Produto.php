<?php

namespace Unesc;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'descricao',
        'fornecedor'
    ];

}

