@extends('adminlte::page')
@section('title', 'Ver trabajos')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Listado de trabajos realizados</h3>
    </div>

    <div class="card-body">
        <table id="works" class="table table-bordered table-striped shadow-lg mt-4">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Titulo</th>
                    <th>Detalle</th>
                    <th>Costo de materiales</th>
                    <th>Costo de trabajo</th>
                    <th>Horas trabajadas</th>
                    <th>Fecha inicio</th>
                    <th>Fecha_fin</th>
                    <th>Materiales</th>
                    <th>Fotos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($works as $work)
                <tr>
                    <td>{{ $work->titulo }}</td>
                    <td>{{ $work->detalle }}</td>
                    <td>{{ $work->costo_materiales }}</td>
                    <td>{{ $work->costo_trabajo }}</td>
                    <td>{{ $work->horas_trabajadas }}</td>
                    <td>{{ $work->fecha_inicio }}</td>
                    <td>{{ $work->fecha_fin }}</td>
                    <td>{{ $work->materiales }}</td>
                    @foreach ($photos as $photo)
                    <td><img src="{{ asset('storage/' . $photo->path) }}" alt="Foto" width="100" height="100"></td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@section('js')
    <!-- DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

    <script>
        $(document).ready(function(){
            $('#works').DataTable({
                responsive: true,
                "language":{
                    "search": "Buscar",
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "info":     "Mostrando página _PAGE_ de _PAGES_",
                    "paginate":  {
                            "previous": "Anterior",
                            "next": "Siguiente",
                    }
                }
            });
        });
    </script>
@endsection
@endsection
