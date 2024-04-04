<style>
    .titulo-seccion {
        color: #000000;
        font-weight: bold !important;
    }

    .titulo-seccion2 {
        color: #000000;
        font-weight: bold !important;
    }

    .centrarTexto {
        text-align: center
    }

    .derechaTexto {
        text-align: right
    }

    .izquierdaTexto {
        text-align: left
    }

    table,
    td {
        font-family: Arial, sans-serif;
    }

    .mayuscula {
        text-transform: uppercase;
    }
</style>
<table style="width: 100%">
    <thead>
        <tr>
            <th scope="col" style="width: 50px; background-color: #ccc; font-weight: bold;">Columna 1</th>
            <th scope="col" style="width: 50px;background-color: #ccc; font-weight: bold;">Columna 2</th>
            <th scope="col" style="width: 800px;background-color: #ccc; font-weight: bold;">Columna 3</th>
            <th scope="col" style="width: 50px;background-color: #ccc; font-weight: bold;">Columna 4</th>
            <th scope="col" style="width: 50px;background-color: #ccc; font-weight: bold;">Columna 5</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="3">UAGRM</td>
            <td colspan="2" class="derechaTexto">{{ $fechaActual }}</td>
        </tr>
        <tr>
            <td colspan="3">D.E.A. Autoevaluación</td>
            <td colspan="2" class="derechaTexto">{{ $horaActual }}</td>
        </tr>
        <tr>
            <td colspan="5">Santa Cruz</td>
        </tr>
        <tr>
            <td colspan="5" class="titulo-seccion centrarTexto">RESUMEN {{ strtoupper($archivo->fuente->nombre) }}
            </td>
        </tr>
        <tr>
            <td colspan="5" class="titulo-seccion2 centrarTexto">
                {{ strtoupper($archivo->carreraFacultad->carrera->nombre) }}</td>
        </tr>
        <tr>
            <td colspan="5" class="centrarTexto">
                <p>{{ 'Cantidad de encuestados: ' . $archivo->cantidad_encuestados }}</p>
            </td>
        </tr>
        <tr>
            <td colspan="5"></td>
        </tr>
        @foreach ($dimensiones as $dimension)
            <tr>
                <td colspan="5">
                    <p class="mayuscula titulo-seccion2">{{ $dimension->nombre }}</p>
                </td>
            </tr>


            @foreach ($archivo->fuente->preguntas->where('dimension_id', $dimension->id) as $pregunta)
                <tr>
                    <td colspan="1"></td>
                    <td colspan="4">
                        <p>{{ $pregunta->enunciado }}</p>
                    </td>
                </tr>


                @foreach ($pregunta->archivoPreguntas->where('archivo_id', $archivo->id)->sortBy('id') as $respuesta)
                    <tr>
                        <td  colspan="3" style="text-align: right">
                            <p>{{ $respuesta->respuesta }}</p>
                        </td>
                        <td colspan="1" style="text-align: center">{{ $respuesta->cantidad }}</td>
                        <td colspan="1" style="text-align: center">
                            @if (str_contains($pregunta->tipo, 'U'))
                                {{ $respuesta->porcentaje . ' %' }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endforeach
        @endforeach
    </tbody>
    {{-- <div class="row">
            <div class="col-6 ">
                <p class="encabezado izquierda">U.A.G.R.M.</p>
                <p class="encabezado izquierda">D.E.A. Autoevaluación</p>
                <p class="encabezado izquierda">Santa Cruz</p>
            </div>
            <div class="col-6">
                <p class="encabezado derecha">{{ $fechaActual }}</p>
                <p class="encabezado derecha">{{ $horaActual }}</p>
                <div class="encabezado derecha">
                    <button class="btn btn-success btn-sm">Excel</button>
                    <button class="btn btn-primary btn-sm">PDF</button>
                </div>
            </div>
        </div>
        <div class="row">
            <h1>RESUMEN {{ strtoupper($archivo->fuente->nombre) }}</h1>
            <h2>Carrera de {{ $archivo->carreraFacultad->carrera->nombre }}</h2>
            <h3>Cantidad de Encuestados: {{ $archivo->cantidad_encuestados }}</h3>

        </div>

        @foreach ($dimensiones as $dimension)
            <div class="row">
                <p class="titulo-seccion mayuscula">{{ $dimension->nombre }}</p>
            </div>
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
                                        <td class="mayuscula" style="text-align: right">
                                            <strong>{{ $respuesta->respuesta }}</strong>
                                        </td>
                                        <td style="text-align: center">{{ $respuesta->cantidad }}</td>
                                        <td style="text-align: center">
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
        @endforeach --}}
</table>
