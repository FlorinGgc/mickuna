@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<div class="container" style="max-width: 520px;">
    <div class="row">
        <div class="col">
            <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
            <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Editar EmpresaNacional</div>
                <form class="row-g-3 needs-validation" action="/EmpresaNacional/{{$EmpresaNacional->id}}" method="POST" novalidate>
                    @csrf
                    @method('PUT')
                    <!--
                    <div class="">
                        <label for="" class="form-label my-2">id</label>
                        <input id="id" value="{{$EmpresaNacional->id}}" name="id" type="text" class="form-control" required>
                         Mensaje para validación
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>-->

                    <div class="">
                        <label for="" class="form-label my-2">venta producto</label>
                        <input id="ventaproducto" value="{{$EmpresaNacional->ventaproducto}}" name="ventaproducto" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">venta accesorios</label>
                        <input id="ventaaccesorios" value="{{$EmpresaNacional->ventaaccesorios}}" name="ventaaccesorios" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">venta repuesto</label>
                        <input id="ventarepuesto" value="{{$EmpresaNacional->ventarepuesto}}" name="ventarepuesto" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">cantidad producto</label>
                        <input id="cantidadproducto" value="{{$EmpresaNacional->cantidadproducto}}" name="cantidadproducto" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">cantidad pyr</label>
                        <input id="cantidadpyr" value="{{$EmpresaNacional->cantidadpyr}}" name="cantidadpyr" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">cantidad accesorio</label>
                        <input id="cantidadaccesorio" value="{{$EmpresaNacional->cantidadaccesorio}}" name="cantidadaccesorio" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/EmpresaNacional" class="btn btn-secondary fw-bold my-3">Cancelar</a>
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







