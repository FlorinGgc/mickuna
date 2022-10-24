@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<div class="container" style="max-width: 520px;">
    <div class="row">
        <div class="col">
            <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
            <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Editar Automotora Regional</div>
                <form class="row-g-3 needs-validation" action= "/automotoraregional{{$AutomotoraRegional->id}}" method="POST" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="">
                        <label for="" class="form-label my-2">idAutomotora Regional</label>
                        <input id=">id" value="{{$AutomotoraRegional->id}}" name="id" type="hidden" class="form-control" required>
                          <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>

                    <div class="">
                        <label for="" class="form-label my-2">DetallesAutomotora Regional</label>
                        <input id=">detalles" value="{{$AutomotoraRegional->detalles}}" name="detalles"type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">DireccionAutomotora Regional</label>
                        <input id=">Direccion Automotora Regional" value="{{$AutomotoraRegional->direccionempresa}}" name="direccionempresa"type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">Tipo Pago</label>
                        <input id=">tipopago" value="{{$AutomotoraRegional->tipopago}}" name="tipopago"type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/automotoraregional" class="btn btn-secondary fw-bold my-3">Cancelar</a>
                        <button type="submit" class="btn btn-primary fw-bold my-3" >Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>


@endsection
