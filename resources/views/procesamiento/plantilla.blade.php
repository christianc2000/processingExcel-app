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
    <title>Vista Previa {{ $nombreArchivo }}</title>

    <style>
        body {
          background-color: white;
          font-family: 'Arial' !important;
        }

        h1 {
          color: #000000;
          text-align: center;
          font-weight: bold !important;
          font-size: 14px !important;
        }

        h2{
            color: #000000;
            text-align: center;
            font-weight: bold !important;
            font-size: 12px !important;
        }

        h3{
            color: #000000;
            text-align: center;
            font-size: 10px !important;
        }

        .encabezado{
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
        .titulo-seccion{
            color: #000000;
            text-align: left;
            font-weight: bold !important;
            font-size: 14px !important;
        }

    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 ">
                <p class="encabezado izquierda">U.A.G.R.M.</p>
                <p class="encabezado izquierda">D.E.A. Autoevaluación</p>
                <p class="encabezado izquierda">Santa Cruz</p>
            </div>
            <div class="col-6">
                <p class="encabezado derecha">24/04/2023</p>
                <p class="encabezado derecha">9:20:20</p>

            </div>
        </div>
        <div class="row">
            <h1>RESUMEN DOCENTES</h1>
            <h2>ENFERMERÍA</h2>
            <h3>Cantidad de Encuestados: 23</h3>

        </div>
        @foreach ($encuesta['resultado'] as $resultado)
            <div class="row">
                <p class="titulo-seccion mayuscula">Nombre Sección</p>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">{{ $resultado['pregunta'] }}</h5>
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
                            @foreach ($resultado['respuesta'] as $respuesta)
                                @php
                                    $porcentaje = round(($respuesta['cantidad'] * 100) / $resultado['respondidos'], 1);
                                @endphp
                                <tr style="width: 100%">
                                    <td class="mayuscula" style="text-align: right"><strong>{{ $respuesta['id'] }}</strong>
                                    </td>
                                    <td style="text-align: center">{{ $respuesta['cantidad'] }}</td>
                                    <td style="text-align: center">
                                        @if ($resultado['tipo'] == 'U')
                                            {{ $porcentaje." %" }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
