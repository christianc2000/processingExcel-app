{{-- <!DOCTYPE html> --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.bunny.net">
         <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('build/app.css') }}">
    <script src="{{ asset('build/app.js') }}"></script>

    {{-- @vite(['resources/js/app.js']) --}}
    <title>Vista Previa {{ $encuesta['nombreArchivo'] }}</title>

    <style>
        body {
            background-color: white;
            font-family: 'Arial' !important;
        }

        h1 {
            color: #000000;
            text-align: center;
            font-weight: bold !important;
            font-size: 16px !important;
        }

        h2 {
            color: #000000;
            text-align: center;
            font-weight: bold !important;
            font-size: 14px !important;
        }

        h3 {
            color: #000000;
            text-align: center;
            font-size: 12px !important;
        }

        .encabezado {
            line-height: 2px;
        }

        .izquierda {
            text-align: left;
        }

        .derecha {
            text-align: right;
        }

        .mayuscula {
            text-transform: uppercase;
        }

        .titulo-seccion {
            color: #000000;
            text-align: left;
            font-weight: bold !important;
            font-size: 14px !important;
        }

        .titulo-seccion2 {
            color: #000000;
            text-align: left;
            font-weight: semibold !important;
            font-size: 13px !important;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 ">
                <p class="encabezado izquierda">U.A.G.R.M.</p>
                <p class="encabezado izquierda">D.E.A. Autoevaluación</p>
                <p class="encabezado izquierda">{{ $encuesta['localidad'] }}</p>
            </div>
            <div class="col-6">
                <p class="encabezado derecha">{{ $encuesta['fechaActual'] }}</p>
                <p class="encabezado derecha">{{ $encuesta['horaActual'] }}</p>
                <div class="encabezado derecha">
                    <form action="{{ route('exportar.excel') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="encuesta" value="{{ json_encode($encuesta) }}">
                        <button class="btn btn-success btn-sm" id="btn-excel" type="submit">Excel</button>
                    </form>
                    {{-- <button class="btn btn-success btn-sm" id="btn-excel">Excel</button> --}}
                </div>

                {{-- <button class="btn btn-primary">PDF</button> --}}
            </div>
        </div>
        <div class="row">
            <h1>RESUMEN {{ strtoupper($encuesta['fuente']) }}</h1>
            <h2>Carrera de {{ $encuesta['carrera'] }}</h2>
            <h3>Cantidad de Encuestados: {{ $encuesta['poblacion'] }}</h3>

        </div>

        @foreach ($dimensiones as $dimension)
            <div class="row">
                <p class="titulo-seccion mayuscula">{{ $dimension->nombre }}</p>
            </div>
            @foreach ($encuesta['resultado'] as $pregunta)
                @if ($pregunta['dimension'] == $dimension->id)
                    <div class="card mb-2">
                        <div class="card-header">
                            <p class="titulo-seccion2 mayuscula">{{ $pregunta['pregunta'] }}</p>
                        </div>
                        <div class="card-body">
                            <table style="width: 100%">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 86%"></th>
                                        <th scope="col" style="width: 7%"></th>
                                        <th scope="col" style="width: 7%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pregunta['respuesta'] as $respuesta)
                                        <tr style="width: 100%">
                                            <td class="mayuscula" style="text-align: right">
                                                <strong>{{ $respuesta['valor'] }}</strong>
                                            </td>
                                            <td style="text-align: center">{{ $respuesta['cantidad'] }}</td>

                                            <td style="text-align: center">
                                                @php
                                                    $indiceU = array_search('U', $pregunta['tipo']);
                                                    if ($indiceU !== false) {
                                                        $porcentaje =
                                                            $respuesta['cantidad'] > 0
                                                                ? round(
                                                                    ($respuesta['cantidad'] * 100) /
                                                                        $pregunta['muestra'],
                                                                    2,
                                                                )
                                                                : 0;
                                                        echo $porcentaje . ' %';
                                                    }
                                                @endphp
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
</body>
{{-- js --}}
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    // $('#btn-excel').on('click', function() {
    //     var encuesta = @json($encuesta);
    //     // Simular el envío del formulario para descargar el archivo

    //     $.ajax({
    //         url: "{{ route('exportar.excel') }}",
    //         method: "POST",
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         data: {
    //             encuesta: JSON.stringify(encuesta) // Convertir encuesta a JSON
    //         },
    //         success: function(response) {
    //             console.log(response);
    //             // var link = document.createElement('a');
    //             // link.href = '{{ Storage::url('') }}' + response.archivo;
    //             // console.log(link.href);
    //             // link.download = response.archivo;
    //             // link.click();
    //         },
    //         error: function(xhr, status, error) {
    //             console.error(error);
    //         }
    //     });
    // });
</script>

</html>
