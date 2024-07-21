<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function about() : View
    {
        $pessoas = DB::select('SELECT * FROM pessoa');
        
        return view('pages.about', compact('pessoas'));
    }

    public function transparencia() : View 
    {
        $dados = DB::table('transparencia')
            ->get();

        return view('pages.transparencia', compact('dados'));
    }

    public function agenda() : View 
    {   
        $dados = DB::table('itemagenda')
            ->get();

        return view('pages.agenda', compact('dados'));
    }
}
