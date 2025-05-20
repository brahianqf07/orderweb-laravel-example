@extends('templates.base')
@section('title', 'Crear observación')
@section('header', 'Crear observación')
@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
        <form action="" method="post">
            @csrf
            <div class="row form-group">
                <div class="col-lg-12 mb-4">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control" name="description" id="description" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                </div>
                <br><br>
                <div class="col-lg-6">
                    <a href="{{ route('observation.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
