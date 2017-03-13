<?php
/**
 * Created by PhpStorm.
 * User: cheru
 * Date: 13/03/2017
 * Time: 17:11
 */

namespace CodeAgenda\Http\Controllers;

class AgendaController extends Controller
{
    public function index()
    {
        return view('agendas.index');
    }
}