<template>	
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">
					<i class="fas fa-check-circle"></i>
					Entrega de Expedientes
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

							<tab-content title="1era Parte" icon="fas fa-check-double">
								<div class="box box-primary">
									<div class="col-md-12">
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">
												<i class="fas fa-check-square"></i>
												Solicitud de Credito
												</h3>
											</div>
											<div class="card-body table-responsive p-0 mt-5">
												<div class="container">										
													<!-- form start -->
													<div class="box-body">																
														<!-- checkbox -->
														<div class="form-group col-md-12">
															<div class="custom-control custom-checkbox">
																<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk1') }" 
																type="checkbox" id="chk1" v-model="form.chk1">
																<label for="chk1" class="custom-control-label">Fromato solicitud de crédito (Requisitado y firmado)</label>
															</div>
															<has-error :form="form" field="chk1"></has-error>

															<div class="custom-control custom-checkbox">
																<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk2') }" 
																type="checkbox" id="chk2" v-model="form.chk2">
																<label for="chk2" class="custom-control-label">Cotizaciones (Sólo Refaccionario M y E e I.F.)</label>
															</div>
															<has-error :form="form" field="chk2"></has-error>
														</div>											
													</div><!-- /.box-body -->
												</div>`
											</div>	
										</div>
									</div>  									
								</div><!-- /.box-primary -->
								
								<div class="box box-primary">
									<div class="col-md-12">
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">
												<i class="fas fa-check-square"></i>
												Información Financiera y Fiscal
												</h3>
											</div>
											<div class="card-body table-responsive p-0 mt-5">
												<div class="container">										
													<!-- form start -->
													<div class="box-body">																
														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk3') }" 
															type="checkbox" id="chk3" v-model="form.chk3">
															<label for="chk3" class="custom-control-label">Formato Declaración Patrimonial / Ingresos-Egresos (formatos firmados)</label>
														</div>
														<has-error :form="form" field="chk3"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk4') }" 
															type="checkbox" id="chk4" v-model="form.chk4">
															<label for="chk4" class="custom-control-label">2 Copias Informe de Buró de Crédito del Solicitante y Conyuge * (Original y con fecha reciente)</label>
														</div>
														<has-error :form="form" field="chk4"></has-error>
													
														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk5') }" 
															type="checkbox" id="chk5" v-model="form.chk5">
															<label for="chk5" class="custom-control-label">2 Copias Constancia de situación fiscal (reciente, legible y completa)</label>
														</div>
														<has-error :form="form" field="chk5"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk6') }" 
															type="checkbox" id="chk6" v-model="form.chk6">
															<label for="chk6" class="custom-control-label">2 Copias Último pago de impuestos del solicitante (Declaración anual *, pagos provisionales)</label>
														</div>
														<has-error :form="form" field="chk6"></has-error>							
													</div><!-- /.box-body -->
												</div>`
											</div>	
										</div>
									</div>  									
								</div><!-- /.box-primary -->

								<div class="box box-primary">
									<div class="col-md-12">
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">
												<i class="fas fa-check-square"></i>
												Persona Física
												</h3>
											</div>
											<div class="card-body table-responsive p-0 mt-5">
												<div class="container">										
													<!-- form start -->
													<div class="box-body">
														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk7') }" 
															type="checkbox" id="chk7" v-model="form.chk7">
															<label for="chk7" class="custom-control-label">2 Copias Acta nacimiento del solicitante y conyuge * (legible)</label>
														</div>
														<has-error :form="form" field="chk7"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk8') }" 
															type="checkbox" id="chk8" v-model="form.chk8">
															<label for="chk8" class="custom-control-label">2 Copias Comprobante de estado civil (acta de matrimonio, divorcio, defunción, etc. (legible)</label>
														</div>
														<has-error :form="form" field="chk8"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk9') }" 
															type="checkbox" id="chk9" v-model="form.chk9">
															<label for="chk9" class="custom-control-label">2 Copias Identificación oficial del solicitante y conyuge * (INE o pasaporte legible y vigente por ambos lados)</label>
														</div>
														<has-error :form="form" field="chk9"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk10') }" 
															type="checkbox" id="chk10" v-model="form.chk10">
															<label for="chk10" class="custom-control-label">2 Copias C.U.R.P. del solicitante y conyuge * (legible)</label>
														</div>
														<has-error :form="form" field="chk10"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk11') }" 
															type="checkbox" id="chk11" v-model="form.chk11">
															<label for="chk11" class="custom-control-label">2 Copias Comprobante de domicilio: negocio y particular(reciente y legible y del domicilio fiscal en caso que sea diferente)</label>
														</div>
														<has-error :form="form" field="chk11"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk12') }" 
															type="checkbox" id="chk12" v-model="form.chk12">
															<label for="chk12" class="custom-control-label">2 Copias Contrato de arrendamiento o comodato (vigente, legible y firmados)</label>
														</div>
														<has-error :form="form" field="chk12"></has-error>															
													</div><!-- /.box-body -->
												</div>`
											</div>	
										</div>
									</div>  									
								</div><!-- /.box-primary -->

								<div class="box box-primary">
									<div class="col-md-12">
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">
												<i class="fas fa-check-square"></i>
												Persona Moral
												</h3>
											</div>
											<div class="card-body table-responsive p-0 mt-5">
												<div class="container">										
													<!-- form start -->
													<div class="box-body">
														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk13') }" 
															type="checkbox" id="chk13" v-model="form.chk13">
															<label for="chk13" class="custom-control-label">Buró de crédito (original y con fecha reciente)</label>
														</div>
														<has-error :form="form" field="chk13"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk14') }" 
															type="checkbox" id="chk14" v-model="form.chk14">
															<label for="chk14" class="custom-control-label">2 Copias Acta constitutiva (Completas y legibles)</label>
														</div>
														<has-error :form="form" field="chk14"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk15') }" 
															type="checkbox" id="chk15" v-model="form.chk15">
															<label for="chk15" class="custom-control-label">2 Copias Actas de asambleas y poderes * (completas y legibles)</label>
														</div>
														<has-error :form="form" field="chk15"></has-error>													
													</div><!-- /.box-body -->
												</div>`
											</div>	
										</div>
									</div>  									
								</div><!-- /.box-primary -->								
							</tab-content>

							<tab-content title="2da Parte" icon="fas fa-check-double">
								<div class="box box-primary">
									<div class="col-md-12">
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">
												<i class="fas fa-check-square"></i>
												Del Aval o Garante Hipotecario
												</h3>
											</div>
											<div class="card-body table-responsive p-0 mt-5">
												<div class="container">										
													<!-- form start -->
													<div class="box-body">																
														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk16') }" 
															type="checkbox" id="chk16" v-model="form.chk16">
															<label for="chk16" class="custom-control-label">2 Copias Acta de nacimiento del aval o garante y conyuge * (legible)</label>
														</div>
														<has-error :form="form" field="chk16"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk17') }" 
															type="checkbox" id="chk17" v-model="form.chk17">
															<label for="chk17" class="custom-control-label">2 Copias Comprobante de estado civil (acta de matrimonio, divorcio, defunción, etc. (legible)</label>
														</div>
														<has-error :form="form" field="chk17"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk18') }" 
															type="checkbox" id="chk18" v-model="form.chk18">
															<label for="chk18" class="custom-control-label">2 Copias Identificación del Aval o garante y conyuge * (INE o pasaporte legible y vigente por ambos lados)</label>
														</div>
														<has-error :form="form" field="chk18"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk19') }" 
															type="checkbox" id="chk19" v-model="form.chk19">
															<label for="chk19" class="custom-control-label">2 Copias C.U.R.P. del Aval o garante y conyuge * (legible)</label>
														</div>
														<has-error :form="form" field="chk19"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk20') }" 
															type="checkbox" id="chk20" v-model="form.chk20">
															<label for="chk20" class="custom-control-label">2 Copias Comprobante de domicilio particular (reciente y legible)</label>
														</div>
														<has-error :form="form" field="chk20"></has-error>									
													</div><!-- /.box-body -->
												</div>`
											</div>	
										</div>
									</div>  									
								</div><!-- /.box-primary -->

								<div class="box box-primary">
									<div class="col-md-12">
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">
												<i class="fas fa-check-square"></i>
												Garantias
												</h3>
											</div>
											<div class="card-body table-responsive p-0 mt-5">
												<div class="container">										
													<!-- form start -->
													<div class="box-body">																
														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk21') }" 
															type="checkbox" id="chk21" v-model="form.chk21">
															<label for="chk21" class="custom-control-label">Certificado de libertad de gravamen (original y copia)</label>
														</div>
														<has-error :form="form" field="chk21"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk22') }" 
															type="checkbox" id="chk22" v-model="form.chk22">
															<label for="chk22" class="custom-control-label">2 Copias Escrituras (completas y legibles)</label>
														</div>
														<has-error :form="form" field="chk22"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk23') }" 
															type="checkbox" id="chk23" v-model="form.chk23">
															<label for="chk23" class="custom-control-label">Avalúo comercial (Original y copia)</label>
														</div>
														<has-error :form="form" field="chk23"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk24') }" 
															type="checkbox" id="chk24" v-model="form.chk24">
															<label for="chk24" class="custom-control-label">2 Copias Recibo del pago Impuesto predial (Legible y actual)</label>
														</div>
														<has-error :form="form" field="chk24"></has-error>										
													</div><!-- /.box-body -->
												</div>`
											</div>	
										</div>
									</div>  									
								</div><!-- /.box-primary -->
								<div class="box box-primary">
									<div class="col-md-12">
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">
												<i class="fas fa-check-square"></i>
												Otros (Detallar)
												</h3>
											</div>
											<div class="card-body table-responsive p-0 mt-5">
												<div class="container">										
													<!-- form start -->
													<div class="box-body">																
														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk25') }" 
															type="checkbox" id="chk25" v-model="form.chk25">
															<label for="chk25" class="custom-control-label">Certificado de libertad de gravamen (original y copia)</label>
														</div>
														<has-error :form="form" field="chk25"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk26') }" 
															type="checkbox" id="chk26" v-model="form.chk26">
															<label for="chk26" class="custom-control-label">2 Copias Escrituras (completas y legibles)</label>
														</div>
														<has-error :form="form" field="chk26"></has-error>

														<div class="custom-control custom-checkbox">
															<input class="custom-control-input" :class="{ 'is-invalid': form.errors.has('chk27') }" 
															type="checkbox" id="chk27" v-model="form.chk27">
															<label for="chk27" class="custom-control-label">Último pago de impuesto sobre nómina * / Cédula de determinación de cuotas IMSS (recientes) *</label>
														</div>
														<has-error :form="form" field="chk27"></has-error>										
													</div><!-- /.box-body -->
												</div>`
											</div>	
										</div>
									</div>  									
								</div><!-- /.box-primary -->
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
                this.form.post('expedientes')
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