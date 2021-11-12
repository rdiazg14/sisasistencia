@if ($listado->count() > 0)
<div class="col-12">
    <div class="col-12 table-responsive">
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
    <div class="col-12 table-responsive">
        {{ $listado->links('vendor.pagination.bootstrap-4') }}
    </div>
@else
    <div class="col-12 table-responsive">
        <blockquote class="blockquote">
            <p class="mb-0">No se encontraron resultados.</p>
        </blockquote>
    </div>
@endif
</div>

