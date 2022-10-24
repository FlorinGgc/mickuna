@extends('layouts.vistapadre')

@section('contenidoPrincipal')

<div class="container" style="max-width: 520px;">
    <div class="row">
        <div class="col">
            <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
            <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Crear Automotora Repuesto</div>
                <form class="row-g-3 needs-validation" action="/automotorarepuesto" method="POST" novalidate>
                    @csrf
                    <!--
                       <div class="">
                        <label for="" class="form-label my-2">id</label>
                        <input id="idautomotorarep" placeholder="Escriba el idautomotorarep" name="id" type="text" class="form-control" required>
                        Mensaje para validación
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>-->

                    <div class="">
                        <label for=""  class="form-label my-2">cantidad</label>
                        <input id="cantidad" placeholder="Escriba la cantidad" name="cantidad" type="number" class="form-control" min="1" max="100" step="1">
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Ingresar Numero Positivos.</div>

                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">detalle</label>
                        <input id="detalle" placeholder="Escriba la detalle" name="detalle" type="text" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">direccion</label>
                        <input id="direccion" placeholder="Escriba la direccion" name="direccion" type="text" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">comuna</label>
                        <input id="comunaregional" placeholder="Escriba la comuna" name="comunaregional" type="text" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">fecha emision</label>
                        <input id="fechaemision" placeholder="Escriba la fecha emision" name="fechaemision" type="date" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">fecha vencimiento </label>
                        <input id="fechavencimiento" placeholder="Escriba la fecha vencimiento" name="fechavencimiento" type="date" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">trabajador regionales </label>
                        <input id="trabajadorregionales" placeholder="Escriba la trabajadorregionales" name="trabajadorregionales" type="number" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">forma pago </label>
                        <input id="formapago" placeholder="Escriba la forma pago" name="formapago" type="text" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">unidad </label>
                        <input id="unidad" placeholder="Escriba la unidad" name="unidad" type="text" class="form-control" min="1" max="100" step="1" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">descuento </label>
                        <input id="descuento" placeholder="Escriba el descuento del producto" name="descuento" type="text" class="form-control"  min="1" max="100" step="1" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">v parciales </label>
                        <input id="vparciales" placeholder="Escriba el v.vparciales" name="vparciales" type="text" class="form-control"  min="1" max="100" step="1" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/automotorarepuesto" class="btn btn-secondary fw-bold my-3">Cancelar</a>
                        <button type="submit" class="btn btn-primary fw-bold my-3" >Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<head>
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
