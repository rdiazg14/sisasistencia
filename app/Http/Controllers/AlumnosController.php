<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreAlumnosRequest;

class AlumnosController extends Controller
{
    public function __construct(){
        $mensaje = "Sin comentarios";
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $alumno_b = Alumnos::all();
    //     // echo '<pre>';
    //     // var_dump($alumno_b);
    //     // echo '</pre>';
    //     // exit;
    // return view('admin.alumnos.index', [
    //     'listado' => $alumno_b
    // ]);
            return view('admin.alumnos.index');
    }

    public function buscar(Request $request)
    {

        $dni = $request->input('nombre');
        $alumno_b = Alumnos::where('dni', 'LIKE', '%' . $dni . '%')
            ->orderBy('fechareg', 'DESC')->paginate(5);
        return view('admin.alumnos.tabla', [
            'listado' => $alumno_b
        ]);
    }

    // public function buscar_dni(Request $request)
    // {

    //     $dni = $request->input('dni');
    //     $alumno_find = Alumnos::where('dni', 'LIKE', '%' . $dni . '%')
    //         ->orderBy('fechareg', 'DESC')->get();
    //     return view('admin.alumnos.create', [
    //         'listado' => $alumno_find
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumnos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlumnosRequest $request)
    {
         $dni = $request->input('nombre');
        $nombre_bd= Alumnos::select('nombre')->where('dni', 'LIKE', '%' . $dni . '%')->limit(1)->value('nombre');

        // if(strlen($nombre_bd) > 1){
            $apellidopa_bd= Alumnos::select('apellidopa')->where('dni', 'LIKE', '%' . $dni . '%')->limit(1)->value('apellidopa');
            $apellidoma_bd= Alumnos::select('apellidoma')->where('dni', 'LIKE', '%' . $dni . '%')->limit(1)->value('apellidoma');
            $codigomat_bd= Alumnos::select('codigomat')->where('dni', 'LIKE', '%' . $dni . '%')->limit(1)->value('codigomat');
            $fechareg_bd= DB::raw('CURRENT_TIMESTAMP - INTERVAL 5 HOUR');
            try {
                $alumno = new Alumnos();
                $alumno->dni = $dni;
                $alumno->nombre = $nombre_bd;
                $alumno->apellidopa = $apellidopa_bd;
                $alumno->apellidoma = $apellidoma_bd;
                $alumno->dni = $dni;
                $alumno->codigomat = $codigomat_bd;
                $alumno->fechareg = $fechareg_bd;
                $alumno->save();
    
            } catch (\Exception $error) {
                Log::error($error->getMessage());
            }
        //        }
        // else{
        //     abort(403, "El alumno no existe en la lista");  
        //     // $mensaje= "error";
        //     //  return view('admin.alumnos.crear',compact('mensaje'));
        //    }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
