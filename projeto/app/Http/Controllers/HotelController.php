<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function mostrarHoteis(){
    $hoteis = ['Hotel 1', 
    'Hotel 2',
    'Hotel 3'];

    foreach ($hoteis as $hotel){
        echo '<br>';
        echo $hotel;
    }

    
}

    public function blade(){
        return view('master');
}
}

