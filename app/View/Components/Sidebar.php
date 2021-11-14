<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $ruta_actual = Route::currentRouteName();
        $tituloSistema = 'SISAsistencia';
        $nombreUsuario = auth()->user()->name;
        $menuTablero = [
            'titulo' => 'DASHBOARD',
            'ruta' => 'admin'
        ];
        $opcionesMenu = [

            "Registrar Asistencia" => [
                [
                    'titulo' => 'Alumnos',
                    'ruta' => route('alumnos.index')
                ],
                [
                    'titulo' => 'Docentes',
                    'ruta' => 'docentes'
                ],
                [
                    'titulo' => 'Administrativos',
                    'ruta' => 'administrativos'
                ],
            ],
            "Reporte Asistencia" => [
                [
                    'titulo' => 'Alumnos',
                    'ruta' => 'reportes' //route('alumnos.reportes')
                ],
                [
                    'titulo' => 'Docentes',
                    'ruta' => 'docentes'
                ],
                [
                    'titulo' => 'Administrativos',
                    'ruta' => 'administrativos'
                ],
            ],
            "Relación Personal" => [
                [
                    'titulo' => 'Alumnos',
                    'ruta' => 'lista' //route('alumnos.reportes')
                ],
                [
                    'titulo' => 'Docentes',
                    'ruta' => 'docentes'
                ],
                [
                    'titulo' => 'Administrativos',
                    'ruta' => 'administrativos'
                ],
            ]
        ];
        $botonSalir = [
            'titulo' => 'SALIR',
            'ruta' => route('logout')
        ];



        return view('components.sidebar',[
            'tituloSistema' => $tituloSistema,
            'nombreUsuario' => $nombreUsuario,
            'menuTablero' => $menuTablero,
            'opcionesMenu' => $opcionesMenu,
            'ruta_actual' => $ruta_actual,
            'botonSalir' => $botonSalir
            
        ]);
    }
    }