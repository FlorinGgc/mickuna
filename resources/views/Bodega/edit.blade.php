@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<div class="container" style="max-width: 520px;">
    <div class="row">
        <div class="col">
        <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">
            <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white text-center h3">Editar Bodega</div>
                <form class="row-g-3 needs-validation" action="/Bodega/{{$Bodega->id}}" method="POST" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="">
                        <label for="" class="form-label my-2">id</label>
                        <input id="id" value="{{$Bodega->id}}" name="id" type="hidden" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>

                    <div class="">
                        <label for="" class="form-label my-2">nombre Abarrotes</label>
                        <input id="nombreAbarrotes" value="{{$Bodega->nombreAbarrotes}}" name="nombreAbarrotes" type="text" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">cantidad Produc</label>
                        <input id="cantidadProduc" value="{{$Bodega->cantidadProduc}}" name="cantidadProduc" type="number" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">cantidad Acc</label>
                        <input id="cantidadAcc" value="{{$Bodega->cantidadAcc}}" name="cantidadProduc" type="number" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="">
                        <label for="" class="form-label my-2">Cantidad Insumo</label>
                        <input id="CantidadInsumo" value="{{$Bodega->CantidadInsumo}}" name="CantidadInsumo" type="number" class="form-control" required>
                         <!--Mensaje para validación -->
                         <div class="valid-feedback">¡Se ve bien!</div>
                         <div class="invalid-feedback">Debe completar los datos.</div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-2">
                        <a href="/Bodega" class="btn btn-secondary fw-bold my-3">Cancelar</a>
                        <button type="submit" class="btn btn-primary fw-bold my-3" >Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>


