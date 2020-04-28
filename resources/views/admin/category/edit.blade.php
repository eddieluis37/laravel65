@extends('plantilla.admin')

@section('titulo', 'Editar Categoría')

@section('contenido')



<div id="apicategory">

  <form action="{{ route('admin.category.update',$cat->id)}}" method="POST">
    @csrf
    @method('PUT')

    <span style="display:none;" id="editar">{{ $editar }}</span>
    <span style="display:none;" id="nombretemp">{{ $cat->nombre }}</span>

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Editar Categorías</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">

        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input v-model="nombre" @blur="getCategory" @focus="div_aparecer= false" class="form-control" type="text" name="nombre" id="nombre">
          <label for="slug">Slug</label>
          <input readonly v-model="generarSLug" class="form-control" type="text" name="slug" id="slug" value="{{ $cat->slug }} ">
          <div v-if="div_aparecer" v-bind:class="div_clase_slug">
            @{{ div_mensajeslug }}
          </div>
          <br>
          <label for="description">Descripción</label>
          <textarea class="form-control" name="description" id="description" cols="30" rows="5"> {{ $cat->description }} </textarea>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <a class="btn btn-danger" href="{{ route('cancelar','admin.category.index') }}">Cancelar</a>
        <input :disabled="deshabilitar_boton==1" type="submit" value="Guardar" class="btn btn-primary float-right">
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
</div>
</form>
@endsection