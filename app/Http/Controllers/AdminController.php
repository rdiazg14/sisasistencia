<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function inicio(){
        return view('admin.index');
    }

    public function docentes(){
        return view('admin.docentes.index');
    }
    public function administrativos(){
        return view('admin.administrativos.index');
    }
    public function docentesrep(){
        return view('admin.docentes.reportes');
    }
    public function administrativosrep(){
        return view('admin.administrativos.reportes');
    }

    public function docenteslist(){
        return view('admin.docentes.lista');
    }
    public function administrativoslist(){
        return view('admin.administrativos.lista');
    }

}
