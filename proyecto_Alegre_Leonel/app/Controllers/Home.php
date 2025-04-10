<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {   
        $data['titulo'] = "CENTRO INFORMATICO REGIONAL";
        return view('proyecto_1/centro_informatico_regional.php', $data);
    }

}
