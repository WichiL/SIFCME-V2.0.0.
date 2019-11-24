<template>	
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">
					<i class="fas fa-edit"></i>
					Información De Ingresos - Egresos'
					</h3>
				</div>
				<div class="card-body table-responsive p-0 mt-5">
					<div>
						<form-wizard @submit.prevent="createGenerales()"  
							shape="circle"
							title=""
							subtitle=""
							color="#9b59b6"
							error-color="#e74c3c"
							transition="bounce">

							<tab-content title="1ra Parte" icon="fas fa-hand-paper">
								<div class="form-group row justify-content-end">
									<label class="col-sm-2 col-form-label">Fecha</label>
									<div class="col-sm-4">
										<VueCtkDateTimePicker
											v-model = "form.fecCierre" 
											id="fecCierre"
											name="fecCierre"
											formatted = "LL"
											:autoClose = true
											:only-date = true
											:noButtonNow = true
											:noKeyboard = true
											:noLabel = true
											:right = true>
											<input placeholder="Seleccione una fecha" type="text" readonly="readonly" class="form-control" :class="{ 'is-invalid': form.errors.has('fecCierre') }" />
										</VueCtkDateTimePicker>
										<has-error :form="form" field="fecCierre"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<label class="col-sm-6 col-form-label">1.- Efectivo que tiene en caja</label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.efeCaja"
											id="efeCaja" name="efeCaja" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('efeCaja') }" 
			 								placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="efeCaja"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<label class="col-sm-6 col-form-label">2.- Saldo en bancos (Solo cuentas a su nombre)</label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.salBancos"
											id="salBancos" name="salBancos" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('salBancos') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="salBancos"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<label class="col-sm-6 col-form-label">3.- Cuentas que tiene por cobrar</label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.cueCobrar"
											id="cueCobrar" name="cueCobrar" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('cueCobrar') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="cueCobrar"></has-error>
									</div>
								</div>
								<div class="form-group row justify-content-around">
									<label class="col-sm-6 col-form-label">4.- Valor de sus inventarios actuales</label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.valInventarios"
											id="valInventarios" name="valInventarios" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('valInventarios') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="valInventarios"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-end">
									<label class="col-sm-2 col-form-label"><b><h4>TOTAL</h4></b></label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.totEfectivo"
											id="totEfectivo" name="totEfectivo" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('totEfectivo') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)" disabled>
										</vue-numeric>
										<has-error :form="form" field="totEfectivo"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<label class="col-sm-6 col-form-label">5.- Inmuebles relacionados con el negocio a nombre del solicitante</label>
									<div class="col-sm-4"></div>
								</div>					

								<div class="form-group row justify-content-around">
									<div class="col-sm-6">
										<input v-model="form.inmSolicitante1" id="inmSolicitante1" name="inmSolicitante1" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('inmSolicitante1') }" 
										placeholder="Casas, edificios, terrenos que esten a nombre del solicitante">
									</div>
									<has-error :form="form" field="inmSolicitante1"></has-error>

									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.valInmueble1"
											id="valInmueble1" name="valInmueble1" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('valInmueble1') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="valInmueble1"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<div class="col-sm-6">
										<input v-model="form.inmSolicitante2" id="inmSolicitante2" name="inmSolicitante2" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('inmSolicitante2') }" 
										placeholder="Casas, edificios, terrenos que esten a nombre del solicitante">
									</div>
									<has-error :form="form" field="inmSolicitante2"></has-error>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.valInmueble2"
											id="valInmueble2" name="valInmueble2" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('valInmueble2') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="valInmueble2"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-end">
									<label class="col-sm-2 col-form-label"><b><h4>TOTAL</h4></b></label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.totInmuebles"
											id="totInmuebles" name="totInmuebles" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('totInmuebles') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)" disabled>
										</vue-numeric>
										<has-error :form="form" field="totInmuebles"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<label class="col-sm-6 col-form-label">6.- Maquinaria y/o equipo con que cuenta su negocio</label>
									<div class="col-sm-4"></div>
								</div>					

								<div class="form-group row justify-content-around">
									<div class="col-sm-6">
										<input v-model="form.maqSolicitante1" id="maqSolicitante1" name="maqSolicitante1" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('maqSolicitante1') }" 
										placeholder="Compresores, molinos, basculas, máquinas, herramientas, etc">
									</div>
									<has-error :form="form" field="maqSolicitante1"></has-error>

									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.valMaquina1"
											id="valMaquina1" name="valMaquina1" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('valMaquina1') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="valMaquina1"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<div class="col-sm-6">
										<input v-model="form.maqSolicitante2" id="maqSolicitante2" name="maqSolicitante2" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('maqSolicitante2') }" 
										placeholder="Compresores, molinos, basculas, máquinas, herramientas, etc">
									</div>
									<has-error :form="form" field="maqSolicitante2"></has-error>

									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.valMaquina2"
											id="valMaquina2" name="valMaquina2" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('valMaquina2') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="valMaquina2"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<div class="col-sm-6">
										<input v-model="form.maqSolicitante3" id="maqSolicitante3" name="maqSolicitante3" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('maqSolicitante3') }" 
										placeholder="Compresores, molinos, basculas, máquinas, herramientas, etc">
									</div>
									<has-error :form="form" field="maqSolicitante3"></has-error>

									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.valMaquina3"
											id="valMaquina3" name="valMaquina3" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('valMaquina3') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="valMaquina3"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<div class="col-sm-6">
										<input v-model="form.maqSolicitante4" id="maqSolicitante4" name="maqSolicitante4" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('maqSolicitante4') }" 
										placeholder="Compresores, molinos, basculas, máquinas, herramientas, etc">
									</div>
									<has-error :form="form" field="maqSolicitante4"></has-error>

									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.valMaquina4"
											id="valMaquina4" name="valMaquina4" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('valMaquina4') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="valMaquina4"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<div class="col-sm-6">
										<input v-model="form.maqSolicitante5" id="maqSolicitante5" name="maqSolicitante5" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('maqSolicitante5') }" 
										placeholder="Compresores, molinos, basculas, máquinas, herramientas, etc">
									</div>
									<has-error :form="form" field="maqSolicitante5"></has-error>

									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.valMaquina5"
											id="valMaquina5" name="valMaquina5" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('valMaquina5') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="valMaquina5"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<div class="col-sm-6">
										<input v-model="form.maqSolicitante6" id="maqSolicitante6" name="maqSolicitante6" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('maqSolicitante6') }" 
										placeholder="Compresores, molinos, basculas, máquinas, herramientas, etc">
									</div>
									<has-error :form="form" field="maqSolicitante6"></has-error>

									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.valMaquina6"
											id="valMaquina6" name="valMaquina6" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('valMaquina6') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="valMaquina6"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-end">
									<label class="col-sm-2 col-form-label"><b><h4>TOTAL</h4></b></label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.totMaquinaria"
											id="totMaquinaria" name="totMaquinaria" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('totMaquinaria') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)" disabled>
										</vue-numeric>
										<has-error :form="form" field="totMaquinaria"></has-error>
									</div>
								</div>							
							</tab-content>



							<tab-content title="2da Parte" icon="fas fa-hand-paper">
								<div class="form-group row justify-content-around">
									<label class="col-sm-6 col-form-label">7.- Equipos de transporte del negocio</label>
									<div class="col-sm-4"></div>
								</div>					

								<div class="form-group row justify-content-around">
									<div class="col-sm-6">
										<input v-model="form.carSolicitante1" id="carSolicitante1" name="carSolicitante1" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('carSolicitante1') }" 
										placeholder="Compresores, molinos, basculas, máquinas, herramientas, etc">
									</div>
									<has-error :form="form" field="carSolicitante1"></has-error>

									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.valCarro1"
											id="valCarro1" name="valCarro1" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('valCarro1') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="valCarro1"></has-error>
									</div>
								</div>

								<div class="form-group row justify-content-around">
									<div class="col-sm-6">
										<input v-model="form.carSolicitante2" id="carSolicitante2" name="carSolicitante2" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('carSolicitante2') }" 
										placeholder="Compresores, molinos, basculas, máquinas, herramientas, etc">
									</div>
									<has-error :form="form" field="carSolicitante2"></has-error>

									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.valCarro2"
											id="valCarro2" name="valCarro2" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('valCarro2') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="valCarro2"></has-error>
									</div>
								</div>
								<div class="form-group row justify-content-end">
									<label class="col-sm-2 col-form-label"><b><h4>TOTAL</h4></b></label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.totCarros"
											id="totCarros" name="totCarros" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('totCarros') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)" disabled>
										</vue-numeric>
										<has-error :form="form" field="totCarros"></has-error>
									</div>
								</div>	

								<div class="form-group row justify-content-around">
									<label class="col-sm-6 col-form-label">8.- Gastos de instalación</label>
									<div class="col-sm-4"></div>
								</div>	

								<div class="form-group row justify-content-end">
									<label class="col-sm-2 col-form-label"><b><h4>TOTAL</h4></b></label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.totInstalacion"
											id="totInstalacion" name="totInstalacion" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('totInstalacion') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)" disabled>
										</vue-numeric>
										<has-error :form="form" field="totInstalacion"></has-error>
									</div>
								</div>	

								<div class="form-group row justify-content-end">
									<label class="col-sm-2 col-form-label"><b><h4>TOTAL FIJO</h4></b></label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.totFijo"
											id="totFijo" name="totFijo" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('totFijo') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)" disabled>
										</vue-numeric>
										<has-error :form="form" field="totFijo"></has-error>
									</div>
								</div>	

								<div class="form-group row justify-content-end">
									<label class="col-sm-2 col-form-label"><b><h4>ACTIVO TOTAL</h4></b></label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.actTotal"
											id="actTotal" name="actTotal" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('actTotal') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)" disabled>
										</vue-numeric>
										<has-error :form="form" field="actTotal"></has-error>
									</div>
								</div>					

								<div class="form-group row justify-content-end">
									<label class="col-sm-2 col-form-label"><b><h4>PASIVO TOTAL</h4></b></label>
									<div class="col-sm-4">
										<vue-numeric currency="$" separator="," v-model="form.actTotal"
											id="actTotal" name="actTotal" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('actTotal') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)" disabled>
										</vue-numeric>
										<has-error :form="form" field="actTotal"></has-error>
									</div>
								</div>		

							</tab-content>	
							
							<template slot="footer" slot-scope="props">
								<div class="wizard-footer-left">
									<wizard-button v-if="props.activeTabIndex > 0 && !props.isLastStep" 
										@click.native="props.prevTab()" 
										:style="props.fillButtonStyle">Anterior
									</wizard-button>
								</div>
								<div class="wizard-footer-right">
									<wizard-button v-if="!props.isLastStep" 
										@click.native="props.nextTab()" class="wizard-footer-right" 
										:style="props.fillButtonStyle">Siguiente
									</wizard-button>

									<wizard-button v-else @click.native="createGenerales" 
										class="wizard-footer-right finish-button" 
										:style="props.fillButtonStyle">{{props.isLastStep ? 'Guardar' : 'Siguiente'}}
									</wizard-button>
								</div>
							</template>
						</form-wizard>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
        data() {
            return {
                generales: [],
                form: new Form({
					
				}),
			}
		},

		methods: {
			//CREAR REGISTROS
            createGenerales(){
                this.$Progress.start();
                this.form.post('patrimonios')
                    .then(()=>{
                        Fire.$emit('AfterCreate');
                        toast.fire({
                          type: 'success',
                          title: 'Datos Guardados!'
                        })
						this.$Progress.finish();
						this.editmode = true;
                    })
                    .catch(()=>{
						this.$Progress.fail();
						toast.fire({
							type: 'error',
							title: 'Corrija los campos!!'
						})
                    })              
			},

			onComplete: function() {
				this.$Progress.start();
					toast.fire({
						type: 'success',
						title: 'Listo!'
					})
			},
			isLastStep() {
				if (this.$refs.wizard) {
					return this.$refs.wizard.isLastStep
				}
				return false
			},
		},

        //ACCIONES A REALIZAR DESPUES DE AGREGAR REGISTROS
        created() {           
            Fire.$on('AfterCreate', () => {
				this.$router.push({path: 'nuevo-credito/12'});
            })
        }
	}  	
</script>