<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
</head>

<body class="p-2">
    <div class="container">
        <div id="spinner" class="d-none position-fixed top-50 start-50 translate-middle">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Búsqueda de Carreras</div>

                    <div class="card-body">
                        {{-- <autocomplete-component></autocomplete-component> --}}
                        {{-- buscador --}}
                        <div class="mb-3">
                            <label for="carrera" class="form-label">Buscar</label>
                            <input type="text" id="search" class="form-control"
                                placeholder="Introduzca la carrera que va buscar">
                            <div class="list-group" style="display: none" id="divSearch">
                                {{-- <a href="#" class="list-group-item list-group-item-action active"
                                    aria-current="true">
                                    The current link item
                                </a> --}}
                                {{-- <a href="#" class="list-group-item list-group-item-action" id="principal">Carrera --}}
                                {{-- no encontrada</a> --}}
                                {{-- <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                                <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                                <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1"
                                    aria-disabled="true">A disabled link item</a> --}}
                            </div>
                        </div>
                        {{-- Formulario con los datos que se mostraran en cada archivo --}}
                        <form action="{{ route('importar.archivo.procesar') }}" id="formProcesar" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-1">
                                <p class="titulo">Datos de búsqueda</p>
                            </div>

                            <div class="mb-2">
                                <label for="carrera" class="form-label">Carrera</label>
                                <input type="text" class="form-control" id="carrera" name="carrera"
                                    placeholder="nombre de la carrera">
                                <div id="error-carrera" class="text-danger"></div> <!-- Mensaje de error -->
                            </div>

                            <div class="mb-2">
                                <label for="carrear" class="form-label">Facultad</label>
                                <input type="text" class="form-control" id="facultad" name="facultad"
                                    placeholder="nombre de la facultad">
                                <div id="error-facultad" class="text-danger"></div> <!-- Mensaje de error -->
                            </div>
                            <div class="mb-2">
                                <label for="localidad" class="form-label">Localidad</label>
                                <input type="text" class="form-control" id="localidad" name="localidad"
                                    placeholder="nombre de la localidad">
                                <div id="error-localidad" class="text-danger"></div> <!-- Mensaje de error -->
                            </div>
                            <div class="row p-2">
                                <div class="modal-footer">
                                    <button class="btn btn-success" type="button" id="btn-limpiar">Limpiar</button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6 m-1">
                                        <input id="documento_analisis" name="documento" type="file"
                                            accept=".xls, .xlsx">
                                        <div id="error-documento" class="text-danger"></div> <!-- Mensaje de error -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 m-1">
                                            <button class="btn btn-primary" type="submit">Procesar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <style>
        .mi-input {
            border: 1px solid #ccc;
            padding: 5px;

            /* Agrega más estilos según tus preferencias */
        }

        .mi-input[readonly] {
            background-color: #f5f5f5;
            /* Cambia el color de fondo para campos de solo lectura */
            /* Agrega otros estilos según tus preferencias */
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        .titulo {
            text-align: center;
            font-size: 14px;
            font-weight: bold;
        }

        .list-group-item-action:hover {
            background-color: #f5f5f5;
            /* Cambia el color de fondo cuando se pasa el mouse sobre el elemento */
            cursor: pointer;
            /* Cambia el cursor a un puntero cuando se pasa el mouse sobre el elemento */
        }

        #spinner {
            z-index: 1000;
            /* Asegura que esté por encima de otros elementos */
        }
    </style>

    {{-- JS --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @if (session('mensaje'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            console.log("ingresa a success");
            toastr.success("{{ session('mensaje') }}");
        </script>
    @endif

    @if (session('error'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            console.log("ingresa a error")
            toastr.error("{{ session('error') }}");
        </script>
    @endif
    <script>
        // JavaScript
        const buscador = document.getElementById('buscador');
        const resultados = document.getElementById('resultados');
        // input search
        $(document).on('click', function(event) {
            if (!$(event.target).closest('#search').length && !$(event.target).closest('#divSearch')
                .length) {
                $('#divSearch').hide();
                console.log("click en search")
            }
        });

        $('#search').on('focus keyup', function() {
            $('#divSearch').show();
            var query = $(this).val().replace(/\s+/g, '').toUpperCase();
            console.log("query: ", query);
            if (query.length > 0) {
                var apiUrl = new URL('/api/buscar/carrera', window.location.origin);
                $.ajax({
                    url: apiUrl.toString(),
                    type: "GET",
                    data: {
                        'keyword': query,
                    },
                    success: function(data) {
                        console.log("result: ", data);
                        var html = '';
                        console.log("cantidad de usuarios: ", data.data.length);
                        if (data.data.length > 0) {
                            $.each(data.data, function(key, value) {
                                html +=
                                    `<div class="list-group-item list-group-item-action " id="${value.id}search" data-seleccion="${value.carrera}|${value.facultad}|${value.localidad}">${value.carrera} - ${value.facultad} - ${value.localidad}</div>`
                            });
                            $('#divSearch').html(html);
                        }
                    }
                });
            } else {
                console.log("se va a eliminar")
                $('.list-group-item').remove();
            }
        });
        //llenar inputs
        $(document).on('click', '.list-group-item', function() {
            // Extraer el valor de data-seleccion del div clicado
            const seleccion = $(this).data('seleccion');

            // Parsear los valores separados por '|'
            const [carrera, facultad, localidad] = seleccion.split('|');

            // Establecer los valores en los inputs correspondientes
            $('#carrera').val(carrera);
            $('#facultad').val(facultad);
            $('#localidad').val(localidad);
        });
        //limpiar input
        $('#btn-limpiar').on('click', function() {
            $('#search').val('');
            $('#carrera').val('');
            $('#facultad').val('');
            $('#localidad').val('');
        });
        //validaciones de input
        $('#formProcesar').submit(function(e) {
            // Validación de campo carrera
            $('#spinner').removeClass('d-none');
            if ($('#carrera').val().trim() === '') {
                e.preventDefault(); // Evita que el formulario se envíe
                $('#error-carrera').text('El campo carrera es obligatorio');
            } else {
                $('#error-carrera').text(''); // Limpia el mensaje de error
            }

            // Validación de campo facultad
            if ($('#facultad').val().trim() === '') {
                e.preventDefault();
                $('#error-facultad').text('El campo facultad es obligatorio');
            } else {
                $('#error-facultad').text('');
            }

            // Validación de campo localidad
            if ($('#localidad').val().trim() === '') {
                e.preventDefault();
                $('#error-localidad').text('El campo localidad es obligatorio');
            } else {
                $('#error-localidad').text('');
            }

            // Validación de campo documento_analisis
            const fileInput = $('#documento_analisis')[0];
            if (fileInput.files.length === 0 || !/\.(xls|xlsx)$/i.test(fileInput.files[0].name)) {
                e.preventDefault();
                $('#error-documento').text('Por favor, seleccione un archivo .xls o .xlsx');
            } else {
                $('#error-documento').text('');
            }
             // Muestra el spinner al enviar el formulario
        });
    </script>
</body>

</html>
{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Búsqueda de Carreras</div>

                <div class="card-body">
                  <autocomplete-component></autocomplete-component>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection --}}
