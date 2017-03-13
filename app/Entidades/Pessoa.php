<?php
/**
 * Created by PhpStorm.
 * User: cheru
 * Date: 13/03/2017
 * Time: 16:47
 */

namespace CodeAgenda\Entidades;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefone()
    {
        //
    }
}