@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<div class="container" style="max-width: 520px;">
    <div class="row">
        <div class="col">
            <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
            <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Editar Repuestos</div>
                <form class="row-g-3 needs-validation" action="/automotorarepuesto/{{$automotorarepuesto->id}}" method="POST" novalidate>
                    @csrf
                    @method('PUT')
                    <!--
                    <div class="">
                        <label for="" class="form-label my-2">idautomotorarep</label>
                        <input id="idautomotorarepuesto" value="{{$automotorarepuesto->id}}" name="idautomotorarepuesto" type="text" class="form-control" required>
                         Mensaje para validación
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>-->

                    <div class="">
                        <label for="" class="form-label my-2">cantidad</label>
                        <input  min="0" id="cantidad" value="{{$automotorarepuesto->cantidad}}" name="cantidad" type="text" class="form-control"   min="1" max="100" step="1" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Ingresar Numero Positivos.</div>

                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">detalle</label>
                        <input id="detalle" value="{{$automotorarepuesto->detalle}}" name="detalle" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">direccion</label>
                        <input id="direccion" value="{{$automotorarepuesto->direccion}}" name="direccion" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">comuna</label>
                        <input id="comuna" value="{{$automotorarepuesto->comunaregional}}" name="comunaregional" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">fecha emision</label>
                        <input onblur="alerta();" id="fechaemision" value="{{$automotorarepuesto->fechaemision}}" name="fechaemision" type="date" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">fecha vencimiento</label>
                        <input id="fechavencimiento" value="{{$automotorarepuesto->fechavencimiento}}" name="fechavencimiento" type="date" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">trabajador regionales</label>
                        <input id="trabajadorregionales" value="{{$automotorarepuesto->trabajadorregionales}}" name="trabajadorregionales" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">forma pago</label>
                        <input id="formapago" value="{{$automotorarepuesto->formapago}}" name="formapago" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">unidad</label>
                        <input min="0" id="unidad" value="{{$automotorarepuesto->unidad}}" name="unidad" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">descuento</label>
                        <input min="0"  id="descuento" value="{{$automotorarepuesto->descuento}}" name="descuento" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">v parciales</label>
                        <input  min="0" id="vparciales" value="{{$automotorarepuesto->ventaparciales}}" name="vparciales" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/automotorarepuesto" class="btn btn-secondary fw-bold my-3">Cancelar</a>
                        <button type="submit" class="btn btn-primary fw-bold my-3" >Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>

    // Example starter JavaScript for disabling form submissions if there are invalid fields
   // $("#fechavencimiento").click(function(){

      /*  var fe="";
        var fv="";
        fe=$("#fechaemision").value();
        fv=$("#fechavencimiento").value();
        fe = new Date(fe);
        fv = new Date(fv);

        alert(fe);
        alert(fv);*/
  //  });

(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
  // Example starter JavaScript for disabling form submissions if there are invalid fields


/*var fe="";
        var fv="";
        fe=$("#fechaemision").value();
        fv=$("#fechavencimiento").value();
        fe = new Date(fe);
        fv = new Date(fv);

        console.log(fe);
       console.log(fv);*/

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

@section('javascript')

<script type = "text/javascript">
$( document ).ready(function() {
    alert( "ready!" );

});

</script>
</head>

@stop





