<template>
    <div class="mt-4">
        <div class="row">
            <input type="text" v-model="keyword" placeholder="Ingrese el nombre de la CARRERA, FACULTAD o LOCALIDAD a buscar">
            <ul v-if="Carreras.length > 0">
                <li v-for="carrera in Carreras" :key="carrera.id" v-text="carrera.carrera + ' - ' +   carrera.facultad + ' - ' +  carrera.localidad" v-on:click="getElemento(carrera.id, carrera.carrera, carrera.facultad, carrera.localidad)"></li>
            </ul>
        </div>
    </div>
    <div class="mt-4">
        <form id="form-datos" class="form-horizontal form-label-left" method="POST" @submit.prevent="sendDatos" >

            <div class="row">
                <p><b>DATOS DE CARRERA</b></p>
            </div>
            <div class="row">
                <label class="p-2">Carrera: </label>
                <input type="text" v-model="carreraSeleccionada" name="carrera" value="{carreraSeleccionada}">
            </div>

            <div class="row">
                <label class="p-2">Facultad: </label>
                <input type="text" v-model="facultadSeleccionada" name="facultad">
            </div>
            <div class="row">
                <label class="p-2">Localidad: </label>
                <input type="text" v-model="localidadSeleccionada" name="localidad">
            </div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 ">
                    <div class="modal-footer">
                        <input type="hidden" v-model="idSeleccionado" name="id" value="{idSeleccionado}">
                        <button class="btn btn-success" type="reset">Limpiar</button>
                        <button class="btn btn-primary" type="submit">Procesar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
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
                .catch(error => {});
        },

        getElemento(id, carrera, facultad, localidad) {
            console.log("El ID es " + id);
            this.idSeleccionado = id;
            this.carreraSeleccionada = carrera;
            this.facultadSeleccionada = facultad;
            this.localidadSeleccionada = localidad;
            this.Carreras = 0;
            this.data = {id: this.idSeleccionado, carrera: this.carreraSeleccionada, facultad: this.facultadSeleccionada, localidad: this.localidadSeleccionada};
        },

        sendDatos() {
            axios.post('/datos', this.data)
                .then(response=>{
                    const id = response.data.id;
                    console.log(response.data);
                    window.location.href = "http://127.0.0.1:8000/resultados/"+ id;

                })
                .catch(error => {});
        },
    }
}
</script>
