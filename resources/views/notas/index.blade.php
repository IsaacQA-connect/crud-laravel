@extends('welcome')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
  Nuevo
</button>

<div class="table-responsive pt-4">
                <table class="table" >
                    <thead class="table table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tarea</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notas as $row)
                        <tr class="">
                            <td scope="row">{{$row->id}}</td>
                            <td>{{$row->tarea}} </td>
                            <td>{{$row->descripcion}} </td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$row->id}}">
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$row->id}}">
                                    Eliminar
                                </button>
                            </td>  
                        </tr>  
                        @include('notas.info')  
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            @include('notas.create')
@endsection()