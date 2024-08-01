<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class indexController extends Controller
{
    public function about(): View
    {
        $pessoas = DB::select('SELECT * FROM pessoa');

        return view('pages.about', compact('pessoas'));
    }

    public function history(): View
    {

        $path = 'assets/imagem/galeria/';
        $arquivos = glob("$path{*.jpg,*.JPG,*.png,*.gif,*.bmp}", GLOB_BRACE);


        return view(
            "pages.history",
            compact(
                [
                    "arquivos"
                ]
            )
        );
    }

    public function transparencia(): View
    {
        $dados = DB::table('transparencia')
            ->get();

        return view('pages.transparencia', compact('dados'));
    }

    public function agenda(): View
    {
        $dados = DB::table('itemagenda')
            ->get();

        return view('pages.agenda', compact('dados'));
    }

    public function send(Request $request)
    {
        $message = $request->message;
        $nome = $request->nome;
        $email = $request->email;

        $data = array('name' => $request->nome, 'body' => $request->message, 'email' => $request->email, 'telefone' => $request->telefone, 'data' => Date('d/m/Y H:i:s'));

        Mail::send('utilitarios.email', $data, function ($message) use ($nome, $email) {
            $message->to('ctn@servproaparecida.org.br', 'Contato Web - ' . $nome)
                ->subject('Formulário de Contato');
            $message->from('ctn@servproaparecida.org.br', $nome);
        });

        return Redirect::route('contato')->with('status', TRUE);
    }
}
