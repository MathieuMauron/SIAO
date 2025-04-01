<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

class TestController
{
    public function index()
    {
        $message = "Ceci est un test d'erreur avec é et '";
    }
}
