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
                <v-list-item-title> <p class="title white-text" >Hubo errores al intentar registrar el usuario</p> </v-list-item-title>
                <p>Corrija el formulario</p> 
            
            </v-alert>
        </div>
        <v-card>
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
                                    mdi-account-multiple-plus
                                </v-icon>            
                                <v-list-item-content class="mt-2 mb-2">
                                    <v-list-item-title><h2>Agregar Nuevo Usuario</h2></v-list-item-title>
                                    <v-list-item-subtitle>Ingrese los datos que se piden</v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>
                        </v-card>
                        <!-- <v-card color="#9F2A2A">
                            <modal />    
                        </v-card> -->
                    </v-row>
                </v-col>
            </v-card>
            <form @submit.prevent="createUser" id="form">
                <v-card-text>
                    <v-container>
                        <v-row align="center" justify="center">
                            <v-col cols="7">
                                <v-text-field  color="purple lighten-2" class="title"
                                    v-model="user.name" 
                                    shaped
                                    rounded
                                    filled
                                    prepend-inner-icon="mdi-account"
                                    :error-messages="nameErrors"
                                    @blur="$v.user.name.$touch()" 
                                    @input="$v.user.name.$touch()"
                                    label="Nombre"
                                    hint="Nombre completo del usuario">
                                </v-text-field>                        
                            </v-col>
                            <v-col cols="5">
                                <v-text-field color="purple lighten-2" class="title"
                                    :counter="12"
                                    maxlength="12"
                                    shaped
                                    rounded
                                    filled
                                    prepend-inner-icon="mdi-account"
                                    v-model="user.username"
                                    :error-messages="usernameErrors"
                                    @blur="$v.user.username.$touch()" 
                                    @input="$v.user.username.$touch()"
                                    label="Usuario" 
                                    hint="Ingrese un nombre de usuario"
                                    maxlenght="12">
                                </v-text-field>
                            </v-col>
                        </v-row>
                        <v-row align="center" justify="center">    
                            <v-col cols="6">
                                <v-text-field color="purple lighten-2" class="title"
                                    v-model="user.email" 
                                    shaped
                                    rounded
                                    filled
                                    prepend-inner-icon="mdi-email"
                                    :error-messages="emailErrors"
                                    @blur="$v.user.email.$touch()" 
                                    @input="$v.user.email.$touch()"
                                    label="Email"
                                    hint="Email del usuario">
                                </v-text-field>
                            </v-col>
                            <v-col cols="6">
                                <v-text-field color="purple lighten-2" class="title"
                                    :counter="10"
                                    maxlength="10"
                                    shaped
                                    rounded
                                    filled
                                    :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                                    :type="show1 ? 'text' : 'password'"
                                    @click:append="show1 = !show1"
                                    v-model="user.password" 
                                    :error-messages="passErrors"
                                    @blur="$v.user.password.$touch()" 
                                    @input="$v.user.password.$touch()"
                                    label="Contraseña"
                                    hint="Elija una contraseña de maximo 10 caracteres">
                                </v-text-field>
                            </v-col>
                        </v-row>    
                        <v-row align="center" justify="center">    
                            <v-col cols="6">
                                <v-text-field color="purple lighten-2" class="title"
                                    :counter="10"
                                    maxlength="10"
                                    shaped
                                    rounded
                                    filled
                                    :append-icon="show2 ? 'mdi-eye' : 'mdi-eye-off'"
                                    :type="show2 ? 'text' : 'password'"
                                    :error-messages="passConErrors"
                                    @click:append="show2 = !show2"
                                    @blur="$v.user.password_confirmation.$touch()" 
                                    @input="$v.user.password_confirmation.$touch()"
                                    v-model="user.password_confirmation" 
                                    label="Confirmar Contraseña" 
                                    hint="Vuelva a ingresar la contraseña">
                                </v-text-field>
                            </v-col>
                            <v-col cols="6" sm="6">
                                <v-select color="purple lighten-2" class="title"
                                    v-model="user.rol"
                                    shaped
                                    rounded
                                    filled
                                    prepend-inner-icon="mdi-account-card-details"
                                    :error-messages="rolErrors"
                                    @blur="$v.user.rol.$touch()" 
                                    @input="$v.user.rol.$touch()"
                                    label="Seleccione un Rol"
                                    hint="Elija el rol que desempañara"
                                    :items="['Administrador', 'Promotor', 'Solicitante']"
                                    >
                                </v-select>
                            </v-col>
                        </v-row>
                    </v-container>
                </v-card-text>

                <v-card-actions>
                    <v-spacer></v-spacer>
                    <router-link :to="{ name: 'usuarios' }">
                        <v-btn class="ma-2" color="red" rounded large elevation-16>
                            Cancelar
                            <v-icon medium right >
                                mdi-close-circle
                            </v-icon>    
                        </v-btn>
                    </router-link>
                    <v-btn class="ma-2" :loading="loader" color="success darken-1" rounded large elevation-24 type="submit">
                        Guardar 
                        <v-icon medium right >
                            mdi-content-save
                        </v-icon>
                    </v-btn>
                </v-card-actions>
            </form>
        </v-card>
    </v-container>                       
</template>

<script>
import { validationMixin } from 'vuelidate'
import {helpers, required, maxLength, email, alpha, sameAs } from 'vuelidate/lib/validators'
import Form from 'vform'
import { mask } from 'vue-the-mask'

const soloLetras = helpers.regex('alpha', /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/);

export default {
    mixins: [validationMixin],

    //RULES
    validations: {
        user:{
            name: { required, maxLength: maxLength(191), soloLetras },
            username: { required, maxLength: maxLength(12) },
            email: { required, email },
            rol: { required },
            password: { required, maxLength: maxLength(10), sameAs },
            password_confirmation: { sameAs: sameAs('password') },
        }
    },

    middleware: 'auth',
    
    data: () => ({
        show1: false,
        show2: false,
        alert: false,
        loader: false,
        user: new Form({
            id: '',
            name: '',
            username: '',    
            email: '',
            rol: '',
            password: '',
            password_confirmation: ''
        }),
    }),

    computed: {
        nameErrors () {
            const errors = []
            if (!this.$v.user.name.$dirty) return errors
            !this.$v.user.name.required && errors.push('Es necesario ingresar un nombre')
            !this.$v.user.name.maxLength && errors.push('Ha excedido el máximo de caracteres permitidos')
            !this.$v.user.name.soloLetras && errors.push('Este campo solo acepta letras')
            return errors
        },
        
        usernameErrors () {
            const errors = []
            if (!this.$v.user.username.$dirty) return errors
            !this.$v.user.username.maxLength && errors.push('Ingrese un usuario menor a 12 caracteres')
            !this.$v.user.username.required && errors.push('Es necesario ingresar un usuario')
            return errors
        },
        emailErrors () {
            const errors = []
            if (!this.$v.user.email.$dirty) return errors
            !this.$v.user.email.email && errors.push('El email ingresado no es válido')
            !this.$v.user.email.required && errors.push('Es necesario ingresar un email')
            return errors
        },
        rolErrors () {
            const errors = []
            if (!this.$v.user.rol.$dirty) return errors
            !this.$v.user.rol.required && errors.push('No olvides seleccionar el rol para este usuario')
            return errors
        },
        passErrors () {
            const errors = []
            if (!this.$v.user.password.$dirty) return errors
            !this.$v.user.password.required && errors.push('Es necesario ingresar una contraseña')
            return errors
        },
        passConErrors () {
            const errors = []
            if (!this.$v.user.password_confirmation.$dirty) return errors
            !this.$v.user.password_confirmation.sameAs && errors.push('Las contraseñas deben ser identicas')
            return errors
        },
    },     

    methods: {

        createUser () {
            this.alert = false
            this.loader = true
            this.$v.$touch()
            this.user.post('/api/register')
            .then(()=>{
                toast.fire({
                    type: 'success',
                    title: 'Usuario creado satisfactoriamente!'
                })
                this.loader = false
                this.$router.push('/usuarios')
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
    }
}    
</script>  