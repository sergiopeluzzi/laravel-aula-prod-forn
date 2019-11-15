<?php

namespace Unesc;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'est_produtos';

    protected $primaryKey = 'prod_id';
    
    protected $fillable = [
        'descricao',
        'fornecedor'
    ];
}

