<div class="modal-header">
    <h4 class="modal-title">Registro de Asistencia en Linea</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form class="form-horizontal" id="formulario_crear" method="POST" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="form-group row">
            <label for="nombre" class="col-sm-4 col-form-label text-right">DNI:</label>
            <div class="col-sm-8 input">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ingrese DNI">
            </div>
        </div>
        <div class="form-group row">
            <label for="descripcion" class="col-sm-4 col-form-label text-right">Hora Actual:</label>
            <div class="col-sm-8 input">
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" value="{{  Carbon\Carbon::now() }}" disabled>
            </div>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Registrar</button>
        
    </div>
</form>
<script>
    document.getElementById('formulario_crear').addEventListener('submit',function(e){
        e.preventDefault();
        crear();
    });

    function crear() {
        const formulario = document.getElementById('formulario_crear');
        const datos = new FormData(formulario);
        axios.post('{{ route('alumnos.store') }}', datos)
            .then(function () {
                $('#modal-alumno').modal('hide');
                toastr.options = {
                    "progressBar": true,
                };

                toastr.success('Marcación correcta');
                buscar();
            })
            .catch(function (error) {                
                const errores=error.response.data.errors;
                const campos_con_errores= Object.keys(errores);
                const campos_formulario= formulario.elements;
                for(let i=0;i<campos_formulario.length;i++){
                    const campo_formulario= campos_formulario[i];
                    const nombre_campo =campo_formulario.getAttribute('name');
                    campo_formulario.classList.remove('is-invalid');
                    if(campos_con_errores.includes(nombre_campo)){
                        let div_error = campo_formulario.nextElementSibling;
                        if(typeof(div_error)!='undefined' && div_error!== null){
                            div_error.remove();                            
                        }
                        campo_formulario.classList.add('is-invalid');
                        div_error=document.createElement('div');
                        div_error.classList.add('invalid-feedback');
                        div_error.innerHTML=errores[nombre_campo][0];
                        campo_formulario.parentNode.append(div_error);
                    }
                }
                console.log(campos_con_errores);
                toastr.error(error.response.data.errors, 'Error en registro de asistencia')
            });
    }



</script>
