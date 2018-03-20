<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Html\HtmlServiceProvider;
use Conexiones;
use DB;
use App\Archivos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function archivos()
    {
      $archivos= DB::table('archivos')
        ->select(
          'id',
          'descripcion'
          )
          ->get();
         return view('front.archivos')
         ->with('archivos',$archivos);
    }
    public function subir()
    {
        return view('front.subirarchivos');
    }
    public function status()
    {
        return view('front.estatus');
    }
}
