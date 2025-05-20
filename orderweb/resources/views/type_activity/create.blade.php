@extends('templates.base')
@section('title', 'Crear Tipo de Actividad')
@section('header', 'Crear Tipo de Actividad')
@section('content')
    <div class = "row">
        <div class="col-lg-12 mb-4">
            <form action="" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="description">Descripcion</label>
                        <input type="text" class="form-control" name="description" id="description" required>
                    </div>  
                </div>
                <div class="row">
                    <div class = "col-lg-6">
                        <button type ="submit" class= "btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class= col-lg-6>
                        <a href="{{ route ('type_activity.index') }}" class = "btn btn-secundary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>

@endsection
