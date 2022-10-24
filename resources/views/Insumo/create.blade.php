@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<div class="container" style="max-width: 520px;">
    <div class="row">
        <div class="col">
            <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
            <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Crear Insumo</div>
                <form class="row-g-3 needs-validation" action="/Insumo" method="POST" novalidate>
                    @csrf
                   <!--
                    <div class="">
                        <label for="" class="form-label">Id</label>
                        <input id="Id" placeholder="Escriba el Id" name="id" type="text" class="form-control" required>
                        Mensaje para validación
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>-->


                    <div class="">
                        <label for="" class="form-label">nombre product</label>
                        <input id="nombreproduct" placeholder="Escriba el nombre product" name="nombreproduct" type="text" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label">fecha caducida</label>
                        <input id="fechacaducida" placeholder="Escriba el fecha caducida" name="fechacaducida" type="date" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label">fecha elaboracion</label>
                        <input id="fechaelaboracion" placeholder="Escriba el fecha elaboracion" name="fechaelaboracion" type="date" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label">cantidad accesor</label>
                        <input id="cantidadaccesor" placeholder="Escriba La  cantidad accesor" name="cantidadaccesor" type="text" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label">cantidad repuesto</label>
                        <input id="cantidadrepuesto" placeholder="Escriba La  cantidad repuesto" name="cantidadrepuesto" type="text" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label">ventas</label>
                        <input id="ventas" placeholder="Escriba La  ventas" name="ventas" type="text" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label">oferta</label>
                        <input id="oferta" placeholder="Escriba La  oferta" name="oferta" type="text" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/Insumo" class="btn btn-secondary fw-bold my-3">Cancelar</a>
                        <button type="submit" class="btn btn-primary fw-bold my-3" >Enviar</button>
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

@endsection

