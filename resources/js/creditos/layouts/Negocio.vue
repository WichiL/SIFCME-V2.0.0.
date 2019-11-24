<template>	
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">
					<i class="fas fa-edit"></i>
					Descripción Del Negocio
					</h3>
				</div>
				<div class="card-body table-responsive p-0 mt-5">
					<div>
						<form-wizard @submit.prevent="createGenerales()"  
							:rules="form.rules"
							ref="ruleForm"
							shape="circle"
							title=""
							subtitle=""
							color="#9b59b6"
							error-color="#e74c3c"
							transition="bounce">

							<tab-content title="Información Cualitativa" icon="fas fa-stamp">
								<div class="row">                       	
									<div class="form-group col-md-12">
										<label>Historia ¿Desde cuándo y qué es lo que hacemos o haremos en el negocio?</label>	
										<textarea v-model="form.historia" rows="3" id="historia" name="historia" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('historia') }" 
										placeholder="Describa brevemente..."></textarea>
										<has-error :form="form" field="historia"></has-error>
									</div>										
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label>Empleos actuales inscritos en el IMSS</label>
										<div class="row">
											<div class="form-group col-md-6">
												<label>Mujer(es)</label>
												<input v-model="form.actMuj" id="actMuj" name="actMuj" type="text" 
												class="form-control" :class="{ 'is-invalid': form.errors.has('actMuj') }" 
												placeholder="0">
												<has-error :form="form" field="actMuj"></has-error>
											</div>
											<div class="form-group col-md-6">
												<label>Hombre(es)</label>
												<input v-model="form.actHom" id="actHom" name="actHom" type="text" 
												class="form-control" :class="{ 'is-invalid': form.errors.has('actHom') }" 
												placeholder="0">
												<has-error :form="form" field="actHom"></has-error>
											</div>
										</div>
									</div>	
									<div class="form-group col-md-6">
										<label>Empleos a generar e inscribira en el IMSS</label>
										<div class="row">
											<div class="form-group col-md-6">
												<label>Mujer(es)</label>
												<input v-model="form.genMuje" id="genMuje" name="genMuje" type="text" 
												class="form-control" :class="{ 'is-invalid': form.errors.has('genMuje') }" 
												placeholder="0">
												<has-error :form="form" field="genMuje"></has-error>
											</div>
											<div class="form-group col-md-6">
												<label>Hombre(es)</label>
												<input v-model="form.genHom" id="genHom" name="genHom" type="text" 
												class="form-control" :class="{ 'is-invalid': form.errors.has('genHom') }" 
												placeholder="0">
												<has-error :form="form" field="genHom"></has-error>
											</div>
										</div>
									</div>
								</div>
							</tab-content>

							<tab-content title="Información Extra" icon="fas fa-info-circle">
								<div class="row">
									<div class="form-group col-md-4">
										<label>¿A cuánto asciende mensualmente mi nómina?</label>	
										<vue-numeric currency="$" separator="," v-model="form.nomina"
											id="nomina" name="nomina" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('nomina') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="nomina"></has-error>
									</div>

									<div class="form-group col-md-4">
										<label>Como empresario(a) tengo/tendre un salario mensual de</label>	
										<vue-numeric currency="$" separator="," v-model="form.salario"
											id="salario" name="salario" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('salario') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="salario"></has-error>
									</div>
									
									<div class="form-group col-md-4">
										<label>¿A cuánto ascenderá mensualmente mi nómina?</label>		
										<vue-numeric currency="$" separator="," v-model="form.upNomina"
											id="upNomina" name="upNomina" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('upNomina') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="upNomina"></has-error>
									</div>
								</div>

								<div class="row">
									<div class="form-group col-md-4">
										<label>Incremento estimado en las ventas o ingresos</label>		
										<vue-numeric currency=" %" separator="" currency-symbol-position="suffix" v-model="form.incremento"
											id="incremento" name="incremento" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('incremento') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="incremento"></has-error>
									</div>
									<div class="form-group col-md-8">
										<label>¿Por qué?</label>	
										<textarea v-model="form.why" rows="3" id="why" name="why" type="text" 
										class="form-control" :class="{ 'is-invalid': form.errors.has('why') }" 
										placeholder="Describa brevemente..."></textarea>
										<has-error :form="form" field="why"></has-error>
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
                this.form.post('negocios')
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