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
                                <v-list-item-title><h2>Nueva Solicitud de Credito</h2></v-list-item-title>
                                <v-list-item-subtitle>Abrir nuevo crédito</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card>
                </v-row>
            </v-col>
<v-form @submit.prevent="register" @keydown="form.onKeydown($event)">

            <v-card>
                <v-stepper v-model="el"
                    alt-labels
                    non-linear>
                    <v-stepper-header>
                        <v-stepper-step  color="green" :rules="[() => err1]"  :complete="el > 1" step="1"><p class="subtitle-2 text-center">Régimen Fiscal</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step  color="green" :rules="[() => err1]"  editable :complete="el > 2" step="2"><p class="subtitle-2 text-center">Datos Generales</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err2]"  editable :complete="el > 3" step="3"><p class="subtitle-2 text-center">Información Bancaria</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err3]"  editable :complete="el > 4" step="4"><p class="subtitle-2 text-center">Información de Contacto</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err4]"  editable :complete="el > 5" step="5"><p class="subtitle-2 text-center">Domicilio Particular</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err5]"  editable :complete="el > 6" step="6"><p class="subtitle-2 text-center">Domicilio Del Negocio</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err6]"  editable step="7"><p class="subtitle-2 text-center">Justificación y Destino del Crédito</p></v-stepper-step>
                        <v-divider></v-divider>
                    </v-stepper-header>
                    <v-stepper-items>

                        <v-stepper-content step="1">
                            <v-row align="center" justify="center">
                                <template>
                                    <v-img
                                    src="../img/moral.png"
                                    lazy-src="https://picsum.photos/id/11/10/6"
                                    aspect-ratio="1"
                                    class="grey lighten-2"
                                    max-width="500"
                                    max-height="300"
                                    ></v-img>
                                </template>
                                <v-radio-group v-model="form.regimen" :mandatory="false">
                                    <v-radio label="Persona Moral" value="Persona Moral"></v-radio>
                                    <v-radio label="Persona Fisica" value="Persona Física"></v-radio>
                                </v-radio-group>
                            </v-row>                            
                        </v-stepper-content>

                        <v-stepper-content step="2">
                            <v-container
                                class="mb-12">
                                <v-row v-if="form.regimen>='Persona Moral'" align="center" justify="space-between">
                                    <v-col cols="6">
                                        <v-text-field  color="purple lighten-2" class="title"
                                            v-model="form.nomEmpresa"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account"
                                            label="Nombre de la Empresa">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="6">
                                        <v-text-field  color="purple lighten-2" class="title"
                                            v-model="form.rfcEmpresa"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account"
                                            maxlength="12"
                                            label="RFC de la Empresa">
                                        </v-text-field>                        
                                    </v-col>  
                                </v-row>
                               
                                <v-row align="center" justify="space-between">
                                    <v-col cols="6">
                                        <v-text-field  color="purple lighten-2" class="title"
                                            v-model="form.nomSolicitante"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account"
                                            :error-messages="nomSolicitante"
                                            @blur="$v.form.nomSolicitante.$touch()" 
                                            @input="$v.form.nomSolicitante.$touch()"
                                            label="Nombre Completo del solicitante">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="3" sm="3">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.estNacimiento"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="estNacimiento"
                                            @blur="$v.form.estNacimiento.$touch()" 
                                            @input="$v.form.estNacimiento.$touch()"
                                            v-on:change="listarMunicipios"
                                            label="Estado donde Nació"
                                            :items="estados"
                                            >
                                        </v-select>
                                    </v-col>
                                    <v-col cols="3" sm="3">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.munNacimiento"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="munNacimiento"
                                            @blur="$v.form.munNacimiento.$touch()" 
                                            @input="$v.form.munNacimiento.$touch()"
                                            label="Municipio donde Nació"
                                            :items="municipios"
                                            >
                                        </v-select>
                                    </v-col>
                                </v-row>
                            
                                <v-row align="center" justify="space-between">
                                    <v-col cols="3">
                                        <v-menu
                                            v-model="menu2"
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
                                                    prepend-inner-icon="mdi-calendar-question"
                                                    :value="computedDateFormattedMomentjs"
                                                    :error-messages="fecNacimiento"
                                                    @blur="$v.form.fecNacimiento.$touch()" 
                                                    @input="$v.form.fecNacimiento.$touch()"
                                                    label="Fecha de Nacimiento"
                                                    readonly
                                                    v-on="on"
                                                ></v-text-field>
                                            </template>
                                            <v-date-picker color="green lighten-1" locale="es" v-model="form.fecNacimiento" @input="menu2 = false"></v-date-picker>
                                        </v-menu>
                                    </v-col>
                                    <v-col cols="3">
                                        <v-text-field  color="purple lighten-2" class="title"
                                            v-model="form.edad"
                                            shaped
                                            rounded
                                            v-mask="eda"
                                            filled
                                            prepend-inner-icon="mdi-account"
                                            :error-messages="edad"
                                            @blur="$v.form.edad.$touch()" 
                                            @input="$v.form.edad.$touch()"
                                            label="Edad">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="3">
                                        <v-select color="purple lighten-2" class="title"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account"
                                            v-model="form.sexo" 
                                            :error-messages="sexo"
                                            @blur="$v.form.sexo.$touch()" 
                                            @input="$v.form.sexo.$touch()"
                                            label="Sexo" 
                                            :items="['Hombre', 'Mujer']"
                                            maxlenght="12">
                                        </v-select>
                                    </v-col>
                                    <v-col cols="3">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.estCivil"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account-supervisor-outline"
                                            :error-messages="estCivil"
                                            @blur="$v.form.estCivil.$touch()" 
                                            @input="$v.form.estCivil.$touch()"
                                            label="Estado Civil"
                                            :items="['Soltero(a)','Casado(a)','Divorciado(a)', 'Viudo(a)', 'Unión Libre', 'Concubinato']">
                                        </v-select>
                                    </v-col>
                                </v-row>

                                <v-row align="center" justify="space-between">
                                    <v-col cols="6">
                                        <v-text-field color="purple lighten-2" class="title"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account"
                                            v-model="form.curp" 
                                            :error-messages="curp"
                                            @blur="$v.form.curp.$touch()" 
                                            @input="$v.form.curp.$touch()"
                                            label="CURP" 
                                            maxlength="18">
                                        </v-text-field>
                                    </v-col>           
                                    <v-col cols="6">
                                        <v-text-field  color="purple lighten-2" class="title"
                                            v-model="form.rfc"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account"
                                            :error-messages="rfc"
                                            @blur="$v.form.rfc.$touch()" 
                                            @input="$v.form.rfc.$touch()"
                                            maxlength="12"
                                            label="RFC">
                                        </v-text-field>                        
                                    </v-col>                 
                                </v-row>
                                
                                <v-row align="start" justify="start" offset-md="4">
                                    <v-col cols="1"></v-col>
                                    <span><a href="https://www.gob.mx/curp/" target="_blank"><strong>Consulta CURP Aquí</strong></a></span>
                                </v-row>
                            </v-container>                          
                        </v-stepper-content>

                        <v-stepper-content step="3">
                            <v-container
                                class="mb-12"
                                >
                                <v-row align="center" justify="space-between">
                                    <v-col cols="3">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.tipCuenta"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-piggy-bank"
                                            :error-messages="tipCuenta"
                                            @blur="$v.form.tipCuenta.$touch()" 
                                            @input="$v.form.tipCuenta.$touch()"
                                            label="Tipo de Cuenta"
                                            :items="['Ahorro', 'Cheques']">
                                        </v-select>                        
                                    </v-col>
                                    <v-col cols="3">
                                        <v-text-field color="purple lighten-2" class="title"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="tdc"
                                            prepend-inner-icon="mdi-credit-card"
                                            v-model="form.numCuenta" 
                                            :error-messages="numCuenta"
                                            @blur="$v.form.numCuenta.$touch()" 
                                            @input="$v.form.numCuenta.$touch()"
                                            label="Número de Cuenta" 
                                            hint="Digite correctamente el número de cuenta" 
                                            maxlenght="19">
                                        </v-text-field>
                                    </v-col>
                                    <v-col cols="3">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.banco"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-bank"
                                            :error-messages="banco"
                                            @blur="$v.form.banco.$touch()" 
                                            @input="$v.form.banco.$touch()"
                                            label="Banco"
                                            :items="['BBVA Bancomer','Banorte/IXE', 'Banamex', 'Citibank México', 'HSBC', 'Banco Bajío',
                                             'INBURSA', 'Banregio', 'Santander', 'Banco Azteca', 'Scotiank Bank',
                                             'Banco Monex', 'Compartamos Banco', 'Banco Famsa', 'Bancoppel', 'CIBanco']">
                                        </v-select>
                                    </v-col>
                                    <v-col cols="3">
                                        <v-text-field color="purple lighten-2" class="title"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="cbl"
                                            prepend-inner-icon="mdi-credit-card"
                                            v-model="form.clbInterbancaria" 
                                            :error-messages="clbInterbancaria"
                                            @blur="$v.form.clbInterbancaria.$touch()" 
                                            @input="$v.form.clbInterbancaria.$touch()"
                                            label="Clabe Interbancaria"
                                            hint="Digite correctamente la clabe interbancaria" 
                                            maxlenght="19">
                                        </v-text-field>
                                    </v-col>
                                </v-row>
                                
                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.plaza"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="plaza"
                                            @blur="$v.form.plaza.$touch()" 
                                            @input="$v.form.plaza.$touch()"
                                            label="Plaza">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.sucursal"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="sucursal"
                                            @blur="$v.form.sucursal.$touch()" 
                                            @input="$v.form.sucursal.$touch()"
                                            label="Sucursal">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.ubicacion"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="ubicacion"
                                            @blur="$v.form.ubicacion.$touch()" 
                                            @input="$v.form.ubicacion.$touch()"
                                            label="Ubicacion">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row>

                            </v-container>    
                        </v-stepper-content>

                        <v-stepper-content step="4">
                            <v-container
                                class="mb-12"
                                >
                                <v-row align="center" justify="space-between">
                                    <v-col cols="6">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.email"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-email"
                                            :error-messages="email"
                                            @blur="$v.form.email.$touch()" 
                                            @input="$v.form.email.$touch()"
                                            label="Email">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="6">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.facTwitter"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-facebook"
                                            :error-messages="facTwitter"
                                            @blur="$v.form.facTwitter.$touch()" 
                                            @input="$v.form.facTwitter.$touch()"
                                            label="Facebook/Twitter"
                                            hint="Nombre comoo aparece en FB/TW">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row>    
                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.telNegocio"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="tel"
                                            prepend-inner-icon="mdi-phone"
                                            :error-messages="telNegocio"
                                            @blur="$v.form.telNegocio.$touch()" 
                                            @input="$v.form.telNegocio.$touch()"
                                            label="Teléfono del Negocio"
                                            hint="Ingrese un número a contactar del negocio"
                                            maxlenght="19">
                                        </v-text-field>                        
                                    </v-col>    
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.telParticular"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="tel"
                                            prepend-inner-icon="mdi-phone"
                                            :error-messages="telParticular"
                                            @blur="$v.form.telParticular.$touch()" 
                                            @input="$v.form.telParticular.$touch()"
                                            label="Teléfono Particular"
                                            hint="Ingrese un número residencial"
                                            maxlenght="19">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.telCelular"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="tel"
                                            prepend-inner-icon="mdi-phone"
                                            :error-messages="telCelular"
                                            @blur="$v.form.telCelular.$touch()" 
                                            @input="$v.form.telCelular.$touch()"
                                            label="Teléfono Celular"
                                            hint="Ingrese un número celular"
                                            maxlenght="19">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row>   
                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.telRecados"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="tel"
                                            prepend-inner-icon="mdi-phone"
                                            :error-messages="telRecados"
                                            @blur="$v.form.telRecados.$touch()" 
                                            @input="$v.form.telRecados.$touch()"
                                            label="Teléfono Recados"
                                            hint="Ingrese un número de contacto para dejar recados"
                                            maxlenght="19">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="8">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.perRecados"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account"
                                            :error-messages="perRecados"
                                            @blur="$v.form.perRecados.$touch()" 
                                            @input="$v.form.perRecados.$touch()"
                                            label="Persona a Contactar"
                                            hint="Nombre de la persona que recibe los recados"
                                            maxlenght="19">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row>    
                            </v-container>
                        </v-stepper-content>

                        <v-stepper-content step="5">
                            <v-container
                                class="mb-12"
                                >
                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.cpParticular"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="cp"
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="cpParticular"
                                            @blur="$v.form.cpParticular.$touch()" 
                                            @input="$v.form.cpParticular.$touch()"
                                            label="Código Postal">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.munParticular"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="munParticular"
                                            @blur="$v.form.munParticular.$touch()" 
                                            @input="$v.form.munParticular.$touch()"
                                            label="Municipio">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.colParticular"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="colParticular"
                                            @blur="$v.form.colParticular.$touch()" 
                                            @input="$v.form.colParticular.$touch()"
                                            label="Colonia"
                                            >
                                        </v-text-field>                        
                                    </v-col>
                                </v-row> 

                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.calNumPar"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="calNumPar"
                                            @blur="$v.form.calNumPar.$touch()" 
                                            @input="$v.form.calNumPar.$touch()"
                                            label="Calle y Número">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.tipVivParticular"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-home"
                                            :error-messages="tipVivParticular"
                                            @blur="$v.form.tipVivParticular.$touch()" 
                                            @input="$v.form.tipVivParticular.$touch()"
                                            label="Tipo de Vivienda"
                                            :items="['Casa', 'Departamento']">
                                        </v-select>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.antLocParticular"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-timelapse"
                                            :error-messages="antLocParticular"
                                            @blur="$v.form.antLocParticular.$touch()" 
                                            @input="$v.form.antLocParticular.$touch()"
                                            label="Antiguedad en la Localidad"
                                            :items="['Mayor a 2 años', 'Menor a 2 años']">
                                        </v-select>                        
                                    </v-col>
                                </v-row>     
                                
                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.antDomActualPar"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-timelapse"
                                            :error-messages="antDomActualPar"
                                            @blur="$v.form.antDomActualPar.$touch()" 
                                            @input="$v.form.antDomActualPar.$touch()"
                                            label="Antiguedad en Domicilio Actual">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.tipDomParticular"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-home"
                                            :error-messages="tipDomParticular"
                                            @blur="$v.form.tipDomParticular.$touch()" 
                                            @input="$v.form.tipDomParticular.$touch()"
                                            label="Tipo de Domicilio"
                                            :items="['Propio', 'Rentado', 'Prestado', 'Pagando']">
                                        </v-select>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-currency-field v-if="form.tipDomParticular=='Propio'" color="purple lighten-2" class="title"
                                            v-model="form.valProParticular"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="valProParticular"
                                            @blur="$v.form.valProParticular.$touch()" 
                                            @input="$v.form.valProParticular.$touch()"
                                            label="Valor de la Propiedad">
                                        </v-currency-field>  
                                        <v-currency-field v-if="form.tipDomParticular=='Pagando'" color="purple lighten-2" class="title"
                                            v-model="form.valProParticular"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="valProParticular"
                                            @blur="$v.form.valProParticular.$touch()" 
                                            @input="$v.form.valProParticular.$touch()"
                                            label="¿Cuanto paga mensualmente?">
                                        </v-currency-field> 
                                        <v-currency-field v-if="form.tipDomParticular=='Rentado'" color="purple lighten-2" class="title"
                                            v-model="form.valProParticular"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="valProParticular"
                                            @blur="$v.form.valProParticular.$touch()" 
                                            @input="$v.form.valProParticular.$touch()"
                                            label="Renta Mensual">
                                        </v-currency-field>                
                                    </v-col>
                                </v-row>      
                            </v-container>
                        </v-stepper-content>

                        <v-stepper-content step="6">
                            <v-container
                                class="mb-12"
                                >
                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.cpNegocio"
                                            shaped
                                            rounded
                                            filled 
                                            v-mask="cp"
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="cpNegocio"
                                            @blur="$v.form.cpNegocio.$touch()" 
                                            @input="$v.form.cpNegocio.$touch()"
                                            label="Código Postal">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.munNegocio"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="munNegocio"
                                            @blur="$v.form.munNegocio.$touch()" 
                                            @input="$v.form.munNegocio.$touch()"
                                            label="Municipio">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.colNegocio"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="colNegocio"
                                            @blur="$v.form.colNegocio.$touch()" 
                                            @input="$v.form.colNegocio.$touch()"
                                            label="Colonia">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row> 

                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.calNumNegocio"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="calNumNegocio"
                                            @blur="$v.form.calNumNegocio.$touch()" 
                                            @input="$v.form.calNumNegocio.$touch()"
                                            label="Calle y Número">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.domFiscal"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="domFiscal"
                                            @blur="$v.form.domFiscal.$touch()" 
                                            @input="$v.form.domFiscal.$touch()"
                                            label="Domicilio Fiscal corresponde a"
                                            :items="['Domicilio Particular', 'Domicilio del Negocio', 'Otro']">
                                        </v-select>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field v-if="form.domFiscal=='Otro'" color="purple lighten-2" class="title"
                                            v-model="form.otroDomNegocio"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="otroDomNegocio"
                                            @blur="$v.form.otroDomNegocio.$touch()" 
                                            @input="$v.form.otroDomNegocio.$touch()"
                                            label="Ingrese el Domicilio"
                                            hint="Indique calle, num, colonia, municipio. Debe coincidir con la info del SAT">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row>  

                                <v-row align="center" justify="space-between">
                                    <v-col cols="3">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.sector"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-store"
                                            :error-messages="sector"
                                            @blur="$v.form.sector.$touch()" 
                                            @input="$v.form.sector.$touch()"
                                            label="Sector"
                                            :items="['Agroindustria', 'Artesanias', 'Automotriz',
                                            'Comercio', 'Industria', 'MetalMecánca', 'Minería', 
                                            'Servicio', 'Tecnologías de la Infomación', 'Turismo']">
                                        </v-select>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.actEmpresarial"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-domain"
                                            :error-messages="actEmpresarial"
                                            @blur="$v.form.actEmpresarial.$touch()" 
                                            @input="$v.form.actEmpresarial.$touch()"
                                            label="Actividad Empresarial"
                                            hint="¿Que tipo de negocio es/será?">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="5">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.proOfrece"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-cart"
                                            :error-messages="proOfrece"
                                            @blur="$v.form.proOfrece.$touch()" 
                                            @input="$v.form.proOfrece.$touch()"
                                            label="Productos o Servicios"
                                            hint="¿Que tipo de productos o servicios ofrece/ofrecerá?">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row>                           

                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.expEmpresario"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-av-timer"
                                            :error-messages="expEmpresario"
                                            @blur="$v.form.expEmpresario.$touch()" 
                                            @input="$v.form.expEmpresario.$touch()"
                                            label="Experiencia Empresarial"
                                            hint="Tiempo que tiene de experiencia">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.expActividad"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-av-timer"
                                            :error-messages="expActividad"
                                            @blur="$v.form.expActividad.$touch()" 
                                            @input="$v.form.expActividad.$touch()"
                                            label="Experiencia en la Actividad"
                                            hint="Tiempo que tiene de experiencia">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-menu
                                            v-model="menu1"
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
                                                :value="dateFormatOpe"
                                                :error-messages="iniOperaciones"
                                                @blur="$v.form.iniOperaciones.$touch()" 
                                                @input="$v.form.iniOperaciones.$touch()"
                                                label="Inicio de Operaciones"
                                                prepend-inner-icon="mdi-calendar-question"
                                                readonly
                                                v-on="on"
                                            ></v-text-field>
                                            </template>
                                            <v-date-picker color="green lighten-1" locale="es" v-model="form.iniOperaciones" @input="menu1 = false"></v-date-picker>
                                        </v-menu>
                                                     
                                    </v-col>
                                </v-row> 

                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.supNegocio"
                                            shaped
                                            rounded
                                            filled
                                            suffix="m²"
                                            prepend-inner-icon="mdi-texture-box"
                                            :error-messages="supNegocio"
                                            @keypress="isNumber($event)"
                                            @blur="$v.form.supNegocio.$touch()" 
                                            @input="$v.form.supNegocio.$touch()"
                                            label="Superficie del Negocio">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.perteneceA"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-store"
                                            :error-messages="perteneceA"
                                            @blur="$v.form.perteneceA.$touch()" 
                                            @input="$v.form.perteneceA.$touch()"
                                            label="Local donde se Localizara"
                                            :items="['Propio', 'Familiar', 'Rentado', 'Prestado']">
                                        </v-select>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-currency-field v-if="form.perteneceA=='Rentado'" color="purple lighten-2" class="title"
                                            v-model="form.rentaNegocio"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="rentaNegocio"
                                            @blur="$v.form.rentaNegocio.$touch()" 
                                            @input="$v.form.rentaNegocio.$touch()"
                                            label="¿Cuánto paga de renta?">
                                        </v-currency-field>                        
                                    </v-col>
                                </v-row> 
                            </v-container>
                        </v-stepper-content>

                        <v-stepper-content step="7">
                            <v-container
                                class="mb-12"
                                >
                                <v-row align="center" justify="space-between">
                                    <v-col cols="12">
                                        <v-textarea
                                            color="purple lighten-2" 
                                            class="title"
                                            v-model="form.justCredito"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-scale-balance"
                                            :error-messages="justCredito"
                                            @blur="$v.form.justCredito.$touch()" 
                                            @input="$v.form.justCredito.$touch()"
                                            label="Justificación del Credito"
                                            rows="3"
                                            hint="Describa brevemente">
                                        </v-textarea>
                                    </v-col>        
                                </v-row>
                                <v-row align="center" justify="start">
                                    <v-list-item-title> <p class="title white-text">ESPECIFIQUE EL DESTINO DEL CRÉDITO</p> </v-list-item-title>
                                    <p class="subtitle">Seleccione uno o varios destinos del Crédito</p> 
                                </v-row>
                                <v-row align="center" justify="space-between">                                   
                                    <v-checkbox v-model="capital" class="mx-2" label="Capital de Trabajo"></v-checkbox>
                                    <v-checkbox v-model="maquinaria" class="mx-2" label="Maquinaria y/o Equipo de Operación"></v-checkbox>
                                    <v-checkbox v-model="instalaciones" class="mx-2" label="Instalaciones Físicas"></v-checkbox>
                                </v-row>
                                
                                <v-row align="center" justify="space-between">
                                    <template>
                                        <v-expansion-panels>
                                            <v-expansion-panel v-if="capital">
                                                <v-expansion-panel-header>Capital de Trabajo</v-expansion-panel-header>
                                                <v-expansion-panel-content>
                                                     <v-row align="center" justify="space-between">
                                                        <v-col cols="4">
                                                            <v-text-field color="purple lighten-2" class="title"
                                                                v-model="form.desCap"
                                                                shaped
                                                                rounded
                                                                filled
                                                                prepend-inner-icon="mdi-shopping"
                                                                :error-messages="desCap"
                                                                @blur="$v.form.desCap.$touch()" 
                                                                @input="$v.form.desCap.$touch()"
                                                                label="Destino del Crédito"
                                                                hint="Especificar (Mercancías, materia prima, gastos de operación, etc.)">
                                                            </v-text-field>                        
                                                        </v-col>
                                                        <v-col cols="4">
                                                            <v-currency-field color="purple lighten-2" class="title"
                                                                v-model="form.monCap"
                                                                shaped
                                                                rounded
                                                                filled
                                                                prepend-inner-icon="mdi-currency-usd"
                                                                :error-messages="monCap"
                                                                @blur="$v.form.monCap.$touch()" 
                                                                @input="$v.form.monCap.$touch()"
                                                                label="Monto">
                                                            </v-currency-field>                        
                                                        </v-col>
                                                        <v-col cols="4">
                                                            <v-select color="purple lighten-2" class="title"
                                                                v-model="form.plaCap"
                                                                shaped
                                                                rounded
                                                                filled
                                                                prepend-inner-icon="mdi-calendar-question"
                                                                :error-messages="plaCap"
                                                                @blur="$v.form.plaCap.$touch()" 
                                                                @input="$v.form.plaCap.$touch()"
                                                                label="Plazo"
                                                                :items="['12 Meses', '18 Meses', '24 Meses', '30 Meses', '36 Meses',]">
                                                            </v-select>                        
                                                        </v-col>
                                                    </v-row>      
                                                </v-expansion-panel-content>
                                            </v-expansion-panel>   

                                            <v-expansion-panel v-if="maquinaria">
                                                <v-expansion-panel-header>Maquinaria y/o Equipo de Operación</v-expansion-panel-header>
                                                <v-expansion-panel-content>
                                                     <v-row align="center" justify="space-between">
                                                        <v-col cols="3">
                                                            <v-text-field color="purple lighten-2" class="title"
                                                                v-model="form.desMaq"
                                                                shaped
                                                                rounded
                                                                filled
                                                                prepend-inner-icon="mdi-shopping"
                                                                :error-messages="desMaq"
                                                                @blur="$v.form.desMaq.$touch()" 
                                                                @input="$v.form.desMaq.$touch()"
                                                                label="Destino del Crédito"
                                                                hint="Especificar (Maquinas, estantería, mobiliario, equipode transporte, etc.)">
                                                            </v-text-field>                        
                                                        </v-col>
                                                        <v-col cols="3">
                                                            <v-currency-field color="purple lighten-2" class="title"
                                                                v-model="form.monMaq"
                                                                shaped
                                                                rounded
                                                                filled
                                                                prepend-inner-icon="mdi-currency-usd"
                                                                :error-messages="monMaq"
                                                                @blur="$v.form.monMaq.$touch()" 
                                                                @input="$v.form.monMaq.$touch()"
                                                                label="Monto">
                                                            </v-currency-field>                        
                                                        </v-col>
                                                        <v-col cols="3">
                                                            <v-select color="purple lighten-2" class="title"
                                                                v-model="form.plaMaq"
                                                                shaped
                                                                rounded
                                                                filled
                                                                prepend-inner-icon="mdi-calendar-question"
                                                                :error-messages="plaMaq"
                                                                @blur="$v.form.plaMaq.$touch()" 
                                                                @input="$v.form.plaMaq.$touch()"
                                                                label="Plazo"
                                                                :items="['12 Meses', '18 Meses', '24 Meses', '30 Meses', '36 Meses',]">
                                                            </v-select>                        
                                                        </v-col>
                                                        <v-col cols="3">
                                                            <v-select color="purple lighten-2" class="title"
                                                                v-model="form.graMaq"
                                                                shaped
                                                                rounded
                                                                filled
                                                                prepend-inner-icon="mdi-calendar-question"
                                                                :error-messages="graMaq"
                                                                @blur="$v.form.graMaq.$touch()" 
                                                                @input="$v.form.graMaq.$touch()"
                                                                label="Gracia"
                                                                :items="['0 Meses', '1 Mes', '2 Meses', '3 Meses', '4 Meses', '5 Meses', '6 Meses']">
                                                            </v-select>                        
                                                        </v-col>
                                                    </v-row>      
                                                </v-expansion-panel-content>
                                            </v-expansion-panel>            

                                            <v-expansion-panel v-if="instalaciones">
                                                <v-expansion-panel-header>Instalaciones Físicas</v-expansion-panel-header>
                                                <v-expansion-panel-content>
                                                     <v-row align="center" justify="space-between">
                                                        <v-col cols="3">
                                                            <v-text-field color="purple lighten-2" class="title"
                                                                v-model="form.desIns"
                                                                shaped
                                                                rounded
                                                                filled
                                                                prepend-inner-icon="mdi-shopping"
                                                                :error-messages="desIns"
                                                                @blur="$v.form.desIns.$touch()" 
                                                                @input="$v.form.desIns.$touch()"
                                                                label="Destino del Crédito"
                                                                hint="Especificar (Construcción, ampliación y remodelación)">
                                                            </v-text-field>                        
                                                        </v-col>
                                                        <v-col cols="3">
                                                            <v-currency-field color="purple lighten-2" class="title"
                                                                v-model="form.monIns"
                                                                shaped
                                                                rounded
                                                                filled
                                                                prepend-inner-icon="mdi-currency-usd"
                                                                :error-messages="monIns"
                                                                @blur="$v.form.monIns.$touch()" 
                                                                @input="$v.form.monIns.$touch()"
                                                                label="Monto">
                                                            </v-currency-field>                        
                                                        </v-col>
                                                        <v-col cols="3">
                                                            <v-select color="purple lighten-2" class="title"
                                                                v-model="form.plaIns"
                                                                shaped
                                                                rounded
                                                                filled
                                                                prepend-inner-icon="mdi-calendar-question"
                                                                :error-messages="plaIns"
                                                                @blur="$v.form.plaIns.$touch()" 
                                                                @input="$v.form.plaIns.$touch()"
                                                                label="Plazo"
                                                                :items="['12 Meses', '18 Meses', '24 Meses', '30 Meses', '36 Meses',]">
                                                            </v-select>                        
                                                        </v-col>
                                                        <v-col cols="3">
                                                            <v-select color="purple lighten-2" class="title"
                                                                v-model="form.graIns"
                                                                shaped
                                                                rounded
                                                                filled
                                                                prepend-inner-icon="mdi-calendar-question"
                                                                :error-messages="graIns"
                                                                @blur="$v.form.graIns.$touch()" 
                                                                @input="$v.form.graIns.$touch()"
                                                                label="Gracia"
                                                                :items="['0 Meses', '1 Mes', '2 Meses', '3 Meses', '4 Meses', '5 Meses', '6 Meses']">
                                                            </v-select>                        
                                                        </v-col>
                                                    </v-row>      
                                                </v-expansion-panel-content>
                                            </v-expansion-panel>                                                                       
                                        </v-expansion-panels>
                                    </template>
                                </v-row>    
                               
                            </v-container>
                        </v-stepper-content>
                        
                    </v-stepper-items>
                </v-stepper>
            </v-card>

            <v-card-actions>                                
                <router-link :to="{ name: 'solicitudes' }">
                    <v-btn class="ma-2" color="red" rounded large elevation-16>
                        Cancelar
                        <v-icon medium right >
                            mdi-close-circle
                        </v-icon>    
                    </v-btn>
                </router-link>
                
                <v-spacer></v-spacer>
                <v-btn v-if="el==='1'" class="ma-2" @click="createSolicitud()" :loading="loader" color="success darken-1" rounded large elevation-24 type="submit">
                    Continuar 
                    <v-icon medium right >
                        mdi-content-save
                    </v-icon>
                </v-btn>

                <v-btn v-if="el>1" class="ma-2" @click="createGenerales()" :loading="loader" color="success darken-1" rounded large elevation-24 type="submit">
                    Guardar 
                    <v-icon medium right >
                        mdi-content-save
                    </v-icon>
                </v-btn>
            </v-card-actions>
    </v-form>
        </v-card>
    </v-container>      
</template>

<script>
import { validationMixin } from 'vuelidate'
import {helpers, required, requiredIf, maxLength, numeric, email, alpha, sameAs } from 'vuelidate/lib/validators'
import Form from 'vform'
import { mask } from 'vue-the-mask'
import { mapGetters } from 'vuex'
import moment from 'moment'
// ^$
const soloLetras = helpers.regex('alpha', /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/);
const curp = helpers.regex('alpha', /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)*$/);
const rfc = helpers.regex('alpha', /^([ A-ZÑ&]?[A-ZÑ&]{3}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])*$/);


  export default {
    mixins: [validationMixin],

    //RULES
    validations: {
        form:{  
            nomSolicitante: { required, maxLength: maxLength(191), soloLetras },
            fecNacimiento: { required },
            nomEmpresa: { required },
            rfcEmpresa: { requiredIf },
            estNacimiento: { required },
            munNacimiento: { required },
            edad: { required, numeric },
            sexo: { required },
            estCivil: { required },
            curp: { required, curp },
            rfc: { required, rfc },
  
            //STEP2
            tipCuenta: { required },
            numCuenta: { required },
            banco: { required },
            clbInterbancaria: { required },
            plaza: { required },
            sucursal: { required },
            ubicacion: { required },
            
            //STEP3
            email: { required },
            facTwitter: { required },
            telNegocio: { required },
            telParticular: { required },
            telCelular: { required },
            telRecados: { required },
            perRecados: { required },

            //STEP4
            calNumPar: { required },
            colParticular: { required },
            munParticular: { required },
            cpParticular: { required },
            tipVivParticular: { required },
            antLocParticular: { required },
            antDomActualPar: { required },
            tipDomParticular: { required },
            valProParticular: { required },

            //STEP5
            calNumNegocio: { required },
            colNegocio: { required },
            munNegocio: { required },
            cpNegocio: { required },
            domFiscal: { required },
            otroDomNegocio: { requiredIf },
            sector: { required },
            actEmpresarial: { required },
            proOfrece: { required },
            expEmpresario: { required },
            expActividad: { required },
            iniOperaciones: { required },
            supNegocio: { required },
            perteneceA: { required },
            rentaNegocio: { required },

            //STEP6
            justCredito: { required },
            desCap: { required },
            monCap: { required },
            plaCap: { required },

            desMaq: { required },
            monMaq: { required },
            plaMaq: { required },
            graMaq: { required },

            desIns: { required },
            monIns: { required },
            plaIns: { required },
            graIns: { required },

        }
    },

    directives: {
      mask,
    },

    middleware: 'auth',
    
    data: () => ({
        el: "1",
        menu2: false,
        menu1: false,
        btnSave: false,
        btnBack: false,
        btnNext: true,
        instalaciones: false,
        maquinaria: false,
        capital: false,
        alert: false,
        loader: false,
        err1: true,
        err2: true,
        err3: true,
        err4: true,
        err5: true,
        err6: true,
        estados: [],
        municipios: [],
        colonias: [],
        municipio: [],

        //MASCARAS
        fecha: '##/##/####',
        tdc: '####-####-####-####',
        eda: '##',
        cbl: '###-###-###########-#',
        tel: '(###)-###-####',
        cp: '#####',

        
        form: new Form({
            id: '',
            solicitud_id: '',
            generales_id: '',
            destino_id: '',
            estado: 'inicial',
            regimen: 'Persona Física',
            idPromotor: '',
            nomSolicitante: '',
            nomEmpresa: '',
            rfcEmpresa: '',
            fecNacimiento: '',
            estNacimiento: '',
            munNacimiento: '',
            edad: '',
            sexo: '',
            estCivil: '',
            curp: '',
            rfc: '',
            
            //STEP2
            tipCuenta: '',
            numCuenta: '',
            banco: '',
            clbInterbancaria: '',
            plaza: '',
            sucursal: '',
            ubicacion: '',
            
            //STEP3
            email: '',
            facTwitter: '',
            telNegocio: '',
            telParticular: '',
            telCelular: '',
            telRecados: '',
            perRecados: '',

            //STEP4
            calNumPar: '',
            colParticular: '',
            munParticular: '',
            cpParticular: '',
            tipVivParticular: '',
            antLocParticular: '',
            antDomActualPar: '',
            tipDomParticular: '',
            valProParticular: '',

            //STEP5
            calNumNegocio: '',
            colNegocio: '',
            munNegocio: '',
            cpNegocio: '',
            domFiscal: '',
            otroDomNegocio: '',
            sector: '',
            actEmpresarial: '',
            proOfrece: '',
            expEmpresario: '',
            expActividad: '',
            iniOperaciones: '',
            supNegocio: '',
            perteneceA: '',
            rentaNegocio: '',

            //STEP6
            justCredito: '',
            tipoDestino: '',
            desCap: '',
            monCap: '',
            plaCap: '',

            desMaq: '',
            monMaq: '',
            plaMaq: '',
            graMaq: '',

            desIns: '',
            monIns: '',
            plaIns: '',
            graIns: '',
        }),
    }),
    
    computed: {
        computedDateFormattedMomentjs () {
            return this.form.fecNacimiento ? moment(this.form.fecNacimiento).format('DD-MM-YYYY') : ''
        },
        dateFormatOpe () {
            return this.form.iniOperaciones ? moment(this.form.iniOperaciones).format('DD-MM-YYYY') : ''
        },
        //STEP 1
        nomSolicitante () {
            const errors = []
            
            if (!this.$v.form.nomSolicitante.$dirty){ 
                this.err1=true
                 return errors 
                 }
                 this.error = false
            !this.$v.form.nomSolicitante.required && errors.push('Este campo es obligatorio')
            !this.$v.form.nomSolicitante.soloLetras && errors.push('Este campo solo acepta letras')
            return errors
        },

        fecNacimiento () {
            const errors = []
            if (!this.$v.form.fecNacimiento.$dirty) return errors
            !this.$v.form.fecNacimiento.required && errors.push('Este campo es obligatorio')
            return errors
        },

        // nomEmpresa () {
        //     const errors = []
        //     if (!this.$v.form.nomEmpresa.$dirty) return errors
        //     !this.$v.form.nomEmpresa.requiredIf && errors.push('Este campo es obligatorio')
        //     return errors
        // },
        
        // rfcEmpresa () {
        //     const errors = []
        //     if (!this.$v.form.rfcEmpresa.$dirty) return errors
        //     !this.$v.form.rfcEmpresa.required && errors.push('Este campo es obligatorio')
        //     return errors
        // },

        estNacimiento () {
            const errors = []
            if (!this.$v.form.estNacimiento.$dirty) return errors
            !this.$v.form.estNacimiento.required && errors.push('Este campo es obligatorio')
            return errors
            this.err1=false
        },

        munNacimiento () {
            const errors = []
            if (!this.$v.form.munNacimiento.$dirty) return errors
            !this.$v.form.munNacimiento.required && errors.push('Este campo es obligatorio')
            return errors
            this.err1=false
        },
        
        edad () {
            const errors = []
            if (!this.$v.form.edad.$dirty) return errors
            !this.$v.form.edad.required && errors.push('Este campo es obligatorio')
            return errors
            this.err1=false
        },
        
        sexo () {
            const errors = []
            if (!this.$v.form.sexo.$dirty) return errors
            !this.$v.form.sexo.required && errors.push('Este campo es obligatorio')
            return errors
            this.err1=false
        },
        
        estCivil () {
            const errors = []
            if (!this.$v.form.estCivil.$dirty) return errors
            !this.$v.form.estCivil.required && errors.push('Este campo es obligatorio')
            return errors
            this.err1=false
        },

        curp() {
            const errors = []
            if (!this.$v.form.curp.$dirty) return errors
            !this.$v.form.curp.required && errors.push('Este campo es obligatorio')
            !this.$v.form.curp.curp && errors.push('Ingrese una CURP válida')
            return errors
            this.err1=false
        },

        rfc() {
            const errors = []
            if (!this.$v.form.rfc.$dirty) return errors
            !this.$v.form.rfc.required && errors.push('Este campo es obligatorio')
            !this.$v.form.rfc.rfc && errors.push('Ingrese un RFC válido')
            return errors
            this.err1=false
        },
        
        //PASO 2
        tipCuenta() {
            const errors = []
            if (!this.$v.form.tipCuenta.$dirty) return errors
            !this.$v.form.tipCuenta.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        
        numCuenta() {
            const errors = []
            if (!this.$v.form.numCuenta.$dirty) return errors
            !this.$v.form.numCuenta.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        banco() {
            const errors = []
            if (!this.$v.form.banco.$dirty) return errors
            !this.$v.form.banco.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        clbInterbancaria() {
            const errors = []
            if (!this.$v.form.clbInterbancaria.$dirty) return errors
            !this.$v.form.clbInterbancaria.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        plaza() {
            const errors = []
            if (!this.$v.form.plaza.$dirty) return errors
            !this.$v.form.plaza.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        sucursal() {
            const errors = []
            if (!this.$v.form.sucursal.$dirty) return errors
            !this.$v.form.sucursal.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        ubicacion() {
            const errors = []
            if (!this.$v.form.ubicacion.$dirty) return errors
            !this.$v.form.ubicacion.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },

        //PASO 3
        email() {
            const errors = []
            if (!this.$v.form.email.$dirty) return errors
            !this.$v.form.email.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },
        facTwitter() {
            const errors = []
            if (!this.$v.form.facTwitter.$dirty) return errors
            !this.$v.form.facTwitter.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },
        telNegocio() {
            const errors = []
            if (!this.$v.form.telNegocio.$dirty) return errors
            !this.$v.form.telNegocio.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },
        telParticular() {
            const errors = []
            if (!this.$v.form.telParticular.$dirty) return errors
            !this.$v.form.telParticular.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },
        telCelular() {
            const errors = []
            if (!this.$v.form.telCelular.$dirty) return errors
            !this.$v.form.telCelular.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },
        telRecados() {
            const errors = []
            if (!this.$v.form.telRecados.$dirty) return errors
            !this.$v.form.telRecados.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },

        perRecados() {
            const errors = []
            if (!this.$v.form.perRecados.$dirty) return errors
            !this.$v.form.perRecados.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },

        //PASO 4
        calNumPar() {
            const errors = []
            if (!this.$v.form.calNumPar.$dirty) return errors
            !this.$v.form.calNumPar.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        colParticular() {
            const errors = []
            if (!this.$v.form.colParticular.$dirty) return errors
            !this.$v.form.colParticular.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        munParticular() {
            const errors = []
            if (!this.$v.form.munParticular.$dirty) return errors
            !this.$v.form.munParticular.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        cpParticular() {
            const errors = []
            if (!this.$v.form.cpParticular.$dirty) return errors
            !this.$v.form.cpParticular.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        tipVivParticular() {
            const errors = []
            if (!this.$v.form.tipVivParticular.$dirty) return errors
            !this.$v.form.tipVivParticular.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        tipDomParticular() {
            const errors = []
            if (!this.$v.form.tipDomParticular.$dirty) return errors
            !this.$v.form.tipDomParticular.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        antLocParticular() {
            const errors = []
            if (!this.$v.form.antLocParticular.$dirty) return errors
            !this.$v.form.antLocParticular.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        antDomActualPar() {
            const errors = []
            if (!this.$v.form.antDomActualPar.$dirty) return errors
            !this.$v.form.antDomActualPar.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        valProParticular() {
            const errors = []
            if (!this.$v.form.valProParticular.$dirty) return errors
            !this.$v.form.valProParticular.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },

        //PASO 5
        calNumNegocio() {
            const errors = []
            if (!this.$v.form.calNumNegocio.$dirty) return errors
            !this.$v.form.calNumNegocio.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        colNegocio() {
            const errors = []
            if (!this.$v.form.colNegocio.$dirty) return errors
            !this.$v.form.colNegocio.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        munNegocio() {
            const errors = []
            if (!this.$v.form.munNegocio.$dirty) return errors
            !this.$v.form.munNegocio.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        cpNegocio() {
            const errors = []
            if (!this.$v.form.cpNegocio.$dirty) return errors
            !this.$v.form.cpNegocio.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        domFiscal() {
            const errors = []
            if (!this.$v.form.domFiscal.$dirty) return errors
            !this.$v.form.domFiscal.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },

        otroDomNegocio() {
            const errors = []
            if (!this.$v.form.otroDomNegocio.$dirty) return errors
            !this.$v.form.otroDomNegocio.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },

        sector() {
            const errors = []
            if (!this.$v.form.sector.$dirty) return errors
            !this.$v.form.sector.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        actEmpresarial() {
            const errors = []
            if (!this.$v.form.actEmpresarial.$dirty) return errors
            !this.$v.form.actEmpresarial.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        proOfrece() {
            const errors = []
            if (!this.$v.form.proOfrece.$dirty) return errors
            !this.$v.form.proOfrece.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        expEmpresario() {
            const errors = []
            if (!this.$v.form.expEmpresario.$dirty) return errors
            !this.$v.form.expEmpresario.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        expActividad() {
            const errors = []
            if (!this.$v.form.expActividad.$dirty) return errors
            !this.$v.form.expActividad.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        iniOperaciones() {
            const errors = []
            if (!this.$v.form.iniOperaciones.$dirty) return errors
            !this.$v.form.iniOperaciones.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        supNegocio() {
            const errors = []
            if (!this.$v.form.supNegocio.$dirty) return errors
            !this.$v.form.supNegocio.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        perteneceA() {
            const errors = []
            if (!this.$v.form.perteneceA.$dirty) return errors
            !this.$v.form.perteneceA.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },

        rentaNegocio() {
            const errors = []
            if (!this.$v.form.rentaNegocio.$dirty) return errors
            !this.$v.form.rentaNegocio.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },

        //PASO 6
        justCredito() {
            const errors = []
            if (!this.$v.form.justCredito.$dirty) return errors
            !this.$v.form.justCredito.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        desCap() {
            const errors = []
            if (!this.$v.form.desCap.$dirty) return errors
            !this.$v.form.desCap.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        monCap() {
            const errors = []
            if (!this.$v.form.monCap.$dirty) return errors
            !this.$v.form.monCap.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        plaCap() {
            const errors = []
            if (!this.$v.form.plaCap.$dirty) return errors
            !this.$v.form.plaCap.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        desMaq() {
            const errors = []
            if (!this.$v.form.desMaq.$dirty) return errors
            !this.$v.form.desMaq.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        monMaq() {
            const errors = []
            if (!this.$v.form.monMaq.$dirty) return errors
            !this.$v.form.monMaq.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        plaMaq() {
            const errors = []
            if (!this.$v.form.plaMaq.$dirty) return errors
            !this.$v.form.plaMaq.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        graMaq() {
            const errors = []
            if (!this.$v.form.graMaq.$dirty) return errors
            !this.$v.form.graMaq.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        desIns() {
            const errors = []
            if (!this.$v.form.desIns.$dirty) return errors
            !this.$v.form.desIns.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        monIns() {
            const errors = []
            if (!this.$v.form.monIns.$dirty) return errors
            !this.$v.form.monIns.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        plaIns() {
            const errors = []
            if (!this.$v.form.plaIns.$dirty) return errors
            !this.$v.form.plaIns.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        graIns() {
            const errors = []
            if (!this.$v.form.graIns.$dirty) return errors
            !this.$v.form.graIns.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
    },
  
    created () {
        this.listarEstados()
    },

    methods: {
      onInput (val) {
        this.steps = parseInt(val)
      },

      listarEstados(){
        axios.get('../api/estados').then(({ data }) => (this.estados = data))            
      },

      listarMunicipios(){
        axios.get('../api/municipios/'+this.form.estNacimiento).then(({ data }) => (this.municipios = data))            
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
        this.form.post('/api/generales')
        .then(()=>{
            toast.fire({
                type: 'success',
                title: 'Solicitud creada satisfactoriamente!'
            })
            this.loader = false
            this.$router.push('/solicitudes')
        }).catch((error)=>{
            toast.fire({
                type: 'error',
                title: 'Ocurrio un Error!'
            })
            this.loader = false
            this.alert = true
        })            
      },

     createSolicitud() {      
        this.alert = false
        this.loader = true
        this.form.post('/api/solicitud')
        .then(()=>{
            toast.fire({
                type: 'success',
                title: 'Solicitud iniciada!'
            })
            this.loader = false
            this.el = 2
            axios.get('../api/reg').then(({ data }) => (this.form.id = data.id, this.form.solicitud_id = data.id, this.form.generales_id = data.id, this.form.destino_id = data.id))
        }).catch((error)=>{
            toast.fire({
                type: 'error',
                title: 'Ocurrio un Error!'
            })
            this.loader = false
            this.alert = true
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
        if(this.el == 6)
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