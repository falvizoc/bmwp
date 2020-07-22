<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{

    public function store(){

        $msg = request()->validate([
            'nombre' => 'required',
            'correo_electrónico' => 'required|email',
            'teléfono' => 'required',
            'empresa' => 'sometimes',
            'comentarios'  => 'sometimes',

        ]);

        Mail::to('falvizo@bitmovil.mx') -> send(new MessageReceived($msg));

        return 'Mensaje enviado';
    }
}
