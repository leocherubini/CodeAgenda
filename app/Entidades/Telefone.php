<?php
/**
 * Created by PhpStorm.
 * User: cheru
 * Date: 13/03/2017
 * Time: 16:49
 */

namespace CodeAgenda\Entidades;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'descricao',
        'codpais',
        'prefixo',
        'sufixo'
    ];
}