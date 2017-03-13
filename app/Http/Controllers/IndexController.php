<?php
/**
 * Created by PhpStorm.
 * User: cheru
 * Date: 13/03/2017
 * Time: 16:44
 */

namespace CodeAgenda\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('layouts');
    }
}