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


class ArchivosController extends Controller
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

    public function creararchivo(Request $request)
    {
      $sliderFormData = $request->all();
      $attributeNames = array(
        'descripcion'=> 'Descripción',
        'new_archivo'=> 'Archivo',
      );
      $rules = [
        'descripcion'=> 'required',
        'new_archivo'=> 'required',
      ];

      $validation = Validator::make($request->all(), $rules);
      $validation->setAttributeNames($attributeNames);

      if($validation->fails())
      {
          return redirect()->back()->withErrors($validation)->withInput()->with('status', 'ERROR');
      }
      else {

        if( ($request->file('new_archivo')) )
        {
          $validationRules = [
              'new_archivo' => 'mimes:,png,gif,doc,jpg,jpeg'
          ];
           $path = $request->file('new_archivo')->store('upload');

           Storage::disk('uploads')->put('', $request->file('new_archivo'));
           $archivo= new Archivos;
           $archivo->descripcion= $sliderFormData['descripcion'];
           $archivo->path= $path;
           $archivo->save();
           return redirect('/archivos');
      }
    }
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
        return view('front.archivos');
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
