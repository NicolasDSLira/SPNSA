<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function about()
    {
        $pessoas = DB::select('SELECT * FROM pessoa');
        return view('pages.about', compact('pessoas'));
    }

    public function transparencia(){
        $dados = DB::table('transparencia')
            ->get();
        return view('pages.transparencia', compact('dados'));
    }
}
