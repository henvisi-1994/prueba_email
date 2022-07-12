<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class emailPruebaController extends Controller
{
    public function enviar_email($email)
    {
        $nomb_usuario = 'Juan';
        $credenciales = [
            'email' => $email,
            'nombre' => $nomb_usuario,
        ];
        Mail::send('email.email_bienvenida', $credenciales, function ($msj) use ($email, $nomb_usuario) {
            $msj->to($email, $nomb_usuario);
            $msj->subject('Bienvenido a Nes');
        });
    }

}
