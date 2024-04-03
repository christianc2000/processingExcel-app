<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Fonts -->
     {{-- <link rel="dns-prefetch" href="//fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

     <!-- Scripts -->
     @vite(['resources/js/app.js'])
    <title>Importar/Exportar - Excel</title>
</head>

<body>
    <div class="container">
        <br />
        <div class="row">
            <div class="
            clod-md-4"></div>
            <div class="clod-md-6"></div>
            <div class="row">
                <form action="{{route('importar.archivo.procesar')}}" method="post" enctype="multipart/form-data">
                    @csrf
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

                    <div class="col-md-6 m-2">
                        <input class="form-group" type="file" id="documento_analisis" name="documento">
                    </div>
                    <div class="row">
                        <div class="col-md-6 m-2">
                            <button class="btn btn-primary" type="submit">Mostrar Datos</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>

        <div class="row">
            <div class="col-md-2">
                <form action="{{route('pdf')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="display:none">
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

                        <div class="clo-md-6">
                            <input type="file" id="documento_exportar" name="documento">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 m-2">
                            <button class="btn btn-danger" type="submit">Guardar PDF</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var input1 = document.getElementById('documento_analisis');
        var input2 = document.getElementById('documento_exportar');

        input1.addEventListener('change', function(e) {
            if (e.target.files[0]) {
                const dataTransfer = new DataTransfer();
                dataTransfer.items.add(e.target.files[0]);
                input2.files = dataTransfer.files;
                //document.body.append('Archivo seleccionado ' + e.target.files[0].name);
            }

        });
      </script>
</body>

</html>
