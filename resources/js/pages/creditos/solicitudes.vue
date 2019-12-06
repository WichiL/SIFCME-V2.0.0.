<template>
    <v-container elevation-15>                  
        <v-data-table
            :headers="headers"
            :items="solicitudes"
            class="elevation-1"
            hide-default-footer
            :page.sync="page"
            :search="search"
            :items-per-page="itemsPerPage"  
            @page-count="pageCount = $event"
            :loading="flag"
            loading-text="Procesando... Espere por favor"
         >
            <template v-slot:top>
                <v-toolbar  color="#9F2A2A" height="120px" elevation-16>
                   <v-list-item>
                        <v-icon 
                            x-large
                            left
                            >
                            mdi-cash-usd-outline
                        </v-icon>         
                        <v-list-item-content class="mt-5 mb-3">
                            <v-list-item-title><h2>Solicitudes de Crédito</h2></v-list-item-title>
                            <v-list-item-subtitle>Solicitudes registradas</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>                   
                    <v-spacer></v-spacer>
                    <router-link :to="{ name: 'nueva-solicitud' }">
                        <v-btn color="success" rounded dark class="mb-2">
                            Nueva Solicitud
                            <v-icon medium right >
                                mdi-plus
                            </v-icon>
                        </v-btn>
                    </router-link>
                    
                </v-toolbar>
                <v-col cols="6" offset-md="6" align="end">
                    <v-text-field
                    v-model="search"
                    append-icon="mdi-magnify"
                    label="Buscar"
                    single-line
                    hide-details
                ></v-text-field>
                </v-col>
                
            </template>
            <template v-slot:item.action="{ item }">
                <v-tooltip bottom>
                    <template v-slot:activator="{ on }">
                        <router-link :to="{ name: 'ver-expediente' }">
                    <v-btn @click="editSolicitud(item.id)" icon v-on="on">
                        <v-icon medium color="primary">mdi-eye</v-icon>
                    </v-btn>
                </router-link>
                    
                    </template>
                    <span>Ver Expediente</span>
                </v-tooltip>

                <v-tooltip bottom>
                    <template v-slot:activator="{ on }">
                    <v-btn @click="deleteSolicitud(item.id)" color="red" icon v-on="on">
                        <v-icon>mdi-delete</v-icon>
                    </v-btn>
                    </template>
                    <span>Eliminar</span>
                </v-tooltip>
            </template>
            <template v-slot:no-data>
                <p class="title">No hay registros</p>
            </template>
        </v-data-table>
        
        <v-row align="center" justify="space-between">
            <v-col cols="4"></v-col>
            <v-col cols="4">
                <v-pagination color="#9F2A2A" v-model="page" :length="pageCount"></v-pagination>              
            </v-col>
            <v-col cols="4">
                <v-col cols="6">
                    <v-select
                        color="purple"
                        :items="['5 Registros', '10 Registros', '15 Registros']"
                        persistent-hint
                        hint="Mostrar solo"
                        @input="itemsPerPage = parseInt($event, 10)"
                        >
                    </v-select>    
                </v-col>
            </v-col>
        </v-row>
    </v-container>
</template>  

<script>
import Form from 'vform'

export default {
    middleware: 'auth',
    //MODELOS
    data: () => ({
        solicitudes: {},
        page: 1,
        flag: true,
        search: '',
        pageCount: 0,
        dialog: false,
        itemsPerPage: 10,
    
        solicitudes: new Form({
            id: '',
            nomSolicitante: '',
            rfc: '',    
            edad: '',
            curp: ''
        }),

        //FILLERS DE ENCABEZADO 
        headers: [
            { text: 'NOMBRE', align: 'left', sortable: false, value: 'nomSolicitante' },
            { text: 'EDAD', value: 'edad' },
            { text: 'RFCL', value: 'rfc' },
            { text: 'CURP', value: 'curp' },
            { text: 'ACCIONES', value: 'action', sortable: false },
        ],
        
    }),
    
    created () {
        this.listar()
    },
    methods: {
        
        listar () {
            try {
                axios.get("api/generales").then(({ data }) => (this.solicitudes = data.data)),
                this.solicitudes = [ ],
                this.flag = false 
            } catch (error) {
                swal.fire("¡Datos Inaccesibles!", "No se pudo obtener la información solicitada de la BD. Vuelva a intentar o llame al Administrador", "error");
                this.flag = false
            }
        },

        editSolicitud (id) {
            this.$router.push({ name: "solicitud/view/", params:{ id: id } })

            // this.$route.params.id
            // this.form = Object.assign({}, item)
            // this.dialog = true
        },

        async deleteSolicitud (id) {
            swal.fire({
                title: '¿Eliminar usuario?',
                text: "Esta acción no se puede revertir",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Borrar'
            }).then((result) => {
                if(result.value) {    
                    this.form.delete('../api/generales/'+id).then(()=>{
                    swal.fire(
                        '¡Eliminado Correctamente!',
                        'El usuario seleccionado ha sido eliminado',
                        'success'
                    )
                    this.listar()
                    }).catch(()=>{
                    swal.fire("¡Error al Eliminar!", "Fallo la eliminación del registro", "warning");
                    })
                }
            })
        } 
    }
}
</script>