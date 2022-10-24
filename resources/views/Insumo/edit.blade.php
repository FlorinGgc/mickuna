@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<div class="container" style="max-width: 520px;">
    <div class="row">
        <div class="col">
            <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
            <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Editar Insumo</div>
                <form class="row-g-3 needs-validation" action="/Insumo/{{$Insumo->id}}" method="POST" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="">
                    <div class="">
                        <label for=""class="form-label">Id</label>
                        <input id="Id" value="{{$Insumo->Id}}" name="Id" type="hidden" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for=""class="form-label">nombreproduct</label>
                        <input id="nombreproduct" value="{{$Insumo->nombre product}}" name="nombreproduct" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for=""class="form-label">fechacaducida</label>
                        <input id="fechacaducida" value="{{$Insumo->fecha caducida}}" name="fechacaducida" type="date" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for=""class="form-label">fechaelaboracion</label>
                        <input id="fechaelaboracion" value="{{$Insumo->fecha elaboracion}}" name="fechaelaboracion" type="date" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for=""class="form-label">cantidadaccesor</label>
                        <input id="cantidadaccesor" value="{{$Insumo->cantidad accesor}}" name="cantidadaccesor" type="date" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for=""class="form-label">cantidad repuesto</label>
                        <input id="cantidadrepuesto" value="{{$Insumo->cantidad repuesto}}" name="cantidadrepuesto" type="number" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for=""class="form-label">ventas</label>
                        <input id="ventas" value="{{$Insumo->ventas}}" name="ventas" type="number" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for=""class="form-label">oferta</label>
                        <input id="oferta" value="{{$Insumo->oferta}}" name="oferta" type="number" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/Insumo" class="btn btn-secondary fw-bold my-3">Cancelar</a>
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

