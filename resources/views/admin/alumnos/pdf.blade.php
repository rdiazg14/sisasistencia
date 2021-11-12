<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a3275;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 35px;
        }

        table {
        border-collapse: collapse;
    }
     
    table,
    th,
    td {
        border: 1px solid black;
    }
     
    th,
    td {
        padding: 5px;
    }


</style>




</head>
<body>
<header>
    <h1>www.latino.edu.pe</h1>
</header>

<main>
    <h1>Reporte Diario de Asistencia de los Alumnos</h1>
</main>

@if ($listado->count() > 0)
<div >
    <div class="col-12 table">
        <table class="table table-hover table-bordered">
            <thead class="table-primary">
                <tr>
                    <th style="width: 50px" class="text-center">#</th>
                    <th class="text-center">Fecha de Registro</th>
                    <th class="text-center">Cod Matrícula</th>
                    <th class="text-center">DNI</th>
                    <th class="text-center">Nombre Alumno</th>
                    <th class="text-center">Tardanzas</th>
                    <th class="text-center">Inasistencias</th>
                </tr>
            </thead>
            <tbody>
                @php
                     $contador = $listado->firstItem();
                @endphp
                @foreach ($listado as  $key=>$value)
                    <tr>
                        <td class="font-weight-bold text-center"> {{ $contador }} </td>
                        <td class="text-center">{{ $value->fechareg }}</td>
                        <td class="text-center">{{ $value->codigomat }}</td>
                        <td class="text-center">{{ $value->dni }}</td>
                        <td class="text-left">{{$value->nombre." ".$value->apellidopa." ".$value->apellidoma }}</td>
                        {{-- <td class="text-center">{{ random_int(1, 9) }}</td>
                        <td class="text-center">{{ random_int(1, 2) }}</td> --}}
                        <td class="text-center">
                            <button type="button" class="btn btn-warning btn-sm">{{ random_int(0, 9) }}</button>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger btn-sm">{{ random_int(0, 2) }}</button>
                        </td>



                    </tr>
                    @php
                        $contador++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="col-12 table-responsive">
        <blockquote class="blockquote">
            <p class="mb-0">No se encontraron resultados.</p>
        </blockquote>
    </div>
@endif
</div>

<footer>
    <h1>www.latino.edu.pe</h1>
</footer>
</body>
</html>