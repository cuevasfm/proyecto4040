@extends('layouts.base')

@section('content')
    <br>
    <a class="btn btn-primary" href="/clientes" role="button">Regresar</a>
    <h1 class="display-4">Crear Cliente</h1>
    <hr>
    <form action="/clientes" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" maxlength="50">
            </div>
        </div>
        <div class="row mb-3">
            <label for="celular_" class="col-sm-2 col-form-label">celular_</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="celular_" id="celular_" maxlength="12">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" id="email" maxlength="40">
            </div>
        </div>
        <div class="row mb-3">
            <label for="city" class="col-sm-2 col-form-label">city</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="city" id="city" maxlength="12">
            </div>
        </div>
        <div class="row mb-3">
            <label for="fecha_nac" class="col-sm-2 col-form-label">fecha_nac</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="fecha_nac" id="fecha_nac">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
