<!-- Modal -->
<div class="modal fade" id="createPrestamo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hacer un prestamo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('prestamo.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Usuarios</label>
                            <select class="form-control" id="user_id" name="user_id">
                                @foreach ($user as $users)
                                    <option value="{{ $users->id }}">{{ $users->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Libro</label>
                            <select multiple class="form-control" id="book_id" name="book_id">
                                @foreach ($libro as $libros)
                                    @if ($libros->disponible == true)
                                        <option value="{{ $libros->id }}">{{ $libros->titulo }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Fecha de prestamo</label>
                            <input type="date" class="form-control" id="fecha_prestamo" name="fecha_prestamo">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Fecha de devolucion</label>
                            <input type="date" class="form-control" id="fecha_devolucion" name="fecha_devolucion" >
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
