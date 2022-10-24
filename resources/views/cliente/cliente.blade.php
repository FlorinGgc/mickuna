@extends('layouts.vistapadre')

@section('contenidoPrincipal')
<a href="cliente/create" class="btn btn-success my-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:6px;" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
</svg>Nuevo</a>

<div class="table-responsive my-2">
    <table class="table table-striped table-light table-bordered table-hover" style="width:100%; text-align:center;" >
    <thead>

    <tr>
        <th scope="col">idclientes</th>
        <th scope="col">nombre clientes</th>
        <th scope="col">marca</th>
        <th scope="col">patente</th>
        <th scope="col">ano</th>
        <th scope="col">km</th>
        <th scope="col">marca bencina</th>
        <th scope="col">modelo</th>
        <th scope="col">fecha contrato</th>
        <th scope="col">fecha entrada</th>
    </tr>

    </thead>
    <tbody>
        @foreach ($cliente as $clientes)
       <tr>
           <td>{{$cliente->idclientes}}</td>
           <td>{{$cliente->nombrecliente}}</td>
           <td>{{$cliente->marca_car}}</td>
           <td>{{$cliente->patente}}</td>
           <td>{{$cliente->ano}}</td>
           <td>{{$cliente->km}}</td>
           <td>{{$cliente->marcabencina}}</td>
           <td>{{$cliente->modelo}}</td>
           <td>{{$cliente->fechacontrato}}</td>
           <td>{{$cliente->fechaentrada}}</td>
           <td>

           </td class='gap-3'>
           <a href="/cliente/{{$cliente->idclientes}}/edit" class="btn btn-warning btn-sm">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
              </svg>
            </a>
            <button type="button" class="btn btn-danger btn-sm" style="margin: 13px 0" data-bs-toggle="modal" data-bs-target="#modal-delete-{{str_replace('.', '', $cliente->idclientes)}}">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
              </svg>
            </button>
          </td>
          @include('cliente.delete')
        </tr>
      @endforeach
      </tbody>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </table>
</div>
{{$cliente->links()}}

@endsection



