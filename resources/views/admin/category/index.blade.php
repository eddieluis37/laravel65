@extends('plantilla.admin')

@section('titulo', 'Adminstración de Categorías')

@section('contenido')

<!-- /.row -->
<div id="confirmareliminar" class="row">

    <span style="display:none;" id="urlbase">{{route('admin.category.index')}}</span>
    @include('custom.modal_eliminar')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sección de Categorías</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 400px;">
                <a class="m-2 float-right btn btn-primary" href="{{ route('admin.category.create') }}">Crear</a>

                <table class="table table-head-fixed">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th>Descripción</th>
                            <th>Fecha de Creación</th>
                            <th>Fecha de Modificación</th>
                            <th colspan="3"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($categorias as $categoria)
                        <tr>
                            <td> {{ $categoria->id }} </td>
                            <td> {{ $categoria->nombre }} </td>
                            <td> {{ $categoria->slug }} </td>
                            <td> {{ $categoria->description }} </td>
                            <td><span class="tag tag-success">{{ $categoria->created_at }}</span></td>
                            <td> {{ $categoria->updated_at }} </td>

                            <td> <a class="btn btn-default"
                                    href="{{ route('admin.category.show',$categoria->slug) }}">Ver</a>
                            </td>

                            <td> <a class="btn btn-info"
                                    href="{{ route('admin.category.edit',$categoria->slug) }}">Editar</a>
                            </td>

                            <td> <a class="btn btn-danger"
                             href="{{ route('admin.category.index') }}"
                                  v-on:click.prevent="deseas_eliminar({{$categoria->id}})"  
                                  >Eliminar</a>
                            </td>


                        </tr>
                        @endforeach



                    </tbody>
                </table>
                {{ $categorias->links() }}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row -->

@endsection