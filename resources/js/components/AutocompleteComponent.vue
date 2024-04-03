<template>
    <div class="mt-4">
        <div class="row">
            <input type="text" v-model="keyword"
                placeholder="Ingrese el nombre de la CARRERA, FACULTAD o LOCALIDAD a buscar" class="mi-input">
            <ul v-if="Carreras.length > 0">
                <li v-for="carrera in Carreras" :key="carrera.id"
                    v-text="carrera.carrera + ' - ' + carrera.facultad + ' - ' + carrera.localidad"
                    v-on:click="getElemento(carrera.id, carrera.carrera, carrera.facultad, carrera.localidad)"></li>
            </ul>
        </div>
    </div>
    <div class="mt-4">
        <form id="form-datos" class="form-horizontal form-label-left" method="POST" @submit.prevent="sendDatos"
            enctype="multipart/form-data">
            <div class="row">
                <strong>DATOS DE CARRERA</strong>
            </div>
            <div class="row">
                <label class="p-2">Carrera: </label>
                <input type="text" v-model="carreraSeleccionada" name="carrera" class="mi-input" readonly>
            </div>

            <div class="row">
                <label class="p-2">Facultad: </label>
                <input type="text" v-model="facultadSeleccionada" name="facultad" class="mi-input" readonly>
            </div>
            <div class="row">
                <label class="p-2">Localidad: </label>
                <input type="text" v-model="localidadSeleccionada" name="localidad" class="mi-input" readonly>
            </div>
            <div class="item form-group">
                <div class="modal-footer mt-2">
                    <input type="hidden" v-model="idSeleccionado" name="id" class="mi-input">
                    <button class="btn btn-success w-100" type="reset">Limpiar</button>
                    <!-- <button class="btn btn-primary" type="submit">Procesar</button> -->
                </div>
            </div>
            <!-- //INSERTAR ARCHIVO -->
            <div class="row">
                <div class="row">
                    <div class="col-md-6 m-1">
                        <input class="form-group" type="file" @change="handleFileChange" id="documento_analisis"
                            name="documento">
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
</template>
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
</style>
<script>
export default {
    data() {
        return {
            keyword: null,
            Carreras: [],
            idSeleccionado: "",
            carreraSeleccionada: "",
            facultadSeleccionada: "",
            localidadSeleccionada: "",
            documentoSeleccionado: "",
            data: []
        };
    },
    watch: {
        keyword(after, before) {
            this.getResults();
        }
    },
    methods: {
        getResults() {
            axios.get('/livesearch', { params: { keyword: this.keyword } })
                .then(res => this.Carreras = res.data)
                .catch(error => { });
        },

        getElemento(id, carrera, facultad, localidad) {
            console.log("El ID es " + id);
            this.idSeleccionado = id;
            this.carreraSeleccionada = carrera;
            this.facultadSeleccionada = facultad;
            this.localidadSeleccionada = localidad;
            this.Carreras = 0;
            this.data = { id: this.idSeleccionado, carrera: this.carreraSeleccionada, facultad: this.facultadSeleccionada, localidad: this.localidadSeleccionada };
        },
        handleFileChange(event) {
            //CUANDO CAMBIA DE DOCUMENTO
            // Accede al archivo seleccionado
            const selectedFile = event.target.files[0];
            this.documentoSeleccionado = selectedFile;
            // Haz lo que necesites con el archivo (por ejemplo, mostrar su nombre)
            console.log('Archivo seleccionado:', selectedFile.name);
        },
        sendDatos() {
            if (this.carreraSeleccionada && this.facultadSeleccionada && this.localidadSeleccionada) {
                // Verifica si se ha seleccionado un archivo
                if (this.documentoSeleccionado) {
                    // Crear un objeto FormData y agregar los datos y el archivo
                    const formData = new FormData();
                    formData.append('carrera_facultad_id', this.idSeleccionado);
                    formData.append('documento', this.documentoSeleccionado);

                    // Realiza la solicitud POST con el formData
                    axios.post('/importar/procesar/archivo', formData)
                        .then(response => {
                            const id = response.data.id;
                            console.log(response.data);
                            //window.location.href = "http://127.0.0.1:8000/importar/" + id;
                        })
                        .catch(error => {
                            console.error('Error al enviar datos y archivo:', error);
                        });
                } else {
                    console.log("ERROR: Debe seleccionar un archivo.");
                }
            } else {
                console.log("ERROR: DEBE COMPLETAR SUS INPUT");
            }
        }

    }
}
</script>
