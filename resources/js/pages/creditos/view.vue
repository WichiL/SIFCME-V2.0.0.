<template>
    <v-container elevation-15>                  
                <v-card  color="#9F2A2A" height="120px" elevation-16>
                   <v-list-item>
                        <v-icon 
                            x-large
                            left
                            >
                            mdi-cash-usd-outline
                        </v-icon>         
                        <v-list-item-content class="mt-3 mb-3">
                            <v-list-item-title><h2>Expediente de {{ this.gral.nomSolicitante }} </h2></v-list-item-title>
                            <v-list-item-subtitle>Solicitud de Credito</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>                                     
                </v-card>

                <v-card>
                    <v-container>
                        <v-row align="center"
                            class="mt-3 mb-15"
                            justify="space-between"
                            >

                            <!-- //DATOS GENERALES  -->
                            <v-col cols="6" align="center" elevation-15>
                                <v-card  color="success" elevation-16>
                                    <v-list-item>
                                        <v-icon 
                                            x-large
                                            left
                                            >
                                            mdi-file-document
                                        </v-icon>         
                                        <v-list-item-content class=" ma-3 mt-3 mb-3">
                                            <v-list-item-title><h2>Solicitud de Crédito</h2></v-list-item-title>
                                            <v-list-item-subtitle>Datos generales</v-list-item-subtitle>
                                        </v-list-item-content>
                                    </v-list-item>  
                                    <v-card class="mb-5">
                                        <template>
                                            <v-expansion-panels>
                                                <v-expansion-panel
                                                >
                                                <v-expansion-panel-header>
                                                    Ver Más
                                                    <template v-slot:actions>
                                                        <v-icon color="success">mdi-plus</v-icon>
                                                    </template>                    
                                                </v-expansion-panel-header>
                                                <v-expansion-panel-content>
                                                    <v-simple-table fixed-header>
                                                        <template v-slot:default>
                                                        <thead>
                                                            <tr>
                                                            <th class="text-left">Nombre</th>
                                                            <th class="text-left">CURP</th>
                                                            <th class="text-left">RFC</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <td>{{ gral.nomSolicitante }}</td>
                                                            <td>{{ gral.curp }}</td>
                                                            <td>{{ gral.rfc }}</td>
                                                            </tr>
                                                        </tbody>
                                                        </template>
                                                    </v-simple-table>
                                                    <router-link :to="{ path: '/editar/Solicitud/' + this.$route.params.id  }">
                                                        <v-btn class="ma-5" color="warning" rounded large elevation-24>
                                                            Editar
                                                            <v-icon medium right >
                                                                mdi-pencil
                                                            </v-icon>
                                                        </v-btn>
                                                    </router-link> 
                                                    <router-link :to="{ path: '/view/generales/' + this.$route.params.id }">
                                                        <v-btn class="ma-5" color="primary" rounded large elevation-24>
                                                            Ver Info
                                                            <v-icon medium right >
                                                                mdi-eye
                                                            </v-icon>
                                                        </v-btn>
                                                    </router-link>    
                                                </v-expansion-panel-content>
                                                </v-expansion-panel>
                                            </v-expansion-panels>
                                        </template>
                                    </v-card>                                   
                                </v-card>
                            </v-col>
                          

                            <!-- ESTRUCTURA DE INVERSION     -->
                            <v-col v-if="!EI" cols="6" align="center" elevation-15>
                                <v-card  color="success" elevation-16>
                                    <v-list-item>
                                        <v-icon 
                                            x-large
                                            left
                                            >
                                            mdi-file-document
                                        </v-icon>         
                                        <v-list-item-content class=" ma-3 mt-3 mb-3">
                                            <v-list-item-title><h2>Estructura de Inversión</h2></v-list-item-title>
                                            <v-list-item-subtitle>Datos relevantes</v-list-item-subtitle>
                                        </v-list-item-content>
                                    </v-list-item>  
                                    <v-card class="mb-5">
                                        <template>
                                            <v-expansion-panels>
                                                <v-expansion-panel
                                                >
                                                <v-expansion-panel-header>
                                                    Ver Más
                                                    <template v-slot:actions>
                                                        <v-icon color="success">mdi-plus</v-icon>
                                                    </template>                    
                                                </v-expansion-panel-header>
                                                <v-expansion-panel-content>
                                                    <v-simple-table fixed-header>
                                                        <template v-slot:default>
                                                        <thead>
                                                            <tr>
                                                            <th class="text-left">RECURSOS PROPIOS</th>
                                                            <th class="text-left">RECURSOS FONDO PLATA</th>
                                                            <th class="text-left">INVERSION TOTAL</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <td>{{ estru.recPropios }}</td>
                                                            <td>{{ estru.recFondoPlata }}</td>
                                                            <td>{{ estru.invTotal }}</td>
                                                            </tr>
                                                        </tbody>
                                                        </template>
                                                    </v-simple-table>
                                                    <router-link :to="{ path: '/editar/estructura/' + this.$route.params.id  }">
                                                        <v-btn class="ma-5" color="warning" rounded large elevation-24>
                                                            Editar
                                                            <v-icon medium right >
                                                                mdi-pencil
                                                            </v-icon>
                                                        </v-btn>
                                                    </router-link> 
                                                    <router-link :to="{ path: '/view/generales/' + this.$route.params.id }">
                                                        <v-btn class="ma-5" color="primary" rounded large elevation-24>
                                                            Ver Info
                                                            <v-icon medium right >
                                                                mdi-eye
                                                            </v-icon>
                                                        </v-btn>
                                                    </router-link>    
                                                </v-expansion-panel-content>
                                                </v-expansion-panel>
                                            </v-expansion-panels>
                                        </template>
                                    </v-card>                                   
                                </v-card>
                            </v-col>

                            <v-col v-if="EI" cols="6" align="center" elevation-15>
                                <v-card  color="red" elevation-16>
                                    <v-list-item>
                                        <v-icon 
                                            x-large
                                            left
                                            >
                                            mdi-cancel
                                        </v-icon>         
                                        <v-list-item-content class=" ma-3 mt-3 mb-3">
                                            <v-list-item-title><h2>Estructura de Inversión</h2></v-list-item-title>
                                            <v-list-item-subtitle>Aún no se ha capturado</v-list-item-subtitle>
                                        </v-list-item-content>
                                    </v-list-item>  
                                    <v-card class="mb-5">
                                        <router-link :to="{ path: '/captura/estructura/'+ this.$route.params.id}">
                                            <v-btn class="ma-5" color="primary" rounded large elevation-24>
                                                Capturar
                                                <v-icon medium right >
                                                    mdi-target
                                                </v-icon>
                                            </v-btn>
                                        </router-link>
                                    </v-card>                                   
                                </v-card>
                            </v-col>

                        </v-row>



                        <v-row align="center"
                            class="mt-3 mb-15"
                            justify="space-between"
                            >
                            <!-- DESCRIPCION DEL NEGOCIO     -->
                            <v-col v-if="!DN" cols="6" align="center" elevation-15>
                                <v-card  color="success" elevation-16>
                                    <v-list-item>
                                        <v-icon 
                                            x-large
                                            left
                                            >
                                            mdi-file-document
                                        </v-icon>         
                                        <v-list-item-content class=" ma-3 mt-3 mb-3">
                                            <v-list-item-title><h2>Descripción del Negocio</h2></v-list-item-title>
                                            <v-list-item-subtitle>Datos relevantes</v-list-item-subtitle>
                                        </v-list-item-content>
                                    </v-list-item>  
                                    <v-card class="mb-5">
                                        <template>
                                            <v-expansion-panels>
                                                <v-expansion-panel
                                                >
                                                <v-expansion-panel-header>
                                                    Ver Más
                                                    <template v-slot:actions>
                                                        <v-icon color="success">mdi-plus</v-icon>
                                                    </template>                    
                                                </v-expansion-panel-header>
                                                <v-expansion-panel-content>
                                                    <v-simple-table fixed-header>
                                                        <template v-slot:default>
                                                        <thead>
                                                            <tr>
                                                            <th class="text-left">NOMINA MENSUAL</th>
                                                            <th class="text-left">SALARIO</th>
                                                            <th class="text-left">AUMENTO SALARIO</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <td>{{ desc.nomMensual }}</td>
                                                            <td>{{ desc.salario }}</td>
                                                            <td>{{ desc.incSalario }}</td>
                                                            </tr>
                                                        </tbody>
                                                        </template>
                                                    </v-simple-table>
                                                    <router-link :to="{ path: '/editar/Solicitud/' + this.$route.params.id  }">
                                                        <v-btn class="ma-5" color="warning" rounded large elevation-24>
                                                            Editar
                                                            <v-icon medium right >
                                                                mdi-pencil
                                                            </v-icon>
                                                        </v-btn>
                                                    </router-link> 
                                                    <router-link :to="{ path: '/view/generales/' + this.$route.params.id }">
                                                        <v-btn class="ma-5" color="primary" rounded large elevation-24>
                                                            Ver Info
                                                            <v-icon medium right >
                                                                mdi-eye
                                                            </v-icon>
                                                        </v-btn>
                                                    </router-link>    
                                                </v-expansion-panel-content>
                                                </v-expansion-panel>
                                            </v-expansion-panels>
                                        </template>
                                    </v-card>                                   
                                </v-card>
                            </v-col>

                            <v-col v-if="DN" cols="6" align="center" elevation-15>
                                <v-card  color="red" elevation-16>
                                    <v-list-item>
                                        <v-icon 
                                            x-large
                                            left
                                            >
                                            mdi-cancel
                                        </v-icon>         
                                        <v-list-item-content class=" ma-3 mt-3 mb-3">
                                            <v-list-item-title><h2>Descripción del Negocio</h2></v-list-item-title>
                                            <v-list-item-subtitle>Aún no se ha capturado</v-list-item-subtitle>
                                        </v-list-item-content>
                                    </v-list-item>  
                                    <v-card class="mb-5">
                                        <router-link :to="{ path: '/captura/descripcion/'+ this.$route.params.id}">
                                            <v-btn class="ma-5" color="primary" rounded large elevation-24>
                                                Capturar
                                                <v-icon medium right >
                                                    mdi-target
                                                </v-icon>
                                            </v-btn>
                                        </router-link>
                                    </v-card>                                   
                                </v-card>
                            </v-col>

                            <!-- DECLARACION PATRIMONIAL     -->
                            <v-col v-if="!DP" cols="6" align="center" elevation-15>
                                <v-card  color="success" elevation-16>
                                    <v-list-item>
                                        <v-icon 
                                            x-large
                                            left
                                            >
                                            mdi-file-document
                                        </v-icon>         
                                        <v-list-item-content class=" ma-3 mt-3 mb-3">
                                            <v-list-item-title><h2>Declaración Patrimonial</h2></v-list-item-title>
                                            <v-list-item-subtitle>Datos relevantes</v-list-item-subtitle>
                                        </v-list-item-content>
                                    </v-list-item>  
                                    <v-card class="mb-5">
                                        <template>
                                            <v-expansion-panels>
                                                <v-expansion-panel
                                                >
                                                <v-expansion-panel-header>
                                                    Ver Más
                                                    <template v-slot:actions>
                                                        <v-icon color="success">mdi-plus</v-icon>
                                                    </template>                    
                                                </v-expansion-panel-header>
                                                <v-expansion-panel-content>
                                                    <v-simple-table fixed-header>
                                                        <template v-slot:default>
                                                        <thead>
                                                            <tr>
                                                            <th class="text-left">EFECTIVO EN CAJA</th>
                                                            <th class="text-left">SALDO EN BANCOS</th>
                                                            <th class="text-left">CUENTAS POR COBRAR</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <td>{{ decl.efeCaja }}</td>
                                                            <td>{{ decl.recFP }}</td>
                                                            <td>{{ decl.invTotal }}</td>
                                                            </tr>
                                                        </tbody>
                                                        </template>
                                                    </v-simple-table>
                                                    <router-link :to="{ path: '/editar/Solicitud/' + this.$route.params.id  }">
                                                        <v-btn class="ma-5" color="warning" rounded large elevation-24>
                                                            Editar
                                                            <v-icon medium right >
                                                                mdi-pencil
                                                            </v-icon>
                                                        </v-btn>
                                                    </router-link> 
                                                    <router-link :to="{ path: '/view/generales/' + this.$route.params.id }">
                                                        <v-btn class="ma-5" color="primary" rounded large elevation-24>
                                                            Ver Info
                                                            <v-icon medium right >
                                                                mdi-eye
                                                            </v-icon>
                                                        </v-btn>
                                                    </router-link>    
                                                </v-expansion-panel-content>
                                                </v-expansion-panel>
                                            </v-expansion-panels>
                                        </template>
                                    </v-card>                                   
                                </v-card>
                            </v-col>

                            <v-col v-if="DP" cols="6" align="center" elevation-15>
                                <v-card  color="red" elevation-16>
                                    <v-list-item>
                                        <v-icon 
                                            x-large
                                            left
                                            >
                                            mdi-cancel
                                        </v-icon>         
                                        <v-list-item-content class=" ma-3 mt-3 mb-3">
                                            <v-list-item-title><h2>Declaración Patrimonial</h2></v-list-item-title>
                                            <v-list-item-subtitle>Aún no se ha capturado</v-list-item-subtitle>
                                        </v-list-item-content>
                                    </v-list-item>  
                                    <v-card class="mb-5">
                                       <router-link :to="{ path: '/captura/declaracion/'+ this.$route.params.id}">
                                            <v-btn class="ma-5" color="primary" rounded large elevation-24>
                                                Capturar
                                                <v-icon medium right >
                                                    mdi-target
                                                </v-icon>
                                            </v-btn>
                                        </router-link>
                                    </v-card>                                   
                                </v-card>
                            </v-col>
                        </v-row>

                        <v-row align="center"
                            class="mt-3 mb-15"
                            justify="space-between"
                            >
                            <!-- INFORMACION DE INGRESOS     -->
                            <v-col v-if="!IE" cols="6" align="center" elevation-15>
                                <v-card  color="success" elevation-16>
                                    <v-list-item>
                                        <v-icon 
                                            x-large
                                            left
                                            >
                                            mdi-file-document
                                        </v-icon>         
                                        <v-list-item-content class=" ma-3 mt-3 mb-3">
                                            <v-list-item-title><h2>Información de Ingresos-Egresos</h2></v-list-item-title>
                                            <v-list-item-subtitle>Datos relevantes</v-list-item-subtitle>
                                        </v-list-item-content>
                                    </v-list-item>  
                                    <v-card class="mb-5">
                                        <template>
                                            <v-expansion-panels>
                                                <v-expansion-panel
                                                >
                                                <v-expansion-panel-header>
                                                    Ver Más
                                                    <template v-slot:actions>
                                                        <v-icon color="success">mdi-plus</v-icon>
                                                    </template>                    
                                                </v-expansion-panel-header>
                                                <v-expansion-panel-content>
                                                    <v-simple-table fixed-header>
                                                        <template v-slot:default>
                                                        <thead>
                                                            <tr>
                                                            <th class="text-left">NOMINA MENSUAL</th>
                                                            <th class="text-left">SALARIO</th>
                                                            <th class="text-left">AUMENTO SALARIO</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <td>{{ gral.nomSolicitante }}</td>
                                                            <td>{{ gral.curp }}</td>
                                                            <td>{{ gral.rfc }}</td>
                                                            </tr>
                                                        </tbody>
                                                        </template>
                                                    </v-simple-table>
                                                    <router-link :to="{ path: '/editar/Solicitud/' + this.$route.params.id  }">
                                                        <v-btn class="ma-5" color="warning" rounded large elevation-24>
                                                            Editar
                                                            <v-icon medium right >
                                                                mdi-pencil
                                                            </v-icon>
                                                        </v-btn>
                                                    </router-link> 
                                                    <router-link :to="{ path: '/view/generales/' + this.$route.params.id }">
                                                        <v-btn class="ma-5" color="primary" rounded large elevation-24>
                                                            Ver Info
                                                            <v-icon medium right >
                                                                mdi-eye
                                                            </v-icon>
                                                        </v-btn>
                                                    </router-link>    
                                                </v-expansion-panel-content>
                                                </v-expansion-panel>
                                            </v-expansion-panels>
                                        </template>
                                    </v-card>                                   
                                </v-card>
                            </v-col>

                            <v-col v-if="IE" cols="6" align="center" elevation-15>
                                <v-card  color="red" elevation-16>
                                    <v-list-item>
                                        <v-icon 
                                            x-large
                                            left
                                            >
                                            mdi-cancel
                                        </v-icon>         
                                        <v-list-item-content class=" ma-3 mt-3 mb-3">
                                            <v-list-item-title><h2>Información de Ingresos-Egresos</h2></v-list-item-title>
                                            <v-list-item-subtitle>Aún no se ha capturado</v-list-item-subtitle>
                                        </v-list-item-content>
                                    </v-list-item>  
                                    <v-card class="mb-5">
                                        <router-link :to="{ path: '/captura/informacion/'+ this.$route.params.id}">
                                            <v-btn class="ma-5" color="primary" rounded large elevation-24>
                                                Capturar
                                                <v-icon medium right >
                                                    mdi-target
                                                </v-icon>
                                            </v-btn>
                                        </router-link>
                                    </v-card>                                   
                                </v-card>
                            </v-col>

                        </v-row>
                    </v-container>
                </v-card>
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
        DG: true,
        EI: true,
        DN: true,
        DP: true,
        IE: true,

        gral: new Form({
            id: '',
            nomSolicitante: 'Luis',
            rfc: 'RFC', 
            curp: 'CURP'
        }),

        estru: new Form({
            id: '',
            recPropios: '',
            recFondoPlata: '',
            invTotal: '',
        }),

        desc: new Form({
            id: '',
        }),

        decl: new Form({
            id: '',
        }),

        egre: new Form({
            id: '',
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
        this.cargaInicial()
    },
    methods: {
        
        cargaInicial () {
            try {
                axios.get("../../api/generales/"+this.$route.params.id).then(({ data }) => (this.gral = data))
                axios.get("../../api/estructura/"+this.$route.params.id).then(({ data }) => (this.estru = data))
                console.log(this.estru)
                
                console.log(this.estru.id)
                if(this.estru.id != '')
                    this.EI = false
                if(this.desc.id != '')
                    this.DN = false
                if(this.decl.id != '')
                    this.DP = false
                if(this.egre.id != '')
                    this.IE = false
                
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

       
    }
}
</script>