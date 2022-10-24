@extends('layouts.vistapadre')

@section('contenidoPrincipal')

<div class="container" style="max-width: 520px;">
<div class="row">
    <div class="col">
    <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
    <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Crear Cliente</div>
    <form class="row-g-3 needs-validation" action="/cliente" method="POST" novalidate>
        @csrf
        <!--
        <div class="">
        <label for="" class="form-label">idclientes</label>
      <input id="idclientes" placeholder="Escriba el id Cliente" name="id" type="text" class="form-control" required>
 Mensaje para validación
       <div class="valid-feedback">¡Se ve bien!</div>
          <div class="invalid-feedback">Debe completar los datos.</div>
    </div>-->

    <div class="">
      <label for="" class="form-label">nombre clientes </label>
        <input id="nombrecliente" placeholder="Escriba el nombrecliente" name="nombrecliente" type="text" class="form-control" required>
        <!--Mensaje para validación -->
        <div class="valid-feedback">¡Se ve bien!</div>
        <div class="invalid-feedback">Debe completar los datos.</div>
         </div>
         <div class="">
        <label for="" class="form-label">marca</label>
          <input id="marca" placeholder="Escriba La marca" name="marca" type="text" class="form-control" required>
            <!--Mensaje para validación -->
        <div class="valid-feedback">¡Se ve bien!</div>
        <div class="invalid-feedback">Debe completar los datos.</div>
         </div>
         <div class="">
         <label for="" class="form-label my-2">patente</label>
            <input id="patente" placeholder="Escriba la patente" name="patente" type="text" class="form-control" required>
            <!--Mensaje para validación -->
           <div class="valid-feedback">¡Se ve bien!</div>
         <div class="invalid-feedback">Debe completar los datos.</div>
       </div>
       <div class="">
     <label for="" class="form-label my-2">ano</label>
      <input id="ano" placeholder="Escriba el año" name="ano" type="number" class="form-control" required>
      <!--Mensaje para validación -->
           <div class="valid-feedback">¡Se ve bien!</div>
       <div class="invalid-feedback">Debe completar los datos.</div>
        </div>
        <div class="">
        <label for="" class="form-label my-2">km</label>
          <input id="KilometrajeClient" placeholder="Escriba el KilometrajeClient" name="Kilometrajecliente" type="number" class="form-control" required>
           <!--Mensaje para validación -->
        <div class="valid-feedback">¡Se ve bien!</div>
         <div class="invalid-feedback">Debe completar los datos.</div>
         </div>
         <div class="">
         <label for="" class="form-label my-2">marca bencina</label>
           <input id="marcabencina" placeholder="Escriba el marca" name="marcabencina " type="text" class="form-control" required>
              <!--Mensaje para validación -->
           <div class="valid-feedback">¡Se ve bien!</div>
            <div class="invalid-feedback">Debe completar los datos.</div>
            </div>
            <div class="">
             <label for="" class="form-label my-2">modelo</label>
              <input id="modelo" placeholder="Escriba el modelo" name="modelo" type="text" class="form-control" required>
             <!--Mensaje para validación -->
              <div class="valid-feedback">¡Se ve bien!</div>
              <div class="invalid-feedback">Debe completar los datos.</div>
              </div>
              <div class="">
                        <label for="" class="form-label my-2">fecha contrato</label>
                        <input id="fechacontrato" placeholder="Escriba el fechacontrato" name="fechacontrato" type="date" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">fecha entrada </label>
                        <input id="fechaentrada " placeholder="Escriba La fechaentrada " name="fechaentrada" type="date" class="form-control" required>
                        <!--Mensaje para validación -->
                        <div class="valid-feedback">¡Se ve bien!</div>
                        <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/cliente" class="btn btn-secondary fw-bold my-3">Cancelar</a>
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
@endsection



</div>
