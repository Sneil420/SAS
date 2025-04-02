<template>
    <div>
        <form v-on:submit.prevent="storeListaCotejo()">
            <table class="tabla-lista-total">
                <thead class="tabla-cabecera">
                    <tr class="text-center">
                        <td>ITEM</td>
                        <td>SI</td>
                        <td>NO</td>
                        <td>OBSERVACIÓN</td>
                    </tr>
                </thead>
                
                    <tbody>
                            <tr class="tabla-lista" v-for="item in revisionListaCotejo" :key="item.id" :style="{ background: item.lista_cotejo.color_fondo }">
                                <td v-if="item.respuesta=='no'" style="color: #FB2121">{{item.lista_cotejo.item}}</td>
                                <td v-else>{{item.lista_cotejo.item}}</td>
                                <td class="text-center"><input v-model="item.respuesta" value="si" v-if="item.lista_cotejo.tipo == 'item'"  type="radio" class="form-control" required></td>
                                <td class="text-center"><input v-model="item.respuesta" value="no" v-if="item.lista_cotejo.tipo == 'item'"  type="radio" class="form-control"></td>
                                <td class="text-center"><input v-model="item.observacion" v-if="item.lista_cotejo.tipo == 'item'" type="text" class="form-control"></td>
                            </tr>
                    </tbody>
            </table>
        <br>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <button type="submit" class="btn btn-success btn-block">ENVIAR</button>
            </div>
            <div class="col-sm-4"></div>
        </div>
        </form>
    </div>
</template>

<script>
    import swal from 'sweetalert2';
    import 'sweetalert2/dist/sweetalert2.min.css';

     export default {
        props: ['asignacion'],
        data(){
            return{
              listaCotejo: {},
              revisionListaCotejo: [],
            }
        },
        mounted() {
            this.getListaCotejo();
        },
        methods: {
            getListaCotejo(){
                axios.get(route('get.lista.cotejo', this.asignacion.id)).then( (response) =>{
                    this.listaCotejo = response.data;   
                    this.getRevisionCotejo(this.listaCotejo.id);
                });
                  
            },
             getRevisionCotejo(idListaCotejo){
                axios.get(route('get.revision.cotejo', idListaCotejo)).then( (response) =>{
                    this.revisionListaCotejo = response.data;   
                });
            },
            storeListaCotejo(){
                swal.fire({
                    title: 'Llenado de Lista de Cotejo para la evaluación del sílabo fue ingresado correctamente',
                    text: "¿Estas seguro de enviar la información?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Confirmar'
                }).then((result) => {
                    if (result.value) {
                        axios.post(route('store.lista.cotejo'), this.revisionListaCotejo).then((response) => {
                                if(response.data){
                                    window.location.href = '/curso-silabo-revision';
                                }
                            }).catch(error => {
                            console.log(error);
                        });
                    }
                }).catch(error => {
                    toastr.error("Ha ocurrido un error y el servicio no está disponible temporalmente");
                });
            }
        },

    }
</script>

<style>
.tabla-lista-total{
    border: 1px solid #CBDDE5;
    
}
.tabla-lista{
    border: 1px solid #CBDDE5;
}

.tabla-cabecera{
    border: 1px solid #CBDDE5;
    background: #E5B713;
    color: white;
    font-weight: 700;
}

.tabla-lista td{
    padding-left: 10px ;
}
</style>