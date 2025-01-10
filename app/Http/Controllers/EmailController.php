<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviarEmail()
    {
        $dados = [
            'titulo' => 'Teste de E-mail',
            'mensagem' => 'BLA BLA BLA'
        ];

        Mail::to('destinatario@dominio.com')->send(new TestEmail($dados));

        return 'E-mail enviado com sucesso!';
    }
}

