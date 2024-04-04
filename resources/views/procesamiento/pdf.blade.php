<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <title>PDF {{ $archivo->nombre }}</title>

    <style>
        body {
            background-color: white;
            font-family: 'Arial';
        }

        .main {
            font-family: Arial, Helvetica, sans-serif;
        }

        p {
            font-family: 'Arial';
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
            font-family: Arial, Helvetica, sans-serif;
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
            font-family: Arial, Helvetica, sans-serif;
        }

        .titulo-seccion2 {
            color: #000000;
            text-align: left;
            font-weight: semibold !important;
            font-size: 13px !important;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body class="main">
    <div style="width: 100%">
        <div style="width: 100%">
            <div style="width: 50%; float: left;">
                <p class="encabezado izquierda">U.A.G.R.M.</p>
                <p class="encabezado izquierda">D.E.A. Autoevaluación</p>
                <p class="encabezado izquierda">Santa Cruz</p>
            </div>
            <div style="width: 50%; float: right; ">
                <p class="encabezado derecha">{{ $fechaActual }}</p>
                <p class="encabezado derecha">{{ $horaActual }}</p>
            </div>
        </div>
        <div style="width: 100%; clear: both;">
            <h1>RESUMEN {{ strtoupper($archivo->fuente->nombre) }}</h1>
            <h2>Carrera de {{ $archivo->carreraFacultad->carrera->nombre }}</h2>
            <h3>Cantidad de Encuestados: {{ $archivo->cantidad_encuestados }}</h3>

        </div>

        @foreach ($dimensiones as $dimension)
            <div class="row">
                <p class="titulo-seccion mayuscula">{{ $dimension->nombre }}</p>
            </div>
            {{-- @foreach ($archivo->fuente->preguntas as $pregunta) --}}
            {{-- {{$archivo->fuente->preguntas->where('dimension_id',$dimension->id)}} --}}
            @foreach ($archivo->fuente->preguntas->where('dimension_id', $dimension->id) as $pregunta)
                <div class="card mb-2">
                    <div class="card-header">
                        <p class="titulo-seccion2 mayuscula">{{ $pregunta->enunciado }}</p>
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
                                @foreach ($pregunta->archivoPreguntas->where('archivo_id', $archivo->id)->sortBy('id') as $respuesta)
                                    <tr style="width: 100%">
                                        <td class="mayuscula" style="text-align: right; width: 80%;">
                                            <strong>{{ $respuesta->respuesta }}</strong>
                                        </td>
                                        <td style="text-align: center; width: 10%">{{ $respuesta->cantidad }}</td>
                                        <td style="text-align: center; width: 10%">
                                            @if (str_contains($pregunta->tipo, 'U'))
                                                {{ $respuesta->porcentaje . ' %' }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</body>

</html>
