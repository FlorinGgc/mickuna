@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<div class="container" style="max-width: 520px;">
    <div class="row">
        <div class="col">
        <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
            <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Editar Cliente</div>
    <form class="row-g-3 needs-validation" action="/cliente/{{$cliente->id}}" method="POST" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="">
  <label for="" class="form-label">idclientes </label>
   <input id="idclientes " value="{{$cliente->idclientes}}" name="id" type="hidden" class="form-control" required>
       <!--Mensaje para validación -->
        <div class="valid-feedback">¡Se ve bien!</div>
         <div class="invalid-feedback">Debe completar los datos.</div>
         <div class="">

    <label for="" class="form-label">nombre clientes</label>
       <input id="nombreclientes" value="{{$cliente->nombreclientes}}" name="nombreclientes" type="text" class="form-control" required>
       <!--Mensaje para validación -->
      <div class="valid-feedback">¡Se ve bien!</div>
         <div class="invalid-feedback">Debe completar los datos.</div>
         <div class="">
           <label for="" class="form-label">marca</label>
          <input id="marca" value="{{$cliente->marca}}" name="marca" type="text" class="form-control" required>
           <!--Mensaje para validación -->
            <div class="valid-feedback">¡Se ve bien!</div>
         <div class="invalid-feedback">Debe completar los datos.</div>
         <div class="">
         <label for="" class="form-label">patente </label>
         <input id="patente " value="{{$cliente->patente }}" name="patente" type="text" class="form-control" required>
        <!--Mensaje para validación -->
         <div class="valid-feedback">¡Se ve bien!</div>
         <div class="invalid-feedback">Debe completar los datos.</div>
         <div class="">
         <label for="" class="form-label my-2">ano</label>
          <input id="ano" value="{{$cliente->ano}}" name="ano" type="number" class="form-control" required>
            <!--Mensaje para validación -->
       <div class="valid-feedback">¡Se ve bien!</div>
         <div class="invalid-feedback">Debe completar los datos.</div>
        </div>
        <div class="">
         <label for="" class="form-label my-2">km</label>
         <input id="km " value="{{$cliente->km }}" name="km" type="number" class="form-control" required>
        <!--Mensaje para validación -->
          <div class="valid-feedback">¡Se ve bien!</div>
           <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">marca bencina </label>
                        <input id="marcabencina " value="{{$cliente->marcabencina }}" name="marcabencina" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">modelo </label>
                        <input id="modelo " value="{{$cliente->modelo }}" name="modelo " type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">fecha contrato</label>
                        <input id="fechacontrato " value="{{$cliente->fechacontrato}}" name="fechacontrato" type="date" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">fecha entrada </label>
                        <input id="fechaentrada" value="{{$cliente->fechaentrada}}" name="fechaentrada" type="date" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/cliente" class="btn btn-secondary fw-bold my-3">Cancelar</a>
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
