@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<div class="container" style="max-width: 520px;">
    <div class="row">
        <div class="col">
            <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
            <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Crear Diagnosticos</div>
            <form class="row-g-3 needs-validation" action="/diagnostico" method="POST" novalidate>
                    @csrf
                    <!--
                    <div class="">
                        <label for="" class="form-label">iddiagnostico</label>
                        <input id="id" placeholder="Escriba el iddiagnostico" name="id" type="text" class="form-control" required>
                        Mensaje para validación
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>-->



                    <div class="">
                        <label for="" class="form-label">repuesto</label>
                        <input id="repuesto" placeholder="Escriba el  repuesto" name="repuesto" type="text" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label">escaneos global</label>
                        <input  min='0' id="escaneosglobal" placeholder="Escriba el escaneosglobal" name="escaneosglobal" type="number" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label">evaluacion global</label>
                        <input  min='0' id="evaluacionglobal" placeholder="Escriba la evaluacionglobal" name="evaluacionglobal" type="number" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/diagnostico" class="btn btn-secondary fw-bold my-3">Cancelar</a>
                        <button type="submit" class="btn btn-primary fw-bold my-3" >Enviar</button>
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
