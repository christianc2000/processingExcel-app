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
    <title>Vista Previa </title>
</head>

<body>
    <div class="container mt-4">
        @foreach ($encuesta['resultado'] as $resultado)
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">{{ $resultado['pregunta'] }}</h5>
                </div>
                <div class="card-body">
                    <table style="width: 100%">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 90%"></th>
                                <th scope="col" style="width: 5%"></th>
                                <th scope="col" style="width: 5%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resultado['respuesta'] as $respuesta)
                                @php
                                    $porcentaje = round(($respuesta['cantidad'] * 100) / $resultado['respondidos'], 1);
                                @endphp
                                <tr style="width: 100%">
                                    <td style="text-align: right"><strong>{{ $respuesta['id'] }}</strong>
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
