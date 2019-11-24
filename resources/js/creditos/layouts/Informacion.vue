<template>	
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">
					<i class="fas fa-edit"></i>
					Información Ingresos - Egresos
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

							<tab-content title="1er Parte" icon="fas fa-funnel-dollar">
								<div class="form-group row justify-content-end">
									<div class="col-sm-4 font-weight-bolder">Ventas, costo y gastos que ha tenido
										su negocio durante los mese que vendio
									</div>
									<div class="col-sm-4 font-weight-bolder">Ventas, costos y gastos que proyecta
										obtener durante un mes. Considere los incrementos en: Ventas, personas
										consumo, renta, etc.
									</div>									
								</div>

								<div class="form-group row justify-content-end">
									<div class="col-md-6 row justify-content-end">
										<label class="col-sm-3 col-form-label">Mujeres</label>
										<div class="col-sm-3">
											<input v-model="form.venMujeres" id="venMujeres" name="venMujeres" type="text" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('venMujeres') }" 
											onKeyPress="return soloNumeros(event)" maxlength="4">
											<has-error :form="form" field="venMujeres"></has-error>
											
										</div>
									</div>
									<div class="col-md-6 row justify-content-center">
										<label class="col-sm-3 col-form-label">Mujeres</label>
										<div class="col-sm-3">
											<input v-model="form.proMujeres" id="proMujeres" name="proMujeres" type="text" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('proMujeres') }" 
											onKeyPress="return soloNumeros(event)" maxlength="4">
											<has-error :form="form" field="proMujeres"></has-error>
										</div>
									</div>									
								</div>
								<div class="form-group row justify-content-end">
									<div class="col-md-6 row justify-content-end">
										<label class="col-sm-3 col-form-label">Hombres</label>
										<div class="col-sm-3">
											<input v-model="form.venHombres" id="venHombres" name="venHombres" type="text" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('venHombres') }" 
											onKeyPress="return soloNumeros(event)" maxlength="4">
											<has-error :form="form" field="venHombres"></has-error>
											
										</div>
									</div>
									<div class="col-md-6 row justify-content-center">
										<label class="col-sm-3 col-form-label">Hombres</label>
										<div class="col-sm-3">
											<input v-model="form.proHombres" id="proHombres" name="proHombres" type="text" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('proHombres') }" 
											onKeyPress="return soloNumeros(event)" maxlength="4">
											<has-error :form="form" field="proHombres"></has-error>
										</div>
									</div>									
								</div>
								<div class="form-group row justify-content-center">									
									<label class="col-sm-4 col-form-label">Incremento en Ingreso y Egresos</label>
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.incremento"
											id="incremento" name="incremento"
											class="form-control" :class="{ 'is-invalid': form.errors.has('incremento') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="incremento"></has-error>
									</div>						
								</div>

								<hr width=100% size="100"  noshade="noshade"><br>
								
								<!-- FIRST ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Ventas en promedio mensual</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monVenProING"
											id="monVenProING" name="monVenProING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monVenProING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monVenProING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porVenProING"
											id="porVenProING" name="porVenProING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porVenProING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porVenProING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monVenProEGR"
											id="monVenProEGR" name="monVenProEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monVenProEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monVenProEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porVenProEGR"
											id="porVenProEGR" name="porVenProEGR"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porVenProEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porVenProEGR"></has-error>
									</div>
								</div>

								<!-- SECOND ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Ingresos por servicios en promedio mensual</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monSerProINGR"
											id="monSerProINGR" name="monSerProINGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monSerProINGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monSerProINGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porSerProING"
											id="porSerProING" name="porSerProING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porSerProING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porSerProING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monSerProEGR"
											id="monSerProEGR" name="monSerProEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monSerProEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monSerProEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porSerProEGR"
											id="porSerProEGR" name="porSerProEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porSerProEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porSerProEGR"></has-error>
									</div>
								</div>

								<!-- THIRD ROW -->
								<div class="form-group row justify-content-start">
									<label class="offset-md-2 col-sm-2 col-form-label">TOTAL DE INGRESOS</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monTotIngING"
											id="monTotIngING" name="monTotIngING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monTotIngING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monTotIngING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porTotIngING"
											id="porTotIngING" name="porTotIngING" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porTotIngING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porTotIngING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monTotIngEGR"
											id="monTotIngEGR" name="monTotIngEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monTotIngEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monTotIngEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porTotIngEGR"
											id="porTotIngEGR" name="porTotIngEGR"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porTotIngEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porTotIngEGR"></has-error>
									</div>
								</div>

								<!-- FOURTH ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Empaques</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monEmpING"
											id="monEmpING" name="monEmpING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monEmpING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monEmpING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porEmpING"
											id="porEmpING" name="porEmpING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porEmpING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porEmpING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monEmpEGR"
											id="monEmpEGR" name="monEmpEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monEmpEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monEmpEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porEmpEGR"
											id="porEmpEGR" name="porEmpEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porEmpEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porEmpEGR"></has-error>
									</div>
								</div>

								<!-- FOURTH ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Comisiones por Venta</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monComING"
											id="monComING" name="monComING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monComING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monComING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porComING"
											id="porComING" name="porComING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porComING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porComING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monComEGR"
											id="monComEGR" name="monComEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monComEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monComEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porComEGR"
											id="porComEGR" name="porComEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porComEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porComEGR"></has-error>
									</div>
								</div>

								<!-- FITH ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Propaganda y Publicidad</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monPubING"
											id="monPubING" name="monPubING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monPubING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monPubING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porPubING"
											id="porPubING" name="porPubING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porPubING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porPubING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monPubEGR"
											id="monPubEGR" name="monPubEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monPubEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monPubEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porPubEGR"
											id="porPubEGR" name="porPubEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porPubEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porPubEGR"></has-error>
									</div>
								</div>

								<!-- SIXTH ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Gasolina</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monGasING"
											id="monGasING" name="monGasING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monGasING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monGasING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porGasING"
											id="porGasING" name="porGasING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porGasING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porGasING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monGasEGR"
											id="monGasEGR" name="monGasEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monGasEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monGasEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porGasEGR"
											id="porGasEGR" name="porGasEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porGasEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porGasEGR"></has-error>
									</div>
								</div>
							</tab-content>

							<tab-content title="2da Parte" icon="fas fa-funnel-dollar">
								<!-- SEVENTH ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Papelería</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monPapING"
											id="monPapING" name="monPapING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monPapING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monPapING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porPapING"
											id="porPapING" name="porPapING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porPapING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porPapING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monPapEGR"
											id="monPapEGR" name="monPapEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monPapEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monPapEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porPapEGR"
											id="porPapEGR" name="porPapEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porPapEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porPapEGR"></has-error>
									</div>
								</div>

								<!-- EIGHT ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Renta del Local</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monRenING"
											id="monRenING" name="monRenING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monRenING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monRenING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porRenING"
											id="porRenING" name="porRenING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porRenING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porRenING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monRenEGR"
											id="monRenEGR" name="monRenEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monRenEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monRenEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porRenEGR"
											id="porRenEGR" name="porRenEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porRenEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porRenEGR"></has-error>
									</div>
								</div>

								<!-- EIGHT ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Teléfono</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monTelING"
											id="monTelING" name="monTelING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monTelING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monTelING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porTelING"
											id="porTelING" name="porTelING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porTelING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porTelING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monTelEGR"
											id="monTelEGR" name="monTelEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monTelEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monTelEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porTelEGR"
											id="porTelEGR" name="porTelEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porTelEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porTelEGR"></has-error>
									</div>
								</div>

								<!-- EIGHT ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Renta del Local</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monRenING"
											id="monRenING" name="monRenING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monRenING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monRenING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porRenING"
											id="porRenING" name="porRenING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porRenING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porRenING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monRenEGR"
											id="monRenEGR" name="monRenEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monRenEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monRenEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porRenEGR"
											id="porRenEGR" name="porRenEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porRenEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porRenEGR"></has-error>
									</div>
								</div>

								<!-- NINRTH ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Energía Eléctrica (consumo mensual)</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monEleING"
											id="monEleING" name="monEleING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monEleING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monEleING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porEleING"
											id="porEleING" name="porEleING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porEleING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porEleING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monEleEGR"
											id="monEleEGR" name="monEleEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monEleEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monEleEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porEleEGR"
											id="porEleEGR" name="porEleEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porEleEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porEleEGR"></has-error>
									</div>
								</div>

								<!-- DECIMA ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Sueldos (Venta y Administración)</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monSueING"
											id="monSueING" name="monSueING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monSueING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monSueING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porSueING"
											id="porSueING" name="porSueING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porSueING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porSueING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monSueEGR"
											id="monSueEGR" name="monSueEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monSueEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monSueEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porSueEGR"
											id="porSueEGR" name="porSueEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porSueEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porSueEGR"></has-error>
									</div>
								</div>

								<!-- ONCEAVA ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Gastos personales</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monGPING"
											id="monGPING" name="monGPING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monGPING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monGPING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porGPIING"
											id="porGPIING" name="porGPIING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porGPIING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porGPIING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monGPEGR"
											id="monGPEGR" name="monGPEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monGPEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monGPEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porGPIEGR"
											id="porGPIEGR" name="porGPIEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porGPIEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porGPIEGR"></has-error>
									</div>
								</div>

								<!-- DOCEAVA ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Pago a Acreedores (Deudas)</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monDeuING"
											id="monDeuING" name="monDeuING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monDeuING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monDeuING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porDeuING"
											id="porDeuING" name="porDeuING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porDeuING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porDeuING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monDeuEGR"
											id="monDeuEGR" name="monDeuEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monDeuEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monDeuEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porDeuEGR"
											id="porDeuEGR" name="porDeuEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porDeuEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porDeuEGR"></has-error>
									</div>
								</div>

								<!-- TRECEAVA ROW -->
								<div class="form-group row justify-content-start">
									<label class="col-sm-4 col-form-label">Otros Gastos</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monOtrING"
											id="monOtrING" name="monOtrING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monOtrING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monOtrING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porOtrING"
											id="porOtrING" name="porOtrING"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porOtrING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porOtrING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monOtrEGR"
											id="monOtrEGR" name="monOtrEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monOtrEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monOtrEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porOtrEGR"
											id="porOtrEGR" name="porOtrEGR" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porOtrEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porOtrEGR"></has-error>
									</div>
								</div>

								<!-- CATORCEAVA ROW -->
								<div class="form-group row justify-content-start">
									<label class="offset-md-2 col-sm-2 col-form-label">SUMATORIA DE COSTOS Y GASTOS</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monSumING"
											id="monSumING" name="monSumING" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monSumING') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monSumING"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porSumING"
											id="porSumING" name="porSumING" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porSumING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porSumING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monSumEGR"
											id="monSumEGR" name="monSumEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monSumEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monSumEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porSumEGR"
											id="porSumEGR" name="porSumEGR"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porSumEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porSumEGR"></has-error>
									</div>
								</div>

								<!-- CATORCEAVA ROW -->
								<div class="form-group row justify-content-start">
									<label class="offset-md-2 col-sm-2 col-form-label">DIFERENCIA</label>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monDifINF"
											id="monDifINF" name="monDifINF" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monDifINF') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monDifINF"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porDirING"
											id="porDirING" name="porDirING" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('porDirING') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porDirING"></has-error>
									</div>
									<div class="col-sm-2">
										<vue-numeric currency="$" separator="," v-model="form.monDifEGR"
											id="monDifEGR" name="monDifEGR" v-bind:precision="2" 
											class="form-control" :class="{ 'is-invalid': form.errors.has('monDifEGR') }" 
											placeholder="$100,000" onKeyPress="return auxMoney(event)">
										</vue-numeric>
										<has-error :form="form" field="monDifEGR"></has-error>
									</div>
									
									<div class="col-sm-2">
										<vue-numeric currency="%" separator="" currency-symbol-position="suffix" v-model="form.porDirEGR"
											id="porDirEGR" name="porDirEGR"
											class="form-control" :class="{ 'is-invalid': form.errors.has('porDirEGR') }" 
											placeholder="100%" onKeyPress="return soloNumeros(event)" maxlength="3">
										</vue-numeric>
										<has-error :form="form" field="porDirEGR"></has-error>
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
                this.form.post('ingegres')
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