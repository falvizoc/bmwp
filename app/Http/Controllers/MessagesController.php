<?php

namespace App\Http\Controllers;


class MessagesController extends Controller
{
    //
    public function store(){
        request()->validate([
            'nombre' => 'required',
            'correo_electronico' => 'required|email',
            'teléfono' => 'required',
        ]);
    }
}
