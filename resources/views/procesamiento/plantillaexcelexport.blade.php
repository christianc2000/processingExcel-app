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
        font-family: Arial;
    }

    .mayuscula {
        text-transform: uppercase;
    }
</style>
<table style="width: 120px">
    <thead>
        <tr>
            <th scope="col" style="width: 60px; "></th>
            <th scope="col" style="width: 60px;"></th>
            <th scope="col" style="width: 380px;"></th>
            <th scope="col" style="width: 60px;"></th>
            <th scope="col" style="width: 60px;"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="3" style="text-align: left;font-size: 11px;font-family: Arial;font-weight: 100">UAGRM</td>
            <td colspan="2" style="text-align: right;font-size: 10px;font-family: Arial;font-weight: 100">{{ $fechaActual }}</td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: left;font-size: 11px;font-family: Arial;font-weight: 100">D.E.A.
                Autoevaluación</td>
            <td colspan="2" style="text-align: right;font-size: 11px;font-family: Arial;font-weight: 100">{{ $horaActual }}</td>
        </tr>
        <tr>
            <td colspan="5" style="text-align: left;font-size: 11px;font-family: Arial;font-weight: 100">Santa Cruz
            </td>
        </tr>
        <tr>
            <td colspan="5"
                style="font-size: 13px;font-family: Arial; text-align:center;font-weight: bold !important;">RESUMEN
                {{ strtoupper($archivo->fuente->nombre) }}
            </td>
        </tr>
        <tr>
            <td colspan="5"
                style="font-size: 13px;font-family: Arial; text-align:center;font-weight: bold !important;">
                Carrera de {{ $archivo->carreraFacultad->carrera->nombre }}</td>
        </tr>
        <tr>
            <td colspan="5"
                style="font-size: 12px;font-family: Arial; text-align:center;font-weight: 100;">
                {{ 'Cantidad de encuestados: ' . $archivo->cantidad_encuestados }}
            </td>
        </tr>
        <tr>
            <td colspan="5"></td>
        </tr>
        @foreach ($dimensiones as $dimension)
            <tr>
                <td colspan="5"
                    style="font-size: 12px;font-family: Arial; text-align:left;font-weight: bold !important;">
                    {{ $dimension->nombre }}
                </td>
            </tr>


            @foreach ($archivo->fuente->preguntas->where('dimension_id', $dimension->id) as $pregunta)
                <tr>
                    <td colspan="1"></td>
                    <td colspan="4" style="text-align: left;font-size: 10px;font-family: Arial;font-weight: 100">
                        {{ $pregunta->enunciado }}
                    </td>
                </tr>


                @foreach ($pregunta->archivoPreguntas->where('archivo_id', $archivo->id)->sortBy('id') as $respuesta)
                    <tr>
                        <td colspan="3"
                            style="text-align: right; font-size: 10px;font-family: Arial;font-weight: 100">
                            {{ $respuesta->respuesta }}
                        </td>
                        <td colspan="1"
                            style="text-align: center; font-size: 10px;font-family: Arial;font-weight: 100">
                            {{ $respuesta->cantidad }}</td>
                        <td colspan="1"
                            style="text-align: center; font-size: 10px;font-family: Arial;font-weight: 100">
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
