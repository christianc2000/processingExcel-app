@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Datos</div>

                <div class="card-body">
                    <div class="mt-4">
                        <div class="row">
                            <p><b>DATOS DE CARRERA</b></p>
                        </div>
                        @foreach($archivos as $archivo)
                            <div class="row">
                                <label class="p-2">ID: </label>
                                <input type="text" name="id" value="{{ $archivo->id }}">
                            </div>

                            <div class="row">
                                <label class="p-2">Carrera: </label>
                                <input type="text" name="carrera" value="{{ $archivo->carrera }}">
                            </div>

                            <div class="row">
                                <label class="p-2">Facultad: </label>
                                <input type="text" name="facultad" value="{{ $archivo->facultad }}">
                            </div>
                            <div class="row">
                                <label class="p-2">Localidad: </label>
                                <input type="text" name="localidad" value="{{ $archivo->localidad }}">
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
