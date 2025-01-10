<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    public function enviarEmail()
    {
        $dados = [
            'titulo' => 'Teste de E-mail',
            'mensagem' => 'Este é um e-mail de teste enviado através do servidor SMTP do Gmail.'
        ];

        Mail::send([], [], function ($message) use ($dados) {
            $message->to('destinatario@dominio.com')
                    ->subject($dados['titulo'])
                    ->setBody($dados['mensagem'], 'text/html');  // Corpo do e-mail em HTML
        });

        return 'E-mail enviado com sucesso!';
    }

}



