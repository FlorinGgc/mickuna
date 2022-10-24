@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<div class="container" style="max-width: 520px;">
    <div class="row">
        <div class="col">
        <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
            <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Crear Bodega</div>
                <form class="row-g-3 needs-validation" action="/Bodega" method="POST" novalidate>
                    @csrf
                    <!--
                    <div class="">
                    <label for="" class="form-label my-2">id</label>
                        <input id="id" placeholder="Escriba el id" name="id" type="text" class="form-control" required>
                        Mensaje para validación
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>-->

                    <div class="">
                        <label for="" class="form-label my-2">nombre Abarrotes</label>
                        <input   id="nombreAbarrotes" placeholder="Escriba la nombreAbarrotes" name="nombreAbarrotes" type="text" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">cantidad Produc</label>
                        <input   id="cantidadProduc" placeholder="Escriba la cantidadProduc" name="cantidadProduc" type="number" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">cantidad Acc</label>
                        <input   id="cantidadAcc" placeholder="Escriba la cantidadAcc" name="cantidadAcc" type="number" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">Cantidad Insumo</label>
                        <input   id="CantidadInsumo" placeholder="Escriba la CantidadInsumo" name="cantidadAcc" type="number" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/Bodega" class="btn btn-secondary fw-bold my-3">Cancelar</a>
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

