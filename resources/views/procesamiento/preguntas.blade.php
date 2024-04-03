<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <h1>{{ $fuente->nombre }}</h1>
</head>

<body>
    <h3>Total de preguntas: {{ count($fuente->preguntas) }}</h3>
    {{-- @foreach ($cuestionario->preguntas as $cp)
        <h4>{{$cp->enunciado}}</h4>
    @endforeach --}}
    {{-- <h3>Archivo: {{ $archivo->nombre }}</h3> --}}
    <div class="container mt-4">
        @foreach ($fuente->preguntas as $pregunta)
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">{{ $pregunta->enunciado }}</h5>
                    @php
                        $respuestas = explode('|', $pregunta->respuesta);
                    @endphp
                    @for ($i = 0; $i < count($respuestas); $i++)
                        <p>{{ $respuestas[$i] }}</p>
                    @endfor

                </div>
                {{-- <div class="card-body">
                    <table style="width: 100%">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 90%"></th>
                                <th scope="col" style="width: 5%"></th>
                                <th scope="col" style="width: 5%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pregunta->preguntasRespuestas as $pr)
                                @php
                                    $porcentaje = ($archivo->encuestados>0)? round(($archivo->encuestados * 100) / $pr->archivos->first()->pivot->cantidad, 1):0;
                                @endphp
                                <tr style="width: 100%">
                                    <td style="text-align: right"><strong>{{ $pr->respuesta->valor }}</strong>
                                    </td>
                                    <td style="text-align: center">{{$pr->archivos->first()->pivot->cantidad}}</td>
                                    <td style="text-align: center">
                                        @if ($pregunta->tipo == 'U')
                                            {{ $porcentaje." %" }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> --}}
            </div>
        @endforeach
    </div>
</body>

</html>
