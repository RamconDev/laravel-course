<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Para invocar una unica ruta se usa __invoke
     */
    public function __invoke()
    {
        return "Home";
    }
}
