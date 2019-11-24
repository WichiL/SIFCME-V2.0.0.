<template>	
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">
					<i class="fas fa-edit"></i>
					Estructura de Inversión
					</h3>
				</div>
				<div class="card-body table-responsive p-0 mt-5">
					<div>
						<form-wizard @submit.prevent="createEstructura()"  
							:rules="form.rules"
							title=""
							subtitle=""
							color="#9b59b6"
							error-color="#e74c3c"
							transition="bounce">

							<tab-content title="Estructura" icon="fas fa-money-check-alt">
								<div class="box box-primary">
									<div class="container">										
										<!-- form start -->
										<div class="box-body">
											<div class="row">                   	
												<div class="form-group col-md-4">
													<label>Recursos Propios</label>	
													<vue-numeric currency="$" separator="," v-model="form.recPropios"
														id="recPropios" name="recPropios" v-bind:precision="2" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('recPropios') }" 
														placeholder="$100,000" onKeyPress="return auxMoney(event)">
													</vue-numeric>
													<has-error :form="form" field="recPropios"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Recursos Fondo Plata</label>	
													<vue-numeric currency="$" separator="," v-model="form.recFondoPlata"
														id="recFondoPlata" name="recFondoPlata" v-bind:precision="2" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('recFondoPlata') }" 
														placeholder="$100,000" onKeyPress="return auxMoney(event)">
													</vue-numeric>
													<has-error :form="form" field="recFondoPlata"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Inversión Total</label>
													<vue-numeric currency="$" separator="," v-model="form.invTotal"
														id="invTotal" name="invTotal" v-bind:precision="2" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('invTotal') }" 
														placeholder="$100,000" onKeyPress="return auxMoney(event)">
													</vue-numeric>
													<has-error :form="form" field="invTotal"></has-error>
												</div>												
											</div>

											<div class="row">
													<div class="form-group col-md-4">
														<label>Plaza</label>
														<input v-model="form.plaza" name="plaza"
														type="text" class="form-control" id="plaza" :class="{ 'is-invalid': form.errors.has('plaza') }"
														placeholder="Lugar de la plaza">
														<has-error :form="form" field="plaza"></has-error>
													</div>
													<div class="form-group col-md-4">
														<label>Sucursal</label>	
														<input v-model="form.sucursal" id="sucursal" name="sucursal" type="text" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('sucursal') }" 
														placeholder="Nombre de la sucursal">
														<has-error :form="form" field="sucursal"></has-error>
													</div>
													<div class="form-group col-md-4">
														<label>Ubicación</label>	
														<input v-model="form.ubicacion" id="ubicacion" name="ubicacion" type="text" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('ubicacion') }" 
														placeholder="Ingrese la ubicación">
														<has-error :form="form" field="ubicacion"></has-error>
													</div>
											</div>											
										</div><!-- /.box-body -->
									</div>
								</div><!-- /.box-primary -->
							</tab-content>

							<tab-content title="Referencias Comerciales o Bancarias" icon="fas fa-user-friends">
								<div class="box box-primary">
									<div class="col-md-12">
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">
												<i class="fas fa-user"></i>
												Referencia 1
												</h3>
											</div>
											<div class="card-body table-responsive p-0 mt-5">
												<div class="container">										
													<!-- form start -->
													<div class="box-body">																
														<div class="row">
															<div class="form-group col-md-4">
																<label>Nombre de la Empresa</label>	
																<input v-model="form.nom1" id="nom1" name="nom1" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('nom1') }" 
																placeholder="Nombre de la empresa">
																<has-error :form="form" field="nom1"></has-error>
															</div>

															<div class="form-group col-md-4">
																<label>Persona a Contactar</label>	
																<input v-model="form.perContactar1" id="perContactar1" name="perContactar1" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('perContactar1') }" 
																placeholder="Nombre de la persona a la que se contactara">
																<has-error :form="form" field="perContactar1"></has-error>
															</div>
															<div class="form-group col-md-4">
																<label>Ubicación</label>	
																<input v-model="form.ubicacion1" id="ubicacion1" name="ubicacion1" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('ubicacion1') }" 
																placeholder="Ubicación de la empresa">
																<has-error :form="form" field="ubicacion1"></has-error>
															</div>												
														</div>

														<div class="row">
															<div class="form-group col-md-3">
																<label>Teléfono</label>
																<vue-mask
																	class="form-control" :class="{ 'is-invalid': form.errors.has('tel1') }"
																	id="tel1"
																	name="tel1"
																	v-model="form.tel1"
																	mask="(000)-000-0000"
																	:raw="false"
																	placeholder="Ingrese un número de contacto">
																</vue-mask>
																<has-error :form="form" field="tel1"></has-error>
															</div>
															<div class="form-group col-md-3">
																<label>Relación</label>	
																<input v-model="form.relacion1" id="relacion1" name="relacion1" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('relacion1') }" 
																placeholder="¿Que relación tiene?">
																<has-error :form="form" field="relacion1"></has-error>
															</div>
															<div class="form-group col-md-3">
																<label>Límite de Crédito</label>	
																<vue-numeric currency="$" separator="," v-model="form.limCredito1"
																	id="limCredito1" name="limCredito1" v-bind:precision="2" 
																	class="form-control" :class="{ 'is-invalid': form.errors.has('limCredito1') }" 
																	placeholder="$100,000" onKeyPress="return auxMoney(event)">
																</vue-numeric>
																<has-error :form="form" field="limCredito1"></has-error>
															</div>
															<div class="form-group col-md-3">
																<label>Relación Comercial</label>	
																<input v-model="form.yrsRelacion1" id="yrsRelacion1" name="yrsRelacion1" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('yrsRelacion1') }" 
																placeholder="¿Cuanto tiempo? ">
																<has-error :form="form" field="yrsRelacion1"></has-error>
															</div>
														</div>											
													</div><!-- /.box-body -->
												</div>`
											</div>	
										</div>
									</div>  
									
								</div><!-- /.box-primary REFERENCIA 1 -->

								<div class="box box-primary">
									<div class="col-md-12">
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">
												<i class="fas fa-user"></i>
												Referencia 2
												</h3>
											</div>
											<div class="card-body table-responsive p-0 mt-5">
												<div class="container">										
													<!-- form start -->
													<div class="box-body">																
														<div class="row"> 																	
															<div class="form-group col-md-4">
																<label>Nombre de la Empresa</label>	
																<input v-model="form.nom2" id="nom2" name="nom2" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('nom2') }" 
																placeholder="Nombre de la empresa">
																<has-error :form="form" field="nom2"></has-error>
															</div>

															<div class="form-group col-md-4">
																<label>Persona a Contactar</label>	
																<input v-model="form.perContactar2" id="perContactar2" name="perContactar2" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('perContactar2') }" 
																placeholder="Nombre de la persona a la que se contactara">
																<has-error :form="form" field="perContactar2"></has-error>
															</div>
															<div class="form-group col-md-4">
																<label>Ubicación</label>	
																<input v-model="form.ubicacion2" id="ubicacion2" name="ubicacion2" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('ubicacion2') }" 
																placeholder="Ubicación de la empresa">
																<has-error :form="form" field="ubicacion2"></has-error>
															</div>												
														</div>

														<div class="row">
															<div class="form-group col-md-3">
																<label>Teléfono</label>
																<vue-mask
																	class="form-control" :class="{ 'is-invalid': form.errors.has('tel2') }"
																	id="tel2"
																	name="tel2"
																	v-model="form.tel2"
																	mask="(000)-000-0000"
																	:raw="false"
																	placeholder="Ingrese un número de contacto">
																</vue-mask>
																<has-error :form="form" field="tel2"></has-error>
															</div>
															<div class="form-group col-md-3">
																<label>Relación</label>	
																<input v-model="form.relacion2" id="relacion2" name="relacion2" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('relacion2') }" 
																placeholder="¿Que relación tiene?">
																<has-error :form="form" field="relacion2"></has-error>
															</div>
															<div class="form-group col-md-3">
																<label>Límite de Crédito</label>	
																<vue-numeric currency="$" separator="," v-model="form.limCredito2"
																	id="limCredito2" name="limCredito2" v-bind:precision="2" 
																	class="form-control" :class="{ 'is-invalid': form.errors.has('limCredito2') }" 
																	placeholder="$100,000" onKeyPress="return auxMoney(event)">
																</vue-numeric>
																<has-error :form="form" field="limCredito2"></has-error>
															</div>
															<div class="form-group col-md-3">
																<label>Relación Comercial</label>	
																<input v-model="form.yrsRelacion2" id="yrsRelacion2" name="yrsRelacion2" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('yrsRelacion2') }" 
																placeholder="¿Cuanto tiempo? ">
																<has-error :form="form" field="yrsRelacion2"></has-error>
															</div>
														</div>											
													</div><!-- /.box-body -->
												</div>`
											</div>	
										</div>
									</div>  
									
								</div><!-- /.box-primary REFERENCIA 2-->
								
								<div class="box box-primary">
									<div class="col-md-12">
										<div class="card card-primary">
											<div class="card-header">
												<h3 class="card-title">
												<i class="fas fa-user"></i>
												Referencia 3
												</h3>
											</div>
											<div class="card-body table-responsive p-0 mt-5">
												<div class="container">										
													<!-- form start -->
													<div class="box-body">																
														<div class="row">
															<div class="form-group col-md-4">
																<label>Nombre de la Empresa</label>	
																<input v-model="form.nom3" id="nom3" name="nom3" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('nom3') }" 
																placeholder="Nom3bre de la empresa">
																<has-error :form="form" field="nom3"></has-error>
															</div>

															<div class="form-group col-md-4">
																<label>Persona a Contactar</label>	
																<input v-model="form.perContactar3" id="perContactar3" name="perContactar3" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('perContactar3') }" 
																placeholder="Nombre de la persona a la que se contactara">
																<has-error :form="form" field="perContactar3"></has-error>
															</div>
															<div class="form-group col-md-4">
																<label>Ubicación</label>	
																<input v-model="form.ubicacion3" id="ubicacion3" name="ubicacion3" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('ubicacion3') }" 
																placeholder="Ubicación de la empresa">
																<has-error :form="form" field="ubicacion3"></has-error>
															</div>												
														</div>

														<div class="row">
															<div class="form-group col-md-3">
																<label>Teléfono</label>
																<vue-mask
																	class="form-control" :class="{ 'is-invalid': form.errors.has('tel3') }"
																	id="tel3"
																	name="tel3"
																	v-model="form.tel3"
																	mask="(000)-000-0000"
																	:raw="false"
																	placeholder="Ingrese un número de contacto">
																</vue-mask>
																<has-error :form="form" field="tel3"></has-error>
															</div>
															<div class="form-group col-md-3">
																<label>Relación</label>	
																<input v-model="form.relacion3" id="relacion3" name="relacion3" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('relacion3') }" 
																placeholder="¿Que relación tiene?">
																<has-error :form="form" field="relacion3"></has-error>
															</div>
															<div class="form-group col-md-3">
																<label>Límite de Crédito</label>	
																<vue-numeric currency="$" separator="," v-model="form.limCredito3"
																	id="limCredito3" name="limCredito3" v-bind:precision="2" 
																	class="form-control" :class="{ 'is-invalid': form.errors.has('limCredito3') }" 
																	placeholder="$100,000" onKeyPress="return auxMoney(event)">
																</vue-numeric>
																<has-error :form="form" field="limCredito3"></has-error>
															</div>
															<div class="form-group col-md-3">
																<label>Relación Comercial</label>	
																<input v-model="form.yrsRelacion3" id="yrsRelacion3" name="yrsRelacion3" type="text" 
																class="form-control" :class="{ 'is-invalid': form.errors.has('yrsRelacion3') }" 
																placeholder="¿Cuanto tiempo? ">
																<has-error :form="form" field="yrsRelacion3"></has-error>
															</div>
														</div>											
													</div><!-- /.box-body -->
												</div>`
											</div>	
										</div>
									</div>  
									
								</div><!-- /.box-primary REFERENCIA 3-->
							</tab-content>	
							
							<tab-content title="Negocio" icon="fas fa-landmark">
								<div class="box box-primary">
									<div class="container">										
										<!-- form start -->
										<div class="box-body">
											<div class="row">                   	
												<div class="form-group col-md-4">
													<label>Dias Laborales</label>	
													<input v-model="form.diasLaborales" id="diasLaborales" name="diasLaborales" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('diasLaborales') }" 
													placeholder="Dias que se trabaja">
													<has-error :form="form" field="diasLaborales"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Atiende</label>	
													<input v-model="form.atiende" id="atiende" name="atiende" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('atiende') }" 
													placeholder="¿Quien atiende el negocio?">
													<has-error :form="form" field="atiende"></has-error>
												</div>

												<div class="form-group col-md-2">
													<label>Abren</label>	
													<VueCtkDateTimePicker
														v-model = "form.abren" 
														id="abren"
														name="abren"
														format = "hh:mm a"
														formatted = "hh:mm a"
														:only-time = true
														:right = true>
														<input placeholder="Seleccione un abren" type="text" readonly="readonly" class="form-control"
														 :class="{ 'is-invalid': form.errors.has('abren') }" />
													</VueCtkDateTimePicker>
													<has-error :form="form" field="abren"></has-error>
												</div>	
												<div class="form-group col-md-2">
													<label>Cierran</label>	
													<VueCtkDateTimePicker
														v-model = "form.cierran" 
														id="cierran"
														name="cierran"
														format = "hh:mm a"
														formatted = "hh:mm a"
														:only-time = true
														:right = true>
														<input placeholder="Seleccione un cierran" type="text" readonly="readonly" class="form-control"
														 :class="{ 'is-invalid': form.errors.has('cierran') }" />
													</VueCtkDateTimePicker>
													<has-error :form="form" field="cierran"></has-error>
												</div>											
											</div>

											<div class="row">                   	
												<div class="form-group col-md-4">
													<label>Empresa Ubicada Frente</label>	
													<input v-model="form.frente" id="frente" name="frente" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('frente') }" 
													placeholder="">
													<has-error :form="form" field="frente"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>A un Lado o Entre</label>	
													<input v-model="form.lado" id="lado" name="lado" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('lado') }" 
													placeholder="">
													<has-error :form="form" field="lado"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>El Negocio se Encuentra En</label>	
													<input v-model="form.ubicacion" id="ubicacion" name="ubicacion" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('ubicacion') }" 
													placeholder="Donde se ubica el local">
													<has-error :form="form" field="ubicacion"></has-error>
												</div>												
											</div>

											<div class="row">                   	
												<div class="form-group col-md-4">
													<label>Color de la Fachada</label>	
													<input v-model="form.color" id="color" name="color" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('color') }" 
													placeholder="¿De que color es el local?">
													<has-error :form="form" field="color"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Señalamienento</label>	
													<input v-model="form.letreros" id="letreros" name="letreros" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('letreros') }" 
													placeholder="Anuncio, letrero, espectacular, etc...">
													<has-error :form="form" field="letreros"></has-error>
												</div>											
											</div>																							
										</div><!-- /.box-body -->
									</div>
								</div><!-- /.box-primary -->
							</tab-content>

							<tab-content title="Créditos Anteriores" icon="fas fa-file-invoice-dollar">
								<div class="box box-primary">
									<div class="container">										
										<!-- form start -->
										<div class="box-body">
											<div class="row">                   	
												<div class="form-group col-md-4">
													<label>Nombre del Crédito</label>	
													<input v-model="form.nomCredito1" id="nomCredito1" name="nomCredito1" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('nomCredito1') }" 
													placeholder="¿Que crédito solicito?">
													<has-error :form="form" field="nomCredito1"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Monto</label>	
													<vue-numeric currency="$" separator="," v-model="form.montoCredito1"
														id="montoCredito1" name="montoCredito1" v-bind:precision="2" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('montoCredito1') }" 
														placeholder="$100,000" onKeyPress="return auxMoney(event)">
													</vue-numeric>
													<has-error :form="form" field="montoCredito1"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Saldo Actual</label>	
													<vue-numeric currency="$" separator="," v-model="form.salActual1"
														id="salActual1" name="salActual1" v-bind:precision="2" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('salActual1') }" 
														placeholder="$100,000" onKeyPress="return auxMoney(event)">
													</vue-numeric>
													<has-error :form="form" field="salActual1"></has-error>
												</div>												
											</div>

											<div class="row">                   	
												<div class="form-group col-md-4">
													<label>Pago</label>	
													<vue-numeric currency="$" separator="," v-model="form.pago1"
														id="pago1" name="pago1" v-bind:precision="2" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('pago1') }" 
														placeholder="$100,000" onKeyPress="return auxMoney(event)">
													</vue-numeric>
													<has-error :form="form" field="pago1"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Mensual</label>	
													<vue-numeric currency="$" separator="," v-model="form.mensual1"
														id="mensual1" name="mensual1" v-bind:precision="2" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('mensual1') }" 
														placeholder="$100,000" onKeyPress="return auxMoney(event)">
													</vue-numeric>
													<has-error :form="form" field="mensual1"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Año</label>	
													<input v-model="form.yr1" id="yr1" name="yr1" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('yr1') }" 
													placeholder="Año en que fue expedido" onKeyPress="return soloNumeros(event)" maxlength="4">
													<has-error :form="form" field="yr1"></has-error>
												</div>												
											</div>																						
										</div><!-- /.box-body -->
									</div>
								</div><!-- /.box-primary -->
							</tab-content>

							<tab-content title="Manifestación Aval" icon="fas fa-book">
								<div class="box box-primary">
									<div class="container">										
										<!-- form start -->
										<div class="box-body">
											<div class="row">                   	
												<div class="form-group col-md-6">
													<label>Nombre del Aval</label>	
													<input v-model="form.nomAval" id="nomAval" name="nomAval" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('nomAval') }" 
													placeholder="¿Que crédito solicito?">
													<has-error :form="form" field="nomAval"></has-error>
												</div>

												<div class="form-group col-md-3">
													<label>Estado Civil</label>
													<select v-model="form.estCivilAval" id="estCivilAval" class="form-control" :class="{ 'is-invalid': form.errors.has('estCivilAval') }">
														<option disabled value="" selected>Selecciona el Estado Civil...</option>
														<option value="Soltero">Soltero</option>
														<option value="Casado">Casado</option>
														<option value="Divorciado">Divorciado</option>
														<option value="Viudo">Viudo</option>
													</select>
													<has-error :form="form" field="estCivilAval"></has-error>
												</div>
												<div class="form-group col-md-3">
													<label>¿Ha sido Aval en FP?</label>
													<select v-model="form.avalAnterior" id="avalAnterior" class="form-control" :class="{ 'is-invalid': form.errors.has('avalAnterior') }">
														<option disabled value="" selected>Selecciona una opción</option>
														<option value="Si">Si</option>
														<option value="No">No</option>
													</select>
													<has-error :form="form" field="avalAnterior"></has-error>
												</div>												
											</div>

											<div class="row">                   	
												<div class="form-group col-md-2">
													<label>Cód. Postal</label>
													<vue-mask
														class="form-control" :class="{ 'is-invalid': form.errors.has('cpAval') }"
														id="cpAval"
														name="cpAval"
														v-model="form.cpAval"
														mask="00000"
														:raw="false"
														placeholder="Código postal del domicilio"
														onblur = "codigoPostalAval();">
													</vue-mask>	
													<has-error :form="form" field="cpAval"></has-error>
												</div>

												<div class="form-group col-md-2">
													<label>Municipio</label>	
													<input v-model="form.munAval" id="munAval" name="munAval" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('munAval') }" 
													placeholder="Muncipio donde reside el aval">
													<has-error :form="form" field="munAval"></has-error>
												</div>

												<div class="form-group col-md-5">
													<label>Domicilio</label>	
													<input v-model="form.domAval" id="domAval" name="domAval" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('domAval') }" 
													placeholder="Domicilio del aval">
													<has-error :form="form" field="domAval"></has-error>
												</div>

												<div class="form-group col-md-3">
													<label>Teléfono</label>	
													<vue-mask
														class="form-control" :class="{ 'is-invalid': form.errors.has('telAval') }"
														id="telAval"
														name="telAval"
														v-model="form.telAval"
														mask="(000)-000-0000"
														:raw="false"
														placeholder="Ingrese un número de contacto">
													</vue-mask>
													<has-error :form="form" field="telAval"></has-error>
												</div>												
											</div>	

											<div class="row">
												<div class="form-group col-md-4">
													<label>Parentesco</label>	
													<input v-model="form.parentesco" id="parentesco" name="parentesco" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('parentesco') }" 
													placeholder="¿Que parentesco tiene con el solicitante?">
													<has-error :form="form" field="parentesco"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Valor Patrimonial</label>
													<vue-numeric currency="$" separator="," v-model="form.valPatrimonio"
														id="valPatrimonio" name="valPatrimonio" v-bind:precision="2" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('valPatrimonio') }" 
														placeholder="$100,000" onKeyPress="return auxMoney(event)">
													</vue-numeric>	
													<has-error :form="form" field="valPatrimonio"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Constancia de Propiedad</label>	
													<input v-model="form.consPropiedad" id="consPropiedad" name="consPropiedad" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('consPropiedad') }" 
													placeholder="Escritura de terrenos, casas, etc">
													<has-error :form="form" field="consPropiedad"></has-error>
												</div>
											</div>

											<div class="row">
												<div class="form-group col-md-2">
													<label>No.Registro</label>	
													<input v-model="form.numRegistro" id="numRegistro" name="numRegistro" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('numRegistro') }" 
													placeholder="00" onKeyPress="return soloNumeros(event)" maxlength="10">
													<has-error :form="form" field="numRegistro"></has-error>
												</div>
												<div class="form-group col-md-2">
													<label>Folio</label>	
													<input v-model="form.folio" id="folio" name="folio" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('folio') }" 
													placeholder="00" onKeyPress="return soloNumeros(event)" maxlength="10">
													<has-error :form="form" field="folio"></has-error>
												</div>
												<div class="form-group col-md-2">
													<label>Volumen</label>	
													<input v-model="form.vol" id="vol" name="vol" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('vol') }" 
													placeholder="00" onKeyPress="return soloNumeros(event)" maxlength="10">
													<has-error :form="form" field="vol"></has-error>
												</div>
												<div class="form-group col-md-2">
													<label>Seccion</label>	
													<input v-model="form.secc" id="secc" name="secc" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('secc') }" 
													placeholder="00" onKeyPress="return soloNumeros(event)" maxlength="10">
													<has-error :form="form" field="secc"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Fecha de Inscripción</label>
													<VueCtkDateTimePicker
														v-model = "form.fecInscripcion" 
														id="fecInscripcion"
														name="fecInscripcion"
														formatted = "L"
														:autoClose = true
														:only-date = true
														:noButtonNow = true
														:noKeyboard = true
														:noLabel = true
														:right = true>
													
														<input placeholder="Seleccione una fecha" type="text" readonly="readonly" class="form-control" 
														:class="{ 'is-invalid': form.errors.has('fecInscripcion') }" />
													</VueCtkDateTimePicker>														
													<has-error :form="form" field="fecInscripcion"></has-error>
												</div>
											</div>	

											<div class="row">
												<div class="form-group col-md-4">
													<label>CP Propiedad</label>	
													<vue-mask
														class="form-control" :class="{ 'is-invalid': form.errors.has('cpPropiedad') }"
														id="cpPropiedad"
														name="cpPropiedad"
														v-model="form.cpPropiedad"
														mask="00000"
														:raw="false"
														placeholder="Código Postal de la propiedad"
														onblur = "codigoPostalPro();">
													</vue-mask>	
													<has-error :form="form" field="cpPropiedad"></has-error>
												</div>	

												<div class="form-group col-md-4">
													<label>Municipio Propiedad</label>	
													<input v-model="form.munPropiedad" id="munPropiedad" name="munPropiedad" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('munPropiedad') }" 
													placeholder="Muncipio donde se ubica la propiedad">
													<has-error :form="form" field="munPropiedad"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Domicilio Propiedad</label>	
													<input v-model="form.domPropiedad" id="domPropiedad" name="domPropiedad" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('domPropiedad') }" 
													placeholder="Domicilio donde se ubica la propiedad">
													<has-error :form="form" field="domPropiedad"></has-error>
												</div>
												
											</div>																				
										</div><!-- /.box-body -->
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

									<wizard-button v-else @click.native="createEstructura" 
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
					tel1:'',
					tel2:'',
					tel3:'',
					telAval:'',
				}),
			}
		},

		methods: {
			//CREAR REGISTROS
            createEstructura(){
                this.$Progress.start();
                this.form.post('estructuras')
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