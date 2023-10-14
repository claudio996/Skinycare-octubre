@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

<div class="container">
    <h2></h2>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus" aria-hidden="true"></i>

    </button>

    <div class="row mt-2">
        <div class="col-md-12">
            <table class="table table-striped" id="PromocionesTable">
                <thead class="bg-secondary">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>



                    </tr>
                </thead>


                <tbody>
                    @foreach ($zonas as $zona)
                    <tr>
                        <td>{{ $zona['id'] }}</td>
                        <td>{{ $zona['nombre'] }}</td>
                        <td><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="container text-center">

            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">

                    <div class="modal-header bg-info">
                        <h5 class="modal-title" id="exampleModalLabel">Nueva Promoción</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ url('admin/zonas-store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="container">

                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <!-- <p><small>Nombre</small></p> -->
                                                        <div class="card p-1">
                                                            <input type="text" class="form-control" placeholder="Ejemplo: Pack Inspiración " name="nombre">
                                                        </div>
                                                    </div>

                                                 
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
    <script>
        $(document).ready(function() {
            $('#PromocionesTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
            });

        });

        $(document).ready(function() {
            $('#miSelect').select2();


            // function agregarNuevoValor() {
            //     var nuevoValor = '6'; // Puedes obtener el valor desde un input o cualquier otra fuente
            //     var nuevoTexto = 'Nuevo Valor'; // Puedes obtener el texto desde un input o cualquier otra fuente

            //     // Crear una nueva opción y agregarla al select
            //     var nuevaOpcion = new Option(nuevoTexto, nuevoValor);
            //     $('#miSelect').append(nuevaOpcion);

            //     // Actualizar el Select2 para mostrar la nueva opción agregada
            //     $('#miSelect').trigger('change');
            // }
        });
    </script>
    @stop