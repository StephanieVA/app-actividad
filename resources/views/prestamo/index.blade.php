@extends('prestamo')
@section('title', "Prestamos")
@section('contentP')
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <br>
        <h3>Prestamos de libros</h3>

          <br>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPrestamo">
Nuevo
</button>
        <div class="table-responsive">
            <br>
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">ID</th>
                        {{-- <th scope="col">USUARIO ID</th> --}}
                        <th scope="col">USUARIO</th>
                        {{-- <th scope="col">BOOK ID</th> --}}
                        <th scope="col">LIBRO</th>
                        <th scope="col">FECHA PRESTAMO</th>
                        <th scope="col">FECHA DEVOLUCION</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prestamos as $prestamo)
                        <tr class="">
                            <td scope="row">{{ $prestamo->id }}</td>
                            {{-- <td>{{ $prestamo->user_id }}</td> --}}
                            <td>{{ $prestamo->user->name }}</td>
                            {{-- <td>{{ $prestamo->book_id }}</td> --}}
                            <td>{{ $prestamo->libro->titulo }}</td>
                            <td>{{ $prestamo->fecha_prestamo }}</td>
                            <td>{{ $prestamo->fecha_devolucion }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#detalle{{$prestamo->id}}">
                                    Detalles
                                </button>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#devolver{{$prestamo->id}}">
                                    Finalizar
                                </button>

                            </td>
                        </tr>
                        @include('prestamo.info')
                        @include('prestamo.finalizar')
                    @endforeach

                </tbody>
            </table>
        </div>
        @include('prestamo.create')
    </div>
    <div class="col-md-2"></div>
</div>
@endsection
