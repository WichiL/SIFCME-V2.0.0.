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
                                <v-list-item-title><h2>Captura de Estructura de Crédito</h2></v-list-item-title>
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
                        <v-stepper-step  color="green" :rules="[() => err1]"  :complete="el > 1" step="1"><p class="subtitle-2 text-center">Estructura</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err2]"  :complete="el > 2" step="2"><p class="subtitle-2 text-center">Referencias Comerciales o Bancarias</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err3]"  :complete="el > 3" step="3"><p class="subtitle-2 text-center">Negocio</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err4]"  :complete="el > 4" step="4"><p class="subtitle-2 text-center">Créditos Anteriores</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step color="green" :rules="[() => err5]"  :complete="el > 5" step="5"><p class="subtitle-2 text-center">Manifestación Aval</p></v-stepper-step>
                        <v-divider></v-divider>
                        <v-divider></v-divider>
                    </v-stepper-header>

                    <v-stepper-items>

                        <v-stepper-content step="1">
                            <v-container
                                class="mb-12"                                >
                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-currency-field  color="purple lighten-2" class="title"
                                            v-model="form.recPropios"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="recPropios"
                                            @blur="$v.form.recPropios.$touch()" 
                                            @input="$v.form.recPropios.$touch()"
                                            label="Recursos Propios">
                                        </v-currency-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-currency-field color="purple lighten-2" class="title"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            v-model="form.recFondoPlata" 
                                            :error-messages="recFondoPlata"
                                            @blur="$v.form.recFondoPlata.$touch()" 
                                            @input="$v.form.recFondoPlata.$touch()"
                                            label="Recursos Fondo Plata" 
                                            maxlenght="12">
                                        </v-currency-field>
                                    </v-col>
                                    <v-col cols="3" sm="4">
                                        <v-currency-field color="purple lighten-2" class="title"
                                            v-model="form.invTotal"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="invTotal"
                                            @blur="$v.form.invTotal.$touch()" 
                                            @input="$v.form.invTotal.$touch()"
                                            label="Inversión Total">
                                        </v-currency-field>
                                    </v-col>
                                </v-row>
                            </v-container>                          
                        </v-stepper-content>

                        <v-stepper-content step="2">
                            <v-container
                                class="mb-12"
                                >
                                <template>
                                    <v-expansion-panels>
                                        <v-expansion-panel>
                                            <v-expansion-panel-header>Referencia 1</v-expansion-panel-header>
                                            <v-expansion-panel-content>
                                                <v-row align="center" justify="space-between">
                                                    <v-col cols="4">
                                                        <v-text-field  color="purple lighten-2" class="title"
                                                            v-model="form.nom1"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-domain"
                                                            :error-messages="nom1"
                                                            @blur="$v.form.nom1.$touch()" 
                                                            @input="$v.form.nom1.$touch()"
                                                            label="Nombre de la Empresa">
                                                        </v-text-field>                        
                                                    </v-col>
                                                    <v-col cols="4">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account"
                                                            v-model="form.perContactar1" 
                                                            :error-messages="perContactar1"
                                                            @blur="$v.form.perContactar1.$touch()" 
                                                            @input="$v.form.perContactar1.$touch()"
                                                            label="Persona a Contratar">
                                                        </v-text-field>
                                                    </v-col>
                                                    <v-col cols="4" sm="4">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            v-model="form.ubicacion1"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-map-marker"
                                                            :error-messages="ubicacion1"
                                                            @blur="$v.form.ubicacion1.$touch()" 
                                                            @input="$v.form.ubicacion1.$touch()"
                                                            label="Ubicación">
                                                        </v-text-field>
                                                    </v-col>
                                                </v-row>

                                                <v-row align="center" justify="space-between">
                                                    <v-col cols="3">
                                                        <v-text-field  color="purple lighten-2" class="title"
                                                            v-model="form.tel1"
                                                            shaped
                                                            rounded
                                                            filled
                                                            v-mask="tel"
                                                            prepend-inner-icon="mdi-phone"
                                                            :error-messages="tel1"
                                                            @blur="$v.form.tel1.$touch()" 
                                                            @input="$v.form.tel1.$touch()"
                                                            label="Teléfono">
                                                        </v-text-field>                        
                                                    </v-col>
                                                    <v-col cols="3">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account-multiple"
                                                            v-model="form.relacion1" 
                                                            :error-messages="relacion1"
                                                            @blur="$v.form.relacion1.$touch()" 
                                                            @input="$v.form.relacion1.$touch()"
                                                            label="Relación">
                                                        </v-text-field>
                                                    </v-col>
                                                    <v-col cols="3">
                                                        <v-currency-field color="purple lighten-2" class="title"
                                                            v-model="form.limCredito1"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account-multiple"
                                                            :error-messages="limCredito1"
                                                            @blur="$v.form.limCredito1.$touch()" 
                                                            @input="$v.form.limCredito1.$touch()"
                                                            label="Límite de Crédito">
                                                        </v-currency-field>
                                                    </v-col>
                                                    <v-col cols="3">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account-multiple"
                                                            v-model="form.yrsRelacion1" 
                                                            :error-messages="yrsRelacion1"
                                                            @blur="$v.form.yrsRelacion1.$touch()" 
                                                            @input="$v.form.yrsRelacion1.$touch()"
                                                            label="Relación Comercial">
                                                        </v-text-field>
                                                    </v-col>
                                                </v-row>
                                            </v-expansion-panel-content>
                                        </v-expansion-panel>

                                        <v-expansion-panel>
                                            <v-expansion-panel-header>Referencia 2</v-expansion-panel-header>
                                            <v-expansion-panel-content>
                                                <v-row align="center" justify="space-between">
                                                    <v-col cols="4">
                                                        <v-text-field  color="purple lighten-2" class="title"
                                                            v-model="form.nom2"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-domain"
                                                            :error-messages="nom2"
                                                            @blur="$v.form.nom2.$touch()" 
                                                            @input="$v.form.nom2.$touch()"
                                                            label="Nombre de la Empresa">
                                                        </v-text-field>                        
                                                    </v-col>
                                                    <v-col cols="4">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account"
                                                            v-model="form.perContactar2" 
                                                            :error-messages="perContactar2"
                                                            @blur="$v.form.perContactar2.$touch()" 
                                                            @input="$v.form.perContactar2.$touch()"
                                                            label="Persona a Contratar">
                                                        </v-text-field>
                                                    </v-col>
                                                    <v-col cols="4" sm="4">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            v-model="form.ubicacion2"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-map-marker"
                                                            :error-messages="ubicacion2"
                                                            @blur="$v.form.ubicacion2.$touch()" 
                                                            @input="$v.form.ubicacion2.$touch()"
                                                            label="Ubicación">
                                                        </v-text-field>
                                                    </v-col>
                                                </v-row>

                                                <v-row align="center" justify="space-between">
                                                    <v-col cols="3">
                                                        <v-text-field  color="purple lighten-2" class="title"
                                                            v-model="form.tel2"
                                                            shaped
                                                            rounded
                                                            filled
                                                            v-mask="tel"
                                                            prepend-inner-icon="mdi-phone"
                                                            :error-messages="tel2"
                                                            @blur="$v.form.tel2.$touch()" 
                                                            @input="$v.form.tel2.$touch()"
                                                            label="Teléfono">
                                                        </v-text-field>                        
                                                    </v-col>
                                                    <v-col cols="3">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account-multiple"
                                                            v-model="form.relacion2" 
                                                            :error-messages="relacion2"
                                                            @blur="$v.form.relacion2.$touch()" 
                                                            @input="$v.form.relacion2.$touch()"
                                                            label="Relación">
                                                        </v-text-field>
                                                    </v-col>
                                                    <v-col cols="3">
                                                        <v-currency-field color="purple lighten-2" class="title"
                                                            v-model="form.limCredito2"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account-multiple"
                                                            :error-messages="limCredito2"
                                                            @blur="$v.form.limCredito2.$touch()" 
                                                            @input="$v.form.limCredito2.$touch()"
                                                            label="Límite de Crédito">
                                                        </v-currency-field>
                                                    </v-col>
                                                    <v-col cols="3">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account-multiple"
                                                            v-model="form.yrsRelacion2" 
                                                            :error-messages="yrsRelacion2"
                                                            @blur="$v.form.yrsRelacion2.$touch()" 
                                                            @input="$v.form.yrsRelacion2.$touch()"
                                                            label="Relación Comercial">
                                                        </v-text-field>
                                                    </v-col>
                                                </v-row>
                                            </v-expansion-panel-content>
                                        </v-expansion-panel>

                                        <v-expansion-panel>
                                            <v-expansion-panel-header>Referencia 3</v-expansion-panel-header>
                                            <v-expansion-panel-content>
                                                <v-row align="center" justify="space-between">
                                                    <v-col cols="4">
                                                        <v-text-field  color="purple lighten-2" class="title"
                                                            v-model="form.nom3"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-domain"
                                                            :error-messages="nom3"
                                                            @blur="$v.form.nom3.$touch()" 
                                                            @input="$v.form.nom3.$touch()"
                                                            label="Nombre de la Empresa">
                                                        </v-text-field>                        
                                                    </v-col>
                                                    <v-col cols="4">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account"
                                                            v-model="form.perContactar3" 
                                                            :error-messages="perContactar3"
                                                            @blur="$v.form.perContactar3.$touch()" 
                                                            @input="$v.form.perContactar3.$touch()"
                                                            label="Persona a Contratar">
                                                        </v-text-field>
                                                    </v-col>
                                                    <v-col cols="4" sm="4">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            v-model="form.ubicacion3"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-map-marker"
                                                            :error-messages="ubicacion3"
                                                            @blur="$v.form.ubicacion3.$touch()" 
                                                            @input="$v.form.ubicacion3.$touch()"
                                                            label="Ubicación">
                                                        </v-text-field>
                                                    </v-col>
                                                </v-row>

                                                <v-row align="center" justify="space-between">
                                                    <v-col cols="3">
                                                        <v-text-field  color="purple lighten-2" class="title"
                                                            v-model="form.tel3"
                                                            shaped
                                                            rounded
                                                            filled
                                                            v-mask="tel"
                                                            prepend-inner-icon="mdi-phone"
                                                            :error-messages="tel3"
                                                            @blur="$v.form.tel3.$touch()" 
                                                            @input="$v.form.tel3.$touch()"
                                                            label="Teléfono">
                                                        </v-text-field>                        
                                                    </v-col>
                                                    <v-col cols="3">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account-multiple"
                                                            v-model="form.relacion3" 
                                                            :error-messages="relacion3"
                                                            @blur="$v.form.relacion3.$touch()" 
                                                            @input="$v.form.relacion3.$touch()"
                                                            label="Relación">
                                                        </v-text-field>
                                                    </v-col>
                                                    <v-col cols="3">
                                                        <v-currency-field color="purple lighten-2" class="title"
                                                            v-model="form.limCredito3"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account-multiple"
                                                            :error-messages="limCredito3"
                                                            @blur="$v.form.limCredito3.$touch()" 
                                                            @input="$v.form.limCredito3.$touch()"
                                                            label="Límite de Crédito">
                                                        </v-currency-field>
                                                    </v-col>
                                                    <v-col cols="3">
                                                        <v-text-field color="purple lighten-2" class="title"
                                                            shaped
                                                            rounded
                                                            filled
                                                            prepend-inner-icon="mdi-account-multiple"
                                                            v-model="form.yrsRelacion3" 
                                                            :error-messages="yrsRelacion3"
                                                            @blur="$v.form.yrsRelacion3.$touch()" 
                                                            @input="$v.form.yrsRelacion3.$touch()"
                                                            label="Relación Comercial">
                                                        </v-text-field>
                                                    </v-col>
                                                </v-row>
                                            </v-expansion-panel-content>
                                        </v-expansion-panel>                                        
                                    
                                    </v-expansion-panels>

                                </template>

                            </v-container>    
                        </v-stepper-content>

                        <v-stepper-content step="3">
                            <v-container
                                class="mb-12"
                                >
                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.diasLaborales"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-calendar-clock"
                                            :error-messages="diasLaborales"
                                            @blur="$v.form.diasLaborales.$touch()" 
                                            @input="$v.form.diasLaborales.$touch()"
                                            label="Dias Laborales">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.atiende"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account"
                                            :error-messages="atiende"
                                            @blur="$v.form.atiende.$touch()" 
                                            @input="$v.form.atiende.$touch()"
                                            label="Atiende">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="2">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.abren"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="time"
                                            prepend-inner-icon="mdi-clock-outline"
                                            :error-messages="abren"
                                            @blur="$v.form.abren.$touch()" 
                                            @input="$v.form.abren.$touch()"
                                            label="Abren">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="2">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.cierran"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="time"
                                            prepend-inner-icon="mdi-clock-outline"
                                            :error-messages="cierran"
                                            @blur="$v.form.cierran.$touch()" 
                                            @input="$v.form.cierran.$touch()"
                                            label="Cierran">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row>    
                                <v-row align="center" justify="space-between">    
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.frente"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="frente"
                                            @blur="$v.form.frente.$touch()" 
                                            @input="$v.form.frente.$touch()"
                                            label="Empresa ubicada Frente">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.lado"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="lado"
                                            @blur="$v.form.lado.$touch()" 
                                            @input="$v.form.lado.$touch()"
                                            label="A un lado o Entre">
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
                                            label="El Negocio se encuentra en">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row> 
                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.color"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-palette"
                                            :error-messages="color"
                                            @blur="$v.form.color.$touch()" 
                                            @input="$v.form.color.$touch()"
                                            label="Color de la Fachada">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.señalamiento"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-sign-text"
                                            :error-messages="señalamiento"
                                            @blur="$v.form.señalamiento.$touch()" 
                                            @input="$v.form.señalamiento.$touch()"
                                            label="Señalamientos">
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
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.nomCredito1"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="nomCredito1"
                                            @blur="$v.form.nomCredito1.$touch()" 
                                            @input="$v.form.nomCredito1.$touch()"
                                            label="Nombre del Crédito">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-currency-field color="purple lighten-2" class="title"
                                            v-model="form.montoCredito1"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="montoCredito1"
                                            @blur="$v.form.montoCredito1.$touch()" 
                                            @input="$v.form.montoCredito1.$touch()"
                                            label="Monto">
                                        </v-currency-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-currency-field color="purple lighten-2" class="title"
                                            v-model="form.saldoActual1"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="saldoActual1"
                                            @blur="$v.form.saldoActual1.$touch()" 
                                            @input="$v.form.saldoActual1.$touch()"
                                            label="Saldo Actual"
                                            >
                                        </v-currency-field>                        
                                    </v-col>
                                </v-row> 

                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-currency-field color="purple lighten-2" class="title"
                                            v-model="form.pago1"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="pago1"
                                            @blur="$v.form.pago1.$touch()" 
                                            @input="$v.form.pago1.$touch()"
                                            label="Pago">
                                        </v-currency-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-currency-field color="purple lighten-2" class="title"
                                            v-model="form.mensual1"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="mensual1"
                                            @blur="$v.form.mensual1.$touch()" 
                                            @input="$v.form.mensual1.$touch()"
                                            label="Mensual">
                                        </v-currency-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.yr1"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="yr"
                                            prepend-inner-icon="mdi-calendar"
                                            :error-messages="yr1"
                                            @blur="$v.form.yr1.$touch()" 
                                            @input="$v.form.yr1.$touch()"
                                            label="Año">
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
                                    <v-col cols="6">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.nomAval"
                                            shaped
                                            rounded
                                            filled 
                                            prepend-inner-icon="mdi-account"
                                            :error-messages="nomAval"
                                            @blur="$v.form.nomAval.$touch()" 
                                            @input="$v.form.nomAval.$touch()"
                                            label="Nombre del Aval">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="3">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.estCivilAval"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account-supervisor"
                                            :error-messages="estCivilAval"
                                            @blur="$v.form.estCivilAval.$touch()" 
                                            @input="$v.form.estCivilAval.$touch()"
                                            label="Estado Civil"
                                            :items="['Soltero(a)', 'Casado(a)', 'Divorciado(a)', 'Viudo(a)', 'Union Libre']">
                                        </v-select>                        
                                    </v-col>
                                    <v-col cols="3">
                                        <v-select color="purple lighten-2" class="title"
                                            v-model="form.avalAnterior"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account-cash"
                                            :error-messages="avalAnterior"
                                            @blur="$v.form.avalAnterior.$touch()" 
                                            @input="$v.form.avalAnterior.$touch()"
                                            label="¿Ha sido Aval en FP?"
                                            :items="['Si', 'No']">
                                        </v-select>                        
                                    </v-col>
                                </v-row> 

                                <v-row align="center" justify="space-between">
                                    <v-col cols="2">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.cpAval"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="cp"
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="cpAval"
                                            @blur="$v.form.cpAval.$touch()" 
                                            @input="$v.form.cpAval.$touch()"
                                            label="Cod. Postal">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="2">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.munAval"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="munAval"
                                            @blur="$v.form.munAval.$touch()" 
                                            @input="$v.form.munAval.$touch()"
                                            label="Municipio">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="5">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.domAval"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="domAval"
                                            @blur="$v.form.domAval.$touch()" 
                                            @input="$v.form.domAval.$touch()"
                                            label="Domicilio">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="3">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.telAval"
                                            shaped
                                            rounded
                                            v-mask="tel"
                                            filled
                                            prepend-inner-icon="mdi-phone"
                                            :error-messages="telAval"
                                            @blur="$v.form.telAval.$touch()" 
                                            @input="$v.form.telAval.$touch()"
                                            label="Teléfono">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row>  

                                <v-row align="center" justify="space-between">
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.parentesco"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-account-supervisor"
                                            :error-messages="parentesco"
                                            @blur="$v.form.parentesco.$touch()" 
                                            @input="$v.form.parentesco.$touch()"
                                            label="¿Que parentesco tiene con el solicitante?">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-currency-field color="purple lighten-2" class="title"
                                            v-model="form.valPatrimonio"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-currency-usd"
                                            :error-messages="valPatrimonio"
                                            @blur="$v.form.valPatrimonio.$touch()" 
                                            @input="$v.form.valPatrimonio.$touch()"
                                            label="Valor Patrimonial">
                                        </v-currency-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.consPropiedad"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-file"
                                            :error-messages="consPropiedad"
                                            @blur="$v.form.consPropiedad.$touch()" 
                                            @input="$v.form.consPropiedad.$touch()"
                                            label="Constancia de Propiedad"
                                            hint="Escritura de terrenos, casas, etc">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row>                           

                                <v-row align="center" justify="space-between">
                                    <v-col cols="2">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.numRegistro"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-counter"
                                            :error-messages="numRegistro"
                                            @blur="$v.form.numRegistro.$touch()" 
                                            @input="$v.form.numRegistro.$touch()"
                                            label="No. Registro">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="2">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.folio"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-counter"
                                            :error-messages="folio"
                                            @blur="$v.form.folio.$touch()" 
                                            @input="$v.form.folio.$touch()"
                                            label="Folio">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="2">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.vol"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-counter"
                                            :error-messages="vol"
                                            @blur="$v.form.vol.$touch()" 
                                            @input="$v.form.vol.$touch()"
                                            label="Volumen">
                                        </v-text-field>                        
                                    </v-col> 
                                    <v-col cols="2">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.secc"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-counter"
                                            :error-messages="secc"
                                            @blur="$v.form.secc.$touch()" 
                                            @input="$v.form.secc.$touch()"
                                            label="Sección">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="2">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.fecInscripcion"
                                            shaped
                                            rounded
                                            filled
                                            v-mask="fecha"
                                            prepend-inner-icon="mdi-calendar"
                                            :error-messages="fecInscripcion"
                                            @blur="$v.form.fecInscripcion.$touch()" 
                                            @input="$v.form.fecInscripcion.$touch()"
                                            label="Fecha de Inscripción">
                                        </v-text-field>                        
                                    </v-col>
                                </v-row> 

                                <v-row align="center" justify="space-between">
                                     <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.cpPropiedad"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="cpPropiedad"
                                            @blur="$v.form.cpPropiedad.$touch()" 
                                            @input="$v.form.cpPropiedad.$touch()"
                                            label="CP. Propiedad">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.munPropiedad"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="munPropiedad"
                                            @blur="$v.form.munPropiedad.$touch()" 
                                            @input="$v.form.munPropiedad.$touch()"
                                            label="Municipio Propiedad">
                                        </v-text-field>                        
                                    </v-col>
                                    <v-col cols="4">
                                        <v-text-field color="purple lighten-2" class="title"
                                            v-model="form.domPropiedad"
                                            shaped
                                            rounded
                                            filled
                                            prepend-inner-icon="mdi-map-marker"
                                            :error-messages="domPropiedad"
                                            @blur="$v.form.domPropiedad.$touch()" 
                                            @input="$v.form.domPropiedad.$touch()"
                                            label="Domicilio Propiedad">
                                        </v-text-field>                        
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

// ^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$
const soloLetras = helpers.regex('alpha', /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/);


  export default {
    mixins: [validationMixin],

    //RULES
    validations: {
        form:{  
         //ESTRUCTURA    
            id: { required },
            recPropios: { required },
            recFondoPlata: { required },
            invTotal: { required },

         //REFERENCIAS
            nom1: { required },
            perContactar1: { required, soloLetras },
            ubicacion1: { required },
            tel1: { required },
            relacion1: { required },
            limCredito1: { required },
            yrsRelacion1: { required },
            nom2: { required },
            perContactar2: { required, soloLetras},
            ubicacion2: { required },
            tel2: { required },
            relacion2: { required },
            limCredito2: { required },
            yrsRelacion2: { required },
            nom3: { required },
            perContactar3: { required, soloLetras },
            ubicacion3: { required },
            tel3: { required },
            relacion3: { required },
            limCredito3: { required },
            yrsRelacion3: { required },

        //NEGOCIO
            diasLaborales: { required },
            atiende: { required },
            horario: { required },
            abren: { required },
            cierran: { required },
            frente: { required },
            lado: { required },
            ubicacion: { required },
            color: { required },
            señalamiento: { required },

        //CREDITOSANTERIORES
            nomCredito1: { required },
            montoCredito1: { required },
            saldoActual1: { required },
            pago1: { required },
            mensual1: { required },
            yr1: { required },

        //MANIFESTACION AVAL
            nomAval: { required },
            estCivilAval: { required },
            avalAnterior: { required },
            domAval: { required },
            munAval: { required },
            cpAval: { required },
            telAval: { required },
            parentesco: { required },
            valPatrimonio: { required },
            consPropiedad: { required },
            numRegistro: { required },
            folio: { required },
            vol: { required },
            secc: { required },
            fecInscripcion: { required },
            domPropiedad: { required },
            munPropiedad: { required },
            cpPropiedad: { required },
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
        err1: true,
        err2: true,
        err3: true,
        err4: true,
        err5: true,
        err6: true,

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
            recPropios: '',
            recFondoPlata: '',
            invTotal: '',

        //REFERENCIAS
            nom1: '',
            perContactar1: '',
            ubicacion1: '',
            tel1: '',
            relacion1: '',
            limCredito1: '',
            yrsRelacion1: '',
            nom2: '',
            perContactar2: '',
            ubicacion2: '',
            tel2: '',
            relacion2: '',
            limCredito2: '',
            yrsRelacion2: '',
            nom3: '',
            perContactar3: '',
            ubicacion3: '',
            tel3: '',
            relacion3: '',
            limCredito3: '',
            yrsRelacion3: '',

        //NEGOCIO
            diasLaborales: '',
            atiende: '',
            horario: '',
            abren: '',
            cierran: '',
            frente: '',
            lado: '',
            ubicacion: '',
            color: '',
            señalamiento: '',

        //CREDITOSANTERIORES
            nomCredito1: '',
            montoCredito1: '',
            saldoActual1: '',
            pago1: '',
            mensual1: '',
            yr1: '',

        //MANIFESTACION AVAL
            nomAval: '',
            estCivilAval: '',
            avalAnterior: '',
            domAval: '',
            munAval: '',
            cpAval: '',
            telAval: '',
            parentesco: '',
            valPatrimonio: '',
            consPropiedad: '',
            numRegistro: '',
            folio: '',
            vol: '',
            secc: '',
            fecInscripcion: '',
            domPropiedad: '',
            munPropiedad: '',
            cpPropiedad: '',
        }),
    }),
    
    computed: {
     
        //STEP 1

        recPropios () {
            const errors = []
            if (!this.$v.form.recPropios.$dirty) return errors
            !this.$v.form.recPropios.required && errors.push('Este campo es obligatorio')
            return errors
        },

        recFondoPlata () {
            const errors = []
            if (!this.$v.form.recFondoPlata.$dirty) return errors
            !this.$v.form.recFondoPlata.required && errors.push('Este campo es obligatorio')
            return errors
        },

        invTotal () {
            const errors = []
            if (!this.$v.form.invTotal.$dirty) return errors
            !this.$v.form.invTotal.required && errors.push('Este campo es obligatorio')
            return errors
            this.err1=false
        },
        
        //PASO 2

        nom1 () {
            const errors = []
            if (!this.$v.form.nom1.$dirty) return errors
            !this.$v.form.nom1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err1=false
        },
        
        perContactar1 () {
            const errors = []
            if (!this.$v.form.perContactar1.$dirty) return errors
            !this.$v.form.perContactar1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err1=false
        },
        
        ubicacion1 () {
            const errors = []
            if (!this.$v.form.ubicacion1.$dirty) return errors
            !this.$v.form.ubicacion1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err1=false
        },

        tel1() {
            const errors = []
            if (!this.$v.form.tel1.$dirty) return errors
            !this.$v.form.tel1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err1=false
        },

        relacion1() {
            const errors = []
            if (!this.$v.form.relacion1.$dirty) return errors
            !this.$v.form.relacion1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err1=false
        },
        
        limCredito1() {
            const errors = []
            if (!this.$v.form.limCredito1.$dirty) return errors
            !this.$v.form.limCredito1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        
        yrsRelacion1() {
            const errors = []
            if (!this.$v.form.yrsRelacion1.$dirty) return errors
            !this.$v.form.yrsRelacion1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        nom2() {
            const errors = []
            if (!this.$v.form.nom2.$dirty) return errors
            !this.$v.form.nom2.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        perContactar2() {
            const errors = []
            if (!this.$v.form.perContactar2.$dirty) return errors
            !this.$v.form.perContactar2.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        ubicacion2() {
            const errors = []
            if (!this.$v.form.ubicacion2.$dirty) return errors
            !this.$v.form.ubicacion2.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        tel2() {
            const errors = []
            if (!this.$v.form.tel2.$dirty) return errors
            !this.$v.form.tel2.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },
        relacion2() {
            const errors = []
            if (!this.$v.form.relacion2.$dirty) return errors
            !this.$v.form.relacion2.required && errors.push('Este campo es obligatorio')
            return errors
            this.err2=false
        },

        limCredito2() {
            const errors = []
            if (!this.$v.form.limCredito2.$dirty) return errors
            !this.$v.form.limCredito2.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },
        yrsRelacion2() {
            const errors = []
            if (!this.$v.form.yrsRelacion2.$dirty) return errors
            !this.$v.form.yrsRelacion2.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },
        nom3() {
            const errors = []
            if (!this.$v.form.nom3.$dirty) return errors
            !this.$v.form.nom3.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },
        perContactar3() {
            const errors = []
            if (!this.$v.form.perContactar3.$dirty) return errors
            !this.$v.form.perContactar3.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },
        ubicacion3() {
            const errors = []
            if (!this.$v.form.ubicacion3.$dirty) return errors
            !this.$v.form.ubicacion3.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },
        tel3() {
            const errors = []
            if (!this.$v.form.tel3.$dirty) return errors
            !this.$v.form.tel3.required && errors.push('Este campo es obligatorio')
            return errors
            this.err3=false
        },

        relacion3() {
            const errors = []
            if (!this.$v.form.relacion3.$dirty) return errors
            !this.$v.form.relacion3.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        limCredito3() {
            const errors = []
            if (!this.$v.form.limCredito3.$dirty) return errors
            !this.$v.form.limCredito3.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        yrsRelacion3() {
            const errors = []
            if (!this.$v.form.yrsRelacion3.$dirty) return errors
            !this.$v.form.yrsRelacion3.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },

        //PASO 3
        diasLaborales() {
            const errors = []
            if (!this.$v.form.diasLaborales.$dirty) return errors
            !this.$v.form.diasLaborales.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        atiende() {
            const errors = []
            if (!this.$v.form.atiende.$dirty) return errors
            !this.$v.form.atiende.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },

        abren() {
            const errors = []
            if (!this.$v.form.abren.$dirty) return errors
            !this.$v.form.abren.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },

        cierran() {
            const errors = []
            if (!this.$v.form.cierran.$dirty) return errors
            !this.$v.form.cierran.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        frente() {
            const errors = []
            if (!this.$v.form.frente.$dirty) return errors
            !this.$v.form.frente.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },
        lado() {
            const errors = []
            if (!this.$v.form.lado.$dirty) return errors
            !this.$v.form.lado.required && errors.push('Este campo es obligatorio')
            return errors
            this.err4=false
        },

        ubicacion() {
            const errors = []
            if (!this.$v.form.ubicacion.$dirty) return errors
            !this.$v.form.ubicacion.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        color() {
            const errors = []
            if (!this.$v.form.color.$dirty) return errors
            !this.$v.form.color.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        señalamiento() {
            const errors = []
            if (!this.$v.form.señalamiento.$dirty) return errors
            !this.$v.form.señalamiento.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },

        //PASO 4
        nomCredito1() {
            const errors = []
            if (!this.$v.form.nomCredito1.$dirty) return errors
            !this.$v.form.nomCredito1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        montoCredito1() {
            const errors = []
            if (!this.$v.form.montoCredito1.$dirty) return errors
            !this.$v.form.montoCredito1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        saldoActual1() {
            const errors = []
            if (!this.$v.form.saldoActual1.$dirty) return errors
            !this.$v.form.saldoActual1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        pago1() {
            const errors = []
            if (!this.$v.form.pago1.$dirty) return errors
            !this.$v.form.pago1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        mensual1() {
            const errors = []
            if (!this.$v.form.mensual1.$dirty) return errors
            !this.$v.form.mensual1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        yr1() {
            const errors = []
            if (!this.$v.form.yr1.$dirty) return errors
            !this.$v.form.yr1.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },

        //PASO 5
        nomAval() {
            const errors = []
            if (!this.$v.form.nomAval.$dirty) return errors
            !this.$v.form.nomAval.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        estCivilAval() {
            const errors = []
            if (!this.$v.form.estCivilAval.$dirty) return errors
            !this.$v.form.estCivilAval.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        avalAnterior() {
            const errors = []
            if (!this.$v.form.avalAnterior.$dirty) return errors
            !this.$v.form.avalAnterior.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },
        domAval() {
            const errors = []
            if (!this.$v.form.domAval.$dirty) return errors
            !this.$v.form.domAval.required && errors.push('Este campo es obligatorio')
            return errors
            this.err5=false
        },

        
        munAval() {
            const errors = []
            if (!this.$v.form.munAval.$dirty) return errors
            !this.$v.form.munAval.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        cpAval() {
            const errors = []
            if (!this.$v.form.cpAval.$dirty) return errors
            !this.$v.form.cpAval.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        telAval() {
            const errors = []
            if (!this.$v.form.telAval.$dirty) return errors
            !this.$v.form.telAval.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        parentesco() {
            const errors = []
            if (!this.$v.form.parentesco.$dirty) return errors
            !this.$v.form.parentesco.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },

        valPatrimonio() {
            const errors = []
            if (!this.$v.form.valPatrimonio.$dirty) return errors
            !this.$v.form.valPatrimonio.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        consPropiedad() {
            const errors = []
            if (!this.$v.form.consPropiedad.$dirty) return errors
            !this.$v.form.consPropiedad.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        numRegistro() {
            const errors = []
            if (!this.$v.form.numRegistro.$dirty) return errors
            !this.$v.form.numRegistro.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },


        folio() {
            const errors = []
            if (!this.$v.form.folio.$dirty) return errors
            !this.$v.form.folio.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        vol() {
            const errors = []
            if (!this.$v.form.vol.$dirty) return errors
            !this.$v.form.vol.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        secc() {
            const errors = []
            if (!this.$v.form.secc.$dirty) return errors
            !this.$v.form.secc.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },

        fecInscripcion() {
            const errors = []
            if (!this.$v.form.fecInscripcion.$dirty) return errors
            !this.$v.form.fecInscripcion.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        domPropiedad() {
            const errors = []
            if (!this.$v.form.domPropiedad.$dirty) return errors
            !this.$v.form.domPropiedad.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        munPropiedad() {
            const errors = []
            if (!this.$v.form.munPropiedad.$dirty) return errors
            !this.$v.form.munPropiedad.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        cpPropiedad() {
            const errors = []
            if (!this.$v.form.cpPropiedad.$dirty) return errors
            !this.$v.form.cpPropiedad.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },

        //PASO 5
        historia() {
            const errors = []
            if (!this.$v.form.historia.$dirty) return errors
            !this.$v.form.historia.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        actMuj() {
            const errors = []
            if (!this.$v.form.actMuj.$dirty) return errors
            !this.$v.form.actMuj.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        actHom() {
            const errors = []
            if (!this.$v.form.actHom.$dirty) return errors
            !this.$v.form.actHom.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        actNomMensual() {
            const errors = []
            if (!this.$v.form.actNomMensual.$dirty) return errors
            !this.$v.form.actNomMensual.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        genMuj() {
            const errors = []
            if (!this.$v.form.genMuj.$dirty) return errors
            !this.$v.form.genMuj.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        genHom() {
            const errors = []
            if (!this.$v.form.genHom.$dirty) return errors
            !this.$v.form.genHom.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        ascNomMensual() {
            const errors = []
            if (!this.$v.form.ascNomMensual.$dirty) return errors
            !this.$v.form.ascNomMensual.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        incVentas() {
            const errors = []
            if (!this.$v.form.incVentas.$dirty) return errors
            !this.$v.form.incVentas.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
        },
        porque() {
            const errors = []
            if (!this.$v.form.porque.$dirty) return errors
            !this.$v.form.porque.required && errors.push('Este campo es obligatorio')
            return errors
            this.err6=false
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
        this.form.horario = this.form.abren +' - '+this.form.cierran
        this.form.post('/api/estructura')
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
        if(this.el == 5)
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