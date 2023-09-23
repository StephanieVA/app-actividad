@extends('libro')
@section('title', 'Tabla de libros')
@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h3>LISTA DE LIBROS</h3>
        <br>
        <br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#creates">
            Nuevo
        </button>
        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">AUTOR</th>
                        <th scope="col">AÑO</th>
                        <th scope="col">GENERO</th>
                        <th scope="col">DISPONIBLE</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($libros as $libro)
                        <tr class="">
                            <td scope="row">{{ $libro->id }}</td>
                            <td>{{ $libro->titulo }}</td>
                            <td>{{ $libro->autor }}</td>
                            <td>{{ $libro->año_publicación }}</td>
                            <td>{{ $libro->género }}</td>
                            @if ($libro->disponible == 1)
                                <td>Disponible</td>
                            @else
                                <td>No Disponible</td>
                            @endif
<td>
    <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#edit{{ $libro->id }}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                data-target="#delete{{ $libro->id }}">
                                Eliminar
                            </button>
</td>


                            </td>
                        </tr>
                        @include('libro.info')
                        @include('libro.delete')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('libro.create')
    </div>
</div>
@endsection
