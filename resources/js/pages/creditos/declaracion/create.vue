<template>

    <v-container aling="center">
        <v-overlay :value="loader">
            <v-progress-circular
                indeterminate 
                size="150"
                width="11"
                color="red">
            </v-progress-circular>
        </v-overlay>
        <div>
            <v-alert 
            :value="alert"
            class="transition-swing"
            dismissible
            color="pink"
            dark
            border="bottom"
            type="error"
            transition="scale-transition"
                >     
                <v-list-item-title> <p class="title white-text" >Hubo errores al procesar la información del crédito</p> </v-list-item-title>
                <p>Corrija el formulario</p> 
            
            </v-alert>
        </div>
        <v-card
            color="#9F2A2A"
            absolute
            > 
            <v-col cols="11">
                <v-row
                    align="center"
                    justify="space-between"
                    >
                    <v-card color="#9F2A2A" outlined>
                        <v-list-item>
                            <v-icon 
                                x-large
                                left
                                >
                                mdi-currency-usd
                            </v-icon>            
                            <v-list-item-content class="mt-2 mb-2">
                                <v-list-item-title><h2>Captura de Declaración Patrimonial</h2></v-list-item-title>
                                <v-list-item-subtitle>Rellene la información pertinente</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card>
                </v-row>
            </v-col>
            <v-card>
                <v-stepper v-model="el"
                    alt-labels
                    non-linear>
                    <v-stepper-header>
                        <v-stepper-step  color="green" :rules="[() => err1]"  :complete="el > 1" step="1"><p class="subtitle-2 text-center">1.-  Información Cualitativa</p></v-stepper-step>
                       <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err2]"  :complete="el > 2" step="2"><p class="subtitle-2 text-center">2.- Información Cualitativa</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err3]"  step="3"><p class="subtitle-2 text-center">3.- Información Cualitativa</p></v-stepper-step>
                       
                        <v-divider></v-divider>
                    </v-stepper-header>

                    <v-stepper-items>
                        <v-stepper-content step="1">
                            <v-container
                                class="mb-12"                                >
                                <v-row align="center" justify="end">
                                  <v-col cols="3">
                                    <v-menu
                                      v-model="menu3"
                                      :close-on-content-click="false"
                                      :nudge-right="40"
                                      transition="scale-transition"
                                      offset-y
                                      min-width="290px"
                                       >
                                      <template v-slot:activator="{ on }">
                                      <v-text-field
                                          color="purple lighten-2" 
                                          class="title"
                                          shaped
                                          rounded
                                          filled
                                          :value="computedDateFormattedMomentjs"
                                          label="Fecha"
                                          prepend-inner-icon="mdi-calendar"
                                          readonly
                                          v-on="on"
                                      ></v-text-field>
                                      </template>
                                      <v-date-picker color="green lighten-1" locale="es" v-model="form.fecCierre" @input="menu3 = false"></v-date-picker>
                                  </v-menu>                              
                                  </v-col>
                                </v-row>   
                                <v-row align="center" justify="center">    
                                  <v-col cols="8" justify="space-around">
                                    <label class="title">1.- Efectivo que tiene en caja</label>
                                    <label class="subtitle">Importe en <strong>efectivo </strong> con el que cuenta su negocio
                                    a la fecha de esta Declaración</label>
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.efeCaja"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                <v-row align="center" justify="center">    
                                  <v-col cols="8" justify="space-around">
                                    <label class="title">2.- Saldo en bancos (Solo cuentas a su nombre)</label>
                                    <label class="subtitle"><strong>Saldo </strong> con el que cuenta su negocio
                                    a la fecha de esta Declaración</label>
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.salBancos"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                <v-row align="center" justify="center">    
                                  <v-col cols="8" justify="space-around">
                                    <label class="title">3.- Cuentas que tiene por cobrar</label>
                                    <label class="subtitle">Importe que le deben sus <strong>clientes y dedudores </strong>
                                    relacionados con su negocio</label>
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.cueCobrar"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>

                                <v-row align="center" justify="center">    
                                  <v-col cols="8" justify="space-around">
                                    <label class="title">4.- Valor de sus inventarios actuales</label>
                                    <label class="subtitle"><strong>Valor de Adquisición </strong> de las mercancias
                                    y materiales que tengan almacenados y en proceso para su venta</label>
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.valInventarios"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                <v-row align="center" justify="end">
                                  <v-col cols="3">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.totEfectivo"
                                        shaped
                                        rounded
                                        filled
                                        label="TOTAL"
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>                               
                                  </v-col>
                                </v-row>   

                                <v-row align="center" justify="start">    
                                  <v-col cols="8" justify="space-around">
                                    <label class="title">5.- Inmuebles relacionados con el negocio a nombre del solicitante</label>
                                    <label class="subtitle">Valor de casas, edificios, terrenos que esten a nombre del solicitante</label>                              
                                  </v-col>
                                </v-row> 
                                <v-row align="center" justify="center">    
                                  <v-col cols="8">
                                    <v-text-field  color="purple lighten-2" class="title"
                                        v-model="form.inmSolicitante1"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-domain"
                                        label="Inmueble">
                                    </v-text-field>                        
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.valInmueble1"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                
                                <v-row align="center" justify="center">    
                                  <v-col cols="8">
                                    <v-text-field  color="purple lighten-2" class="title"
                                        v-model="form.inmSolicitante2"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-domain"
                                        label="Inmueble">
                                    </v-text-field>                        
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.valInmueble2"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                <v-row align="center" justify="end">
                                  <v-col cols="3">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.totImuebles"
                                        shaped
                                        rounded
                                        filled
                                        label="TOTAL"
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>                               
                                  </v-col>
                                </v-row>   
                            </v-container>                          
                        </v-stepper-content>

                        <v-stepper-content step="2">
                            <v-container
                                class="mb-12"
                                >
                                <v-row align="center" justify="start">    
                                  <v-col cols="8" justify="space-around">
                                    <label class="title">6.- Maquinaria y/o equipo con que cuenta su negocio</label>
                                    <label class="subtitle">Compresores, máquinas, molinos, básculas, herramientas, etc.</label>                              
                                  </v-col>
                                </v-row> 
                                <v-row align="center" justify="center">    
                                  <v-col cols="8">
                                    <v-text-field  color="purple lighten-2" class="title"
                                        v-model="form.maqSolicitante1"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-tools"
                                        label="Maquinaria">
                                    </v-text-field>                        
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.valMaquina1"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                
                                <v-row align="center" justify="center">    
                                  <v-col cols="8">
                                    <v-text-field  color="purple lighten-2" class="title"
                                        v-model="form.maqSolicitante2"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-tools"
                                        label="Maquinaria">
                                    </v-text-field>                        
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.valMaquina2"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                <v-row align="center" justify="center">    
                                  <v-col cols="8">
                                    <v-text-field  color="purple lighten-2" class="title"
                                        v-model="form.maqSolicitante3"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-tools"
                                        label="Maquinaria">
                                    </v-text-field>                        
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.valMaquina3"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                <v-row align="center" justify="center">    
                                  <v-col cols="8">
                                    <v-text-field  color="purple lighten-2" class="title"
                                        v-model="form.maqSolicitante4"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-tools"
                                        label="Maquinaria">
                                    </v-text-field>                        
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.valMaquina4"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                <v-row align="center" justify="center">    
                                  <v-col cols="8">
                                    <v-text-field  color="purple lighten-2" class="title"
                                        v-model="form.maqSolicitante5"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-tools"
                                        label="Maquinaria">
                                    </v-text-field>                        
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.valMaquina5"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                <v-row align="center" justify="center">    
                                  <v-col cols="8">
                                    <v-text-field  color="purple lighten-2" class="title"
                                        v-model="form.maqSolicitante6"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-tools"
                                        label="Maquinaria">
                                    </v-text-field>                        
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.valMaquina6"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>

                                <v-row align="center" justify="end">
                                  <v-col cols="3">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.totMaquinaria"
                                        shaped
                                        rounded
                                        filled
                                        label="TOTAL"
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>                               
                                  </v-col>
                                </v-row>  
                            </v-container>    
                        </v-stepper-content>

                        <v-stepper-content step="3">
                            <v-container
                                class="mb-12"
                                >
                                 <v-row align="center" justify="start">    
                                  <v-col cols="8" justify="space-around">
                                    <label class="title">7.- Equipos de transporte del negocio</label>
                                    <label class="subtitle">Camionetas, automóviles, motocicletas o cualquier otro tipo de transporte</label>                              
                                  </v-col>
                                </v-row> 
                                <v-row align="center" justify="center">    
                                  <v-col cols="8">
                                    <v-text-field  color="purple lighten-2" class="title"
                                        v-model="form.carSolicitante1"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-car"
                                        label="Transporte">
                                    </v-text-field>                        
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.valCarro1"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                
                                <v-row align="center" justify="center">    
                                  <v-col cols="8">
                                    <v-text-field  color="purple lighten-2" class="title"
                                        v-model="form.carSolicitante2"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-car"
                                        label="Transporte">
                                    </v-text-field>                        
                                  </v-col>
                                  <v-col cols="4" justify="center">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.valCarro2"
                                        shaped
                                        rounded
                                        filled
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>   
                                  </v-col>   
                                </v-row>
                                <v-row align="center" justify="end">
                                  <v-col cols="3">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.totCarros"
                                        shaped
                                        rounded
                                        filled
                                        label="TOTAL"
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>                               
                                  </v-col>
                                </v-row>

                                <v-row align="center" justify="start">    
                                  <v-col cols="8" justify="space-around">
                                    <label class="title">8.- Gastos de instalación</label>
                                  </v-col>
                                </v-row>    
                                <v-row align="center" justify="end">
                                  <v-col cols="5">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.totInstalacion"
                                        shaped
                                        rounded
                                        filled
                                        label="TOTAL"
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>                               
                                  </v-col>
                                </v-row>
                                <v-row align="center" justify="end">
                                  <v-col cols="5">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.totFijo"
                                        shaped
                                        rounded
                                        filled
                                        label="TOTAL FIJO"
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>                               
                                  </v-col>
                                </v-row>
                                <v-row align="center" justify="end">
                                  <v-col cols="5">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.actTotal"
                                        shaped
                                        rounded
                                        filled
                                        label="ACTIVO TOTAL"
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>                               
                                  </v-col>
                                </v-row>
                                <v-row align="center" justify="end">
                                  <v-col cols="5">
                                    <v-currency-field color="purple lighten-2" class="title"
                                        v-model="form.pasTotal"
                                        shaped
                                        rounded
                                        filled
                                        label="PASIVO TOTAL"
                                        prepend-inner-icon="mdi-currency-usd">
                                    </v-currency-field>                               
                                  </v-col>
                                </v-row>
                            </v-container>    
                        </v-stepper-content>

                    </v-stepper-items>
                </v-stepper>
            </v-card>

            <v-card-actions>                                
                <router-link :to="{ path: '/expediente/'+ this.$route.params.id }">
                    <v-btn class="ma-2" color="red" rounded large elevation-16>
                        Cancelar
                        <v-icon medium right >
                            mdi-close-circle
                        </v-icon>    
                    </v-btn>
                </router-link>
                
                <v-spacer></v-spacer>
                
                <v-btn @click="backStep()" v-if="btnBack" class="ma-2" color="grey darken-2" rounded large elevation-24 type="submit">
                    Atras 
                    <v-icon medium right >
                        mdi-arrow-left-circle
                    </v-icon>
                </v-btn>
                
                <v-btn v-if="btnNext" @click="nextStep()" class="ma-2" color="primary" rounded large elevation-24 type="submit">
                    Siguiente 
                    <v-icon medium right >
                        mdi-arrow-right-circle
                    </v-icon>
                </v-btn>
                
                <v-btn v-if="btnSave" class="ma-2" @click="createGenerales()" :loading="loader" color="success darken-1" rounded large elevation-24 type="submit">
                    Guardar 
                    <v-icon medium right >
                        mdi-content-save
                    </v-icon>
                </v-btn>
            </v-card-actions>
        </v-card>
    </v-container>      
</template>

<script>
import { validationMixin } from 'vuelidate'
import {helpers, required, maxLength, numeric, email, alpha, sameAs } from 'vuelidate/lib/validators'
import Form from 'vform'
import { mask } from 'vue-the-mask'
import { mapGetters } from 'vuex'
import moment from 'moment'

  export default {
    mixins: [validationMixin],

    //RULES
    // validations: {
    //     form:{  
    //      //ESTRUCTURA    
    //         id: { required },
    //         fecCierre: { required },
    //         efeCaja: { required },
    //         actHom: { required },
    //         historia: { required },
    //         genMuje: { required },
    //         genHom: { required },
    //         nomina: { required },
    //         salario: { required },
    //         upNomina: { required },
    //         incremento: { required },
    //         porque: { required },
    //     }
    // },

    directives: {
      mask,
    },

    middleware: 'auth',
    
    data: () => ({
        el: 1,
        btnSave: false,
        btnBack: false,
        btnNext: true,
        alert: false,
        loader: false,
        menu2: false,
        err1: true,
        err2: true,
        err3: true,
        err4: true,
        err5: true,
        err6: true,
        time: null,
        menu3: false,
        menu1: false,

        // //MASCARAS
        // fecha: '##/##/####',
        // tdc: '####-####-####-####',
        // eda: '##',
        // cbl: '###-###-###########-#',
        // tel: '(###)-###-####',
        // cp: '#####',
        // time: '##:##',
        // yr: '####',

        form: new Form({
        //ESTRUCTURA
            id: '',
            fecCierre: '',
            solicitud_id: '',
            efeCaja: '0.00',
            salBancos: '0.00',
            cueCobrar: '0.00',
            valInventarios: '0.00',
            totEfectivo: '0.00',
            inmSolicitante1: '',
            inmSolicitante2: '',
            valInmueble1: '0.00',
            valInmueble2: '0.00',
            totInmuebles: '0.00',
            maqSolicitante1: '',
            maqSolicitante2: '',
            maqSolicitante3: '',
            maqSolicitante4: '',
            maqSolicitante5: '',
            maqSolicitante6: '',
            valMaquina1: '0.00',
            valMaquina2: '0.00',
            valMaquina3: '0.00',
            valMaquina4: '0.00',
            valMaquina5: '0.00',
            valMaquina6: '0.00',
            totMaquinaria: '0.00',
            carSolicitante1: '',
            carSolicitante2: '',
            valCarro1: '0.00',
            valCarro2: '0.00',
            totCarros: '0.00',
            totInstalacion: '0.00',
            totFijo: '0.00',
            actTotal: '0.00',
            pasTotal: '0.00',
        }),
    }),
    
    computed: {
     
     computedDateFormattedMomentjs () {
            return this.form.fecCierre ? moment(this.form.fecCierre).format('DD-MM-YYYY') : ''
        },
        //STEP 1
        fecCierre () {
            const errors = []
            if (!this.$v.form.fecCierre.$dirty) return errors
            !this.$v.form.fecCierre.required && errors.push('Este campo es obligatorio')
            return errors
        },

        // efeCaja () {
        //     const errors = []
        //     if (!this.$v.form.efeCaja.$dirty) return errors
        //     !this.$v.form.efeCaja.required && errors.push('Este campo es obligatorio')
        //     return errors
        // },

        // actHom () {
        //     const errors = []
        //     if (!this.$v.form.actHom.$dirty) return errors
        //     !this.$v.form.actHom.required && errors.push('Este campo es obligatorio')
        //     return errors
        // },

        // genMuje () {
        //     const errors = []
        //     if (!this.$v.form.genMuje.$dirty) return errors
        //     !this.$v.form.genMuje.required && errors.push('Este campo es obligatorio')
        //     return errors
        // },

        // genHom () {
        //     const errors = []
        //     if (!this.$v.form.genHom.$dirty) return errors
        //     !this.$v.form.genHom.required && errors.push('Este campo es obligatorio')
        //     return errors
        // },

        // nomina () {
        //     const errors = []
        //     if (!this.$v.form.nomina.$dirty) return errors
        //     !this.$v.form.nomina.required && errors.push('Este campo es obligatorio')
        //     return errors
        // },

        // salario () {
        //     const errors = []
        //     if (!this.$v.form.salario.$dirty) return errors
        //     !this.$v.form.salario.required && errors.push('Este campo es obligatorio')
        //     return errors
        // },

        // upNomina () {
        //     const errors = []
        //     if (!this.$v.form.upNomina.$dirty) return errors
        //     !this.$v.form.upNomina.required && errors.push('Este campo es obligatorio')
        //     return errors
        // },

        // incremento () {
        //     const errors = []
        //     if (!this.$v.form.incremento.$dirty) return errors
        //     !this.$v.form.incremento.required && errors.push('Este campo es obligatorio')
        //     return errors
        // },

        // porque () {
        //     const errors = []
        //     if (!this.$v.form.porque.$dirty) return errors
        //     !this.$v.form.porque.required && errors.push('Este campo es obligatorio')
        //     return errors
        // },       
    },
  

    methods: {
      onInput (val) {
        this.steps = parseInt(val)
      },

      createGenerales() {
        this.err1 = true   
        this.err2 = true   
        this.err3 = true   
        this.err4 = true   
        this.err5 = true   
        this.err6 = true   
        this.alert = false
        this.loader = true
        this.form.id = this.$route.params.id,
        this.form.solicitud_id = this.$route.params.id,
        this.form.post('/api/declaracion')
        .then(()=>{
            toast.fire({
                type: 'success',
                title: 'Solicitud creada satisfactoriamente!'
            })
            this.loader = false
            this.$router.push('/expediente/'+ this.$route.params.id )
        }).catch((error)=>{
            toast.fire({
                type: 'error',
                title: 'Ocurrio un Error!'
            })
            this.loader = false
            this.alert = true
            // let errors = error.response.data.errors
            // console.log(errors)
        })            
      },

      isNumber: function(evt) {
      evt = (evt) ? evt : window.event;
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46) {
        evt.preventDefault();;
      } else {
        return true;
      }
    },
      
      nextStep () {
        this.btnBack = true  
        this.el = this.el + 1
        if(this.el == 3)
        {
            this.btnSave = true
            this.btnNext = false
        }
      },

       backStep () {
        this.btnNext = true
        this.btnSave = false  
        this.el = this.el - 1
        if(this.el == 1)
        {
            this.btnBack = false
        }
      }, 
    },
  }
</script>