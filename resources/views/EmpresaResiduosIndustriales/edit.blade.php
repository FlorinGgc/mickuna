@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<div class="container" style="max-width: 520px;">
    <div class="row">
        <div class="col">
            <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
            <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Editar EmpresaResiduoIndustriales</div>
                <form class="row-g-3 needs-validation" action="/EmpresaResiduosindustriales/{{$EmpresaResiduosindustriales->id}}" method="POST" novalidate>
                    @csrf
                    @method('PUT')
                    <!--
                    <div class="">
                        <label for="" class="form-label my-2">id</label>
                        <input id="id" value="{{$EmpresaResiduosindustriales->id}}" name="id" type="text" class="form-control" required>
                         Mensaje para validación
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>-->

                    <div class="">
                        <label for="" class="form-label my-2">cantidadfiltro</label>
                        <input id="cantidadfiltro" value="{{$EmpresaResiduosindustriales->cantidadfiltro}}" name="cantidadfiltro" type="number" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">nombrefiltro</label>
                        <input id="nombrefiltro" value="{{$EmpresaResiduosindustriales->nombrefiltro}}" name="nombrefiltro" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">nombrequimico</label>
                        <input id="nombrequimico" value="{{$EmpresaResiduosindustriales->nombrequimico}}" name="nombrequimico" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">tipobencina</label>
                        <input id="tipobencina" value="{{$EmpresaResiduosindustriales->tipobencina}}" name="tipobencina" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">nombrevendedor</label>
                        <input id="nombrevendedor" value="{{$EmpresaResiduosindustriales->nombrevendedor}}" name="nombrevendedor" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">correo</label>
                        <input id="correo" value="{{$EmpresaResiduosindustriales->correo}}" name="correo" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">telefono</label>
                        <input id="telefono" value="{{$EmpresaResiduosindustriales->telefono}}" name="telefono" type="number" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">cantidadLtaceite</label>
                        <input id="cantidadLtaceite" value="{{$EmpresaResiduosindustriales->cantidadLtaceite}}" name="cantidadLtaceite" type="number" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/EmpresaResiduosindustriales" class="btn btn-secondary fw-bold my-3">Cancelar</a>
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




