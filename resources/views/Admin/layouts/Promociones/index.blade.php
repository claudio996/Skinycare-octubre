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
                        <th scope="col">Zonas</th>
                        <th scope="col">Servicio</th>
                        <!-- <th scope="col">Numero sesiones</th> -->
                        <th scope="col">Precio 6S</th>
                        <th scope="col">Precio 8S</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>


                <tbody>
                    @foreach ($promociones as $promocion)
                    <tr>
                        <td>{{ $promocion['id'] }}</td>
                        <td>{{ $promocion['nombre'] }}</td>
                        <td>{{ $promocion['zonas'] }}</td>
                        <td>{{ $promocion['servicios_id']}}</td>
                        <td>{{ $promocion->precio_X6S }}</td>
                        <td>{{ $promocion->precio_X8S }}</td>
                        <td>IMAGEN</td>
                        <td>{{ $promocion['estado'] }}</td>

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
                                <form action="{{ url('admin/promociones-store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="card">
                                                                <div class="form-check">

                                                                    <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="M">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Masculino
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault2"  value="F">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Femenino
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault2"  value="N">
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Sin expecificar
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">
                                                         
                                                            <div class="card p-1">
                                                                <select class="form-control myinputs col-12 selectBusca"name="servicio" id="servicio">
                                                                <option disabled><b>Tipo de servicio</b></option>

                                                                    @foreach ($servicios as $servicio)
                                                                    <option value="{{ $servicio->id }}">{{ $servicio->nombre }}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <!-- <p><small>Nombre</small></p> -->
                                                        <div class="card p-1">
                                                            <input type="text" class="form-control" placeholder="Ejemplo: Pack Inspiración " name="nombre">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <p><small>Numero Sesiones</small></p>
                                                            <input type="number" class="form-control" name="numero_sesiones">
                                                        </div>
                                                    </div> -->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        
                                                        <div class="card p-1">
                                                            <select id="miSelect" class="form-control myinputs col-12 selectBusca badge bg-secondary" name="zonas[]" multiple>
                                                            <option disabled>Seleccione zonas</option>
                                                                @foreach ($zonas as $zona)
                                                                
                                                                <option value="{{ $zona->nombre }}">{{ $zona->nombre }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card p-1">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <!-- <p><small>Nombre</small></p> -->
                                                            <div class="form-group">
                                                                <select class="form-select" name="min_sesion">
                                                                    <option disabled><b>Numero Minimo sesiones</b></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <!-- <p><small>Nombre</small></p> -->
                                                            <div class="form-group">
                                                                <select class="form-select" name="max_sesion">                                                                   
                                                                <option disabled><b>Numero maximo sesiones</b></option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            

                                            <div class="card p-1">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <!-- <p><small>Nombre</small></p> -->
                                                            <div class="form-group">
                                                                <input type="number" placeholder="Precio x Min sesiones" class="form-control" name="precio_min_sesion">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <!-- <p><small>Nombre</small></p> -->
                                                            <div class="form-group">
                                                               
                                                                <input type="number" class="form-control"  placeholder="Precio x Max sesiones" name="precio_max_sesion">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="form-group">
                                                            <div class="fom-group">
                                                                <input type="file" class="btn btn-info" id="imagen"  placeholder="Carge Inagen " accept="image/*" name="imagen">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                   
                                                        <div class="fom-group">
                                                            <textarea class="form-control" placeholder="Ingrese Descripción del servicio"></textarea>
                                                        </div>


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