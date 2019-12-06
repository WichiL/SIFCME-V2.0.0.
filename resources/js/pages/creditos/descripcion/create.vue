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
                                <v-list-item-title><h2>Captura de Descripción del Negocio</h2></v-list-item-title>
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
                        <v-stepper-step  color="green" :rules="[() => err1]"  :complete="el > 1" step="1"><p class="subtitle-2 text-center">Información Cualitativa</p></v-stepper-step>
                       <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err2]"  :complete="el > 2" step="2"><p class="subtitle-2 text-center">Información Extra</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-divider></v-divider>
                    </v-stepper-header>

                    <v-stepper-items>
                        <v-stepper-content step="1">
                            <v-container
                                class="mb-12"                                >
                                <v-row align="center" justify="space-between">
                                  <v-col cols="12">
                                    <v-textarea color="purple lighten-2" class="title"
                                      v-model="form.historia"
                                      shaped
                                      rounded
                                      filled
                                      prepend-inner-icon="mdi-history"
                                      :error-messages="historia"
                                      @blur="$v.form.historia.$touch()" 
                                      @input="$v.form.historia.$touch()"
                                      rows="4"
                                      label="Historia ¿Desde cuándo y qué es lo que hacemos o haremos en el negocio?">
                                    </v-textarea>                        
                                  </v-col>
                                </v-row> 
                                <v-row align="center" justify="center">
                                  <v-col cols="6">
                                    <label>Empleos actuales inscritos en el IMSS</label>
                                    <v-row align="center" justify="center">
                                      <v-col cols="6">
                                        <v-text-field  color="purple lighten-2" class="title"
                                          v-model="form.actMuj"
                                          shaped
                                          rounded
                                          filled
                                          @keypress="isNumber($event)"
                                          prepend-inner-icon="mdi-account"
                                          :error-messages="actMuj"
                                          @blur="$v.form.actMuj.$touch()" 
                                          @input="$v.form.actMuj.$touch()"
                                          label="Mujer(es)">
                                        </v-text-field>
                                      </v-col>
                                      <v-col cols="6">
                                        <v-text-field  color="purple lighten-2" class="title"
                                          v-model="form.actHom"
                                          shaped
                                          rounded
                                          filled
                                          @keypress="isNumber($event)"
                                          prepend-inner-icon="mdi-account"
                                          :error-messages="actHom"
                                          @blur="$v.form.actHom.$touch()" 
                                          @input="$v.form.actHom.$touch()"
                                          label="Hombre(s)">
                                        </v-text-field>
                                      </v-col>
                                    </v-row>

                                  </v-col>	
                                </v-row>    

                                <v-row align="center" justify="center">
                                  <v-col cols="6">
                                    <label>Empleos a generar e inscribira en el IMSS</label>
                                    <v-row align="center" justify="center">
                                      <v-col cols="6">
                                        <v-text-field  color="purple lighten-2" class="title"
                                          v-model="form.genMuje"
                                          shaped
                                          rounded
                                          filled
                                          @keypress="isNumber($event)"
                                          prepend-inner-icon="mdi-account"
                                          :error-messages="genMuje"
                                          @blur="$v.form.genMuje.$touch()" 
                                          @input="$v.form.genMuje.$touch()"
                                          label="Mujer(es)">
                                        </v-text-field>
                                      </v-col>
                                      <v-col cols="6">
                                        <v-text-field  color="purple lighten-2" class="title"
                                          v-model="form.genHom"
                                          shaped
                                          rounded
                                          filled
                                          @keypress="isNumber($event)"
                                          prepend-inner-icon="mdi-account"
                                          :error-messages="genHom"
                                          @blur="$v.form.genHom.$touch()" 
                                          @input="$v.form.genHom.$touch()"
                                          label="Hombre(s)">
                                        </v-text-field>
                                      </v-col>
                                    </v-row>

                                  </v-col>	
                                </v-row>                       
                            </v-container>                          
                        </v-stepper-content>

                        <v-stepper-content step="2">
                            <v-container
                                class="mb-12"
                                >
                                <v-row align="center" justify="space-between">
                                  <v-col cols="6">
                                    <v-currency-field color="purple lighten-2" class="title"
                                      v-model="form.nomina"
                                      shaped
                                      rounded
                                      filled
                                      prepend-inner-icon="mdi-currency-usd"
                                      :error-messages="nomina"
                                      @blur="$v.form.nomina.$touch()" 
                                      @input="$v.form.nomina.$touch()"
                                      label="¿A cuánto asciende mensualmente mi nómina?">
                                    </v-currency-field>                        
                                  </v-col>
                                  
                                  <v-col cols="6">
                                    <v-currency-field color="purple lighten-2" class="title"
                                      v-model="form.salario"
                                      shaped
                                      rounded
                                      filled
                                      prepend-inner-icon="mdi-currency-usd"
                                      :error-messages="salario"
                                      @blur="$v.form.salario.$touch()" 
                                      @input="$v.form.salario.$touch()"
                                      label="Como empresario(a) tengo/tendre un salario mensual de">
                                    </v-currency-field> 
                                  </v-col>
                                </v-row>
                                <v-row align="center" justify="center">
                                  <v-col cols="8">
                                    <v-currency-field color="purple lighten-2" class="title"
                                      v-model="form.upNomina"
                                      shaped
                                      rounded
                                      filled
                                      prepend-inner-icon="mdi-currency-usd"
                                      :error-messages="upNomina"
                                      @blur="$v.form.upNomina.$touch()" 
                                      @input="$v.form.upNomina.$touch()"
                                      label="¿A cuánto ascenderá mensualmente mi nómina?">
                                    </v-currency-field> 
                                  </v-col>  
                                  <v-col cols="4">
                                    <v-text-field color="purple lighten-2" class="title"
                                      v-model="form.incremento"
                                      shaped
                                      rounded
                                      filled
                                      @keypress="isNumber($event)"
                                      prepend-inner-icon="mdi-percent"
                                      :error-messages="incremento"
                                      @blur="$v.form.incremento.$touch()" 
                                      @input="$v.form.incremento.$touch()"
                                      maxlength="3"
                                      label="Incremento estimado en las ventas o ingresos">
                                    </v-text-field> 
                                  </v-col>  
                                </v-row> 

                                <v-row align="center" justify="center">
                                  <v-col cols="12">
                                    <v-textarea color="purple lighten-2" class="title"
                                      v-model="form.porque"
                                      shaped
                                      rounded
                                      filled
                                      prepend-inner-icon="mdi-history"
                                      :error-messages="porque"
                                      @blur="$v.form.porque.$touch()" 
                                      @input="$v.form.porque.$touch()"
                                      rows="4"
                                      label="¿Porque?"
                                      hint="Describa brevemente...">
                                    </v-textarea>                        
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


// ^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$
const soloLetras = helpers.regex('alpha', /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/);


  export default {
    mixins: [validationMixin],

    //RULES
    validations: {
        form:{  
         //ESTRUCTURA    
            id: { required },
            actMuj: { required },
            actHom: { required },
            historia: { required },
            genMuje: { required },
            genHom: { required },
            nomina: { required },
            salario: { required },
            upNomina: { required },
            incremento: { required },
            porque: { required },
        }
    },

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

        //MASCARAS
        fecha: '##/##/####',
        tdc: '####-####-####-####',
        eda: '##',
        cbl: '###-###-###########-#',
        tel: '(###)-###-####',
        cp: '#####',
        time: '##:##',
        yr: '####',

        form: new Form({
        //ESTRUCTURA
            id: '',
            historia: '',
            solicitud_id: '',
            actMuj: '',
            actHom: '',
            genMuje: '',
            genHom: '',
            nomina: '',
            salario: '',
            upNomina: '',
            incremento: '',
            porque: '',
        }),
    }),
    
    computed: {
     
     computedDateFormattedMomentjs () {
            return this.form.fecInscripcion ? moment(this.form.fecInscripcion).format('DD-MM-YYYY') : ''
        },
        //STEP 1
        historia () {
            const errors = []
            if (!this.$v.form.historia.$dirty) return errors
            !this.$v.form.historia.required && errors.push('Este campo es obligatorio')
            return errors
        },

        actMuj () {
            const errors = []
            if (!this.$v.form.actMuj.$dirty) return errors
            !this.$v.form.actMuj.required && errors.push('Este campo es obligatorio')
            return errors
        },

        actHom () {
            const errors = []
            if (!this.$v.form.actHom.$dirty) return errors
            !this.$v.form.actHom.required && errors.push('Este campo es obligatorio')
            return errors
        },

        genMuje () {
            const errors = []
            if (!this.$v.form.genMuje.$dirty) return errors
            !this.$v.form.genMuje.required && errors.push('Este campo es obligatorio')
            return errors
        },

        genHom () {
            const errors = []
            if (!this.$v.form.genHom.$dirty) return errors
            !this.$v.form.genHom.required && errors.push('Este campo es obligatorio')
            return errors
        },

        nomina () {
            const errors = []
            if (!this.$v.form.nomina.$dirty) return errors
            !this.$v.form.nomina.required && errors.push('Este campo es obligatorio')
            return errors
        },

        salario () {
            const errors = []
            if (!this.$v.form.salario.$dirty) return errors
            !this.$v.form.salario.required && errors.push('Este campo es obligatorio')
            return errors
        },

        upNomina () {
            const errors = []
            if (!this.$v.form.upNomina.$dirty) return errors
            !this.$v.form.upNomina.required && errors.push('Este campo es obligatorio')
            return errors
        },

        incremento () {
            const errors = []
            if (!this.$v.form.incremento.$dirty) return errors
            !this.$v.form.incremento.required && errors.push('Este campo es obligatorio')
            return errors
        },

        porque () {
            const errors = []
            if (!this.$v.form.porque.$dirty) return errors
            !this.$v.form.porque.required && errors.push('Este campo es obligatorio')
            return errors
        },       
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
        this.$v.$touch()
        this.form.id = this.$route.params.id,
        this.form.solicitud_id = this.$route.params.id,
        this.form.post('/api/descripcion')
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
        if(this.el == 2)
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