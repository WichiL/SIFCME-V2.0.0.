<template scope="props">	
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">
					<i class="fas fa-edit"></i>
					Solicitud de Credito
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

							<tab-content title="Datos Generales" icon="fas fa-user">
								<div class="box box-primary">
									<div class="container">										
										<!-- form start -->
										<div class="box-body">
											<div class="row">                   	
												<div class="form-group col-md-6">
													<label>Nombre</label>	
													<input v-model="form.nomSolicitante" id="nomSolicitante" name="nomSolicitante" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('nomSolicitante')}" 
													placeholder="Nombre del solicitante" onkeypressed="mayus(this);">												
													<has-error :form="form" field="nomSolicitante"></has-error>
												</div>

												<div class="form-group col-md-3">
													<label>Fecha de Nacimiento</label>

													<VueCtkDateTimePicker
													 v-model = "form.fecNacimiento" 
													 id="fecNacimiento"
													 name="fecNacimiento"
													 formatted = "LL"
													 :autoClose = true
													 :only-date = true
													 :noButtonNow = true
													 :noKeyboard = true
													 :noLabel = true
													 :right = true>
													
													<input placeholder="Seleccione una fecha" type="text" readonly="readonly" class="form-control" :class="{ 'is-invalid': form.errors.has('fecNacimiento') }" />
													
													</VueCtkDateTimePicker>
													<has-error :form="form" field="fecNacimiento"></has-error>
												</div>
												<div class="form-group col-md-3">
													<label>Lugar de Nacimiento</label>
													<select v-model="form.lugNacimiento" id="lugNacimiento" name="lugNacimiento" 
													 	class="form-control" :class="{ 'is-invalid': form.errors.has('lugNacimiento') }">
														<option disabled value="" selected>Seleccione un estado</option>
														<option value="Extranjero">Extranjero</option>
														<option value="Aguascalientes">Aguascalientes</option>
														<option value="Baja California">Baja California</option>
														<option value="Baja California Sur">Baja California Sur</option>
														<option value="Campeche">Campeche</option>
														<option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
														<option value="Colima">Colima</option>
														<option value="Chiapas">Chiapas</option>
														<option value="Chihuahua">Chihuahua</option>
														<option value="Distrito Federal">Distrito Federal</option>
														<option value="Durango">Durango</option>
														<option value="Guanajuato">Guanajuato</option>
														<option value="Guerrero">Guerrero</option>
														<option value="Hidalgo">Hidalgo</option>
														<option value="Jalisco">Jalisco</option>
														<option value="México">México</option>
														<option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
														<option value="Morelos">Morelos</option>
														<option value="Nayarit">Nayarit</option>
														<option value="Nuevo León">Nuevo León</option>
														<option value="Oaxaca">Oaxaca</option>
														<option value="Puebla">Puebla</option>
														<option value="Querétaro">Querétaro</option>
														<option value="Quintana Roo">Quintana Roo</option>
														<option value="San Luis Potosí">San Luis Potosí</option>
														<option value="Sinaloa">Sinaloa</option>
														<option value="Sonora">Sonora</option>
														<option value="Tabasco">Tabasco</option>
														<option value="Tamaulipas">Tamaulipas</option>
														<option value="Tlaxcala">Tlaxcala</option>
														<option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
														<option value="Yucatán">Yucatán</option>
														<option value="Zacatecas">Zacatecas</option>
													</select>	
													<has-error :form="form" field="lugNacimiento"></has-error>
												</div>
											</div>

											<div class="row">
												<div class="form-group col-md-2">
													<label>Edad</label>
													<input v-model="form.edad" name="edad"
														type="text" class="form-control" id="edad" :class="{ 'is-invalid': form.errors.has('edad') }"
														placeholder="Edad" onKeyPress="return soloNumeros(event)" maxlength="2">
													<has-error :form="form" field="edad"></has-error>
												</div>

												<div class="form-group col-md-5">
													<label>Sexo</label>
													<select v-model="form.sexo" id="sexo" class="form-control" :class="{ 'is-invalid': form.errors.has('sexo') }">
														<option disabled value="" selected>Selecciona el Sexo...</option>
														<option value="Femenino">Femenino</option>
														<option value="Masculino">Masculino</option>
													</select>
													<has-error :form="form" field="sexo"></has-error>
												</div>
												<div class="form-group col-md-5">
													<label>Estado Civil</label>
													<select v-model="form.estCivil" id="estCivil" class="form-control" :class="{ 'is-invalid': form.errors.has('estCivil') }">
														<option disabled value="" selected>Selecciona una opción</option>
														<option value="Soltero">Soltero (a)</option>
														<option value="Casado">Casado (a)</option>
														<option value="Divorciado">Divorciado (a)</option>
														<option value="Viudo">Viudo (a)</option>
													</select>
													<has-error :form="form" field="estCivil"></has-error>
												</div>
											</div>

											<div class="row">
												<div class="form-group col-md-6">
													<label>CURP</label>
													<input v-model="form.curp" name="curp"
														type="text" class="form-control" id="curp" :class="{ 'is-invalid': form.errors.has('curp') }"
														placeholder="Ingrese la CURP del solicitante" onblur="validaCURP(this);" onkeyup="mayus(this);" onKeyPress="return alfanumerico(event)" maxlength="18" >
													<has-error :form="form" field="curp"></has-error>
													<strong> <a href="https://www.gob.mx/curp/" target="_blank">Da click aqui para consultar CURP</a> </strong>
												</div>

												<div class="form-group col-md-6">
													<label>RFC</label>
													<input v-model="form.rfc" name="rfc" id="rfc"
														type="text" class="form-control" :class="{ 'is-invalid': form.errors.has('rfc') }"
														placeholder="Ingrese la RFC del solicitante" onblur="validaRFC(this);" onkeyup="mayus(this);" onKeyPress="return alfanumerico(event)" maxlength="13" >
													<has-error :form="form" field="rfc"></has-error>
												</div>
											</div>
											
										</div><!-- /.box-body -->
									</div>
								</div><!-- /.box-primary -->	
							</tab-content>

							<tab-content title="Información Bancaria" icon="fas fa-money-check-alt">
								<div class="box box-primary">
									<div class="container">
										<div class="box-body">	
											<div class="row">                   	
												<div class="form-group col-md-3">
													<label>Tipo de Cuenta</label>	
													<select v-model="form.tipCuenta" id="tipCuenta" name="tipCuenta" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('tipCuenta') }">
														<option disabled value="" selected>Selecciona un tipo</option>
														<option value="Ahorro">Ahorro</option>
														<option value="Cheques">Cheques</option>
													</select>
													<has-error :form="form" field="tipCuenta"></has-error>
												</div>

												<div class="form-group col-md-3">
													<label>Número de Cuenta</label>	
													<vue-mask
														class="form-control" :class="{ 'is-invalid': form.errors.has('numCuenta') }"
														id="numCuenta"
														name="numCuenta"
														v-model="form.numCuenta"
														mask="0000-0000-0000-0000"
														:raw="false"
														placeholder="Ingrese el número de cuenta">
													</vue-mask>
													<has-error :form="form" field="numCuenta"></has-error>
												</div>
												<div class="form-group col-md-3">
													<label>Banco</label>	
													<select v-model="form.banco" id="banco" name="banco" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('banco') }">
														<option disabled value="" selected>Seleccione un banco</option>
														<option value="BBVA Bancomer">BBVA Bancomer</option>
														<option value="Banorte">Banorte</option>
														<option value="Banregio">Banregio</option>
														<option value="Santander">Santander</option>
														<option value="Banco Azteca">Banco Azteca</option>
														<option value="Scotiank Bank">Scotiank Bank</option>
													</select>
													<has-error :form="form" field="banco"></has-error>
												</div>

												<div class="form-group col-md-3">
													<label>Clabe interbancaria</label>	
													<vue-mask
														class="form-control" :class="{ 'is-invalid': form.errors.has('clbInterbancaria') }"
														id="clbInterbancaria"
														name="clbInterbancaria"
														v-model="form.clbInterbancaria"
														mask="000-000-00000000000-0"
														:raw="false"
														placeholder="Digíte la clabe interbancaria">
													</vue-mask>	
													<has-error :form="form" field="clbInterbancaria"></has-error>
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
													placeholder="Lugar de la sucursal">
													<has-error :form="form" field="sucursal"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Ubicación</label>	
													<input v-model="form.ubicacion" id="ubicacion" name="ubicacion" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('ubicacion') }" 
													placeholder="Ubicación del banco">
													<has-error :form="form" field="ubicacion"></has-error>
												</div>
											</div>

										</div><!-- /.box-body -->
									</div>
								</div><!-- /.box-primary -->
							</tab-content>

							<tab-content title="Información de Contacto" icon="fas fa-address-card">
								<div class="box box-primary">
									<div class="container">
										<div class="box-body">	
											<div class="row">                   	
												<div class="form-group col-md-4">
													<label>Correo Electronico</label>	
													<input v-model="form.email" id="email" name="email" type="email" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" 
													placeholder="Ingrese un email" onblur="validarEmail(this)">
													<has-error :form="form" field="email"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Facebook/Twitter</label>	
													<input v-model="form.facTwitter" id="facTwitter" name="facTwitter" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('facTwitter') }" 
													placeholder="Nombre en Facebook o Twitter">
													<has-error :form="form" field="facTwitter"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Teléfono Negocio</label>	
													<vue-mask
														class="form-control" :class="{ 'is-invalid': form.errors.has('telNegocio') }"
														id="telNegocio"
														name="telNegocio"
														v-model="form.telNegocio"
														mask="(000)-000-0000"
														:raw="false"
														placeholder="Ingrese un número de contacto">
													</vue-mask>
													<has-error :form="form" field="telNegocio"></has-error>
												</div>
											</div>

											<div class="row">
												<div class="form-group col-md-4">
													<label>Teléfono Particular</label>
													<vue-mask
														class="form-control" :class="{ 'is-invalid': form.errors.has('telParticular') }"
														id="telParticular"
														name="telParticular"
														v-model="form.telParticular"
														mask="(000)-000-0000"
														:raw="false"
														placeholder="Ingrese un número de contacto">
													</vue-mask>
													<has-error :form="form" field="telParticular"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Teléfono Celular</label>	
													<vue-mask
														class="form-control" :class="{ 'is-invalid': form.errors.has('telCelular') }"
														id="telCelular"
														name="telCelular"
														v-model="form.telCelular"
														mask="(000)-000-0000"
														:raw="false"
														placeholder="Ingrese un número de contacto">
													</vue-mask>
													<has-error :form="form" field="telCelular"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Teléfono Recados</label>	
													<vue-mask
														class="form-control" :class="{ 'is-invalid': form.errors.has('telRecados') }"
														id="telRecados"
														name="telRecados"
														v-model="form.telRecados"
														mask="(000)-000-0000"
														:raw="false"
														placeholder="Ingrese un número de contacto">
													</vue-mask>
													<has-error :form="form" field="telRecados"></has-error>
												</div>
											</div>

										</div><!-- /.box-body -->
									</div>
								</div>	
							</tab-content>

							<tab-content title="Domicilio Particular" icon="fas fa-home">
								<div class="box box-primary">
									<div class="container">
										<div class="box-body">	
											<div class="row">                   	
												<div class="form-group col-md-4">
													<label>Código Postal</label>
													<vue-mask
														class="form-control" :class="{ 'is-invalid': form.errors.has('cpParticular') }"
														id="cpParticular"
														name="cpParticular"
														v-model="form.cpParticular"
														mask="00000"
														:raw="false"
														placeholder="Código postal del domicilio"
														onblur = "codigoPostal();">
													</vue-mask>
													<has-error :form="form" field="cpParticular"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Municipio</label>	
													<input v-model="form.munParticular" id="munParticular" name="munParticular" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('munParticular') }" 
													placeholder="Muncipio donde se ubica">
													<has-error :form="form" field="munParticular"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Colonia</label>	
													<select v-model="form.colParticular" id="colParticular" name="colParticular" type="text" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('colParticular') }">
													</select>
													<has-error :form="form" field="colParticular"></has-error>
												</div>												
											</div>

											<div class="row">
												<div class="form-group col-md-4">
													<label>Calle y Número</label>	
													<input v-model="form.calNumPar" id="calNumPar" name="calNumPar" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('calNumPar') }" 
													placeholder="Calle y número del domicilio">
													<has-error :form="form" field="calNumPar"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Tipo de Vivienda</label>
													<input v-model="form.tipVivParticular" id="tipVivParticular" name="tipVivParticular"
													type="text" class="form-control" :class="{ 'is-invalid': form.errors.has('tipVivParticular') }"
													placeholder="¿Que tipo de vivienda es?">
													<has-error :form="form" field="tipVivParticular"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Antiguedad en Localidad</label>
													<input v-model="form.antLocParticular" name="antLocParticular"
													type="text" class="form-control" id="antLocParticular" :class="{ 'is-invalid': form.errors.has('antLocParticular') }"
													placeholder="¿Cuánto tiempo?">
													<has-error :form="form" field="antLocParticular"></has-error>
												</div>													
											</div>
											<div class="row">
												<div class="form-group col-md-4">
													<label>Antiguedad en Domicilio Actual</label>	
													<input v-model="form.antDomActualPar" id="antDomActualPar" name="antDomActualPar" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('antDomActualPar') }" 
													placeholder="¿Cuánto tiempo?">
													<has-error :form="form" field="antDomActualPar"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Tipo de Domicilio</label>
													<select v-model="form.tipDomParticular" id="tipDomParticular" name="tipDomParticular" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('tipDomParticular') }">
														<option disabled value="" selected>Selecciona una opción</option>
														<option value="Propio">Propio</option>
														<option value="Rentado">Rentado</option>
														<option value="Prestado">Prestado</option>
													</select>
													<has-error :form="form" field="tipDomParticular"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Valor de la Propiedad</label>	
														<vue-numeric currency="$" separator="," v-bind:precision="2" v-model="form.valProParticular"
														id="valProParticular" name="valProParticular" type="text" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('valProParticular') }" 
														placeholder="$0.00" onKeyPress="return auxMoney(event)">
															
														</vue-numeric>
													<has-error :form="form" field="valProParticular"></has-error>
												</div>
											</div>
										</div><!-- /.box-body -->
									</div>
								</div><!-- /.box-primary -->
							</tab-content>

							<tab-content title="Domicilio Del Negocio" icon="fas fa-building">
								<div class="box box-primary">
									<div class="container">
										<div class="box-body">	
											<div class="row">    
												<div class="form-group col-md-4">
													<label>Código Postal</label>	
														<vue-mask
															class="form-control" :class="{ 'is-invalid': form.errors.has('cpNegocio') }"
															id="cpNegocio"
															name="cpNegocio"
															v-model="form.cpNegocio"
															mask="00000"
															:raw="false"
															placeholder="Código postal del domicilio"
															onblur = "codigoPostalNegocio();">
														</vue-mask>
													<has-error :form="form" field="cpNegocio"></has-error>
												</div>                   	
												
												<div class="form-group col-md-4">
													<label>Municipio</label>	
													<input v-model="form.munNegocio" id="munNegocio" name="munNegocio" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('munNegocio') }" 
													placeholder="Muncipio donde se ubica">
													<has-error :form="form" field="munNegocio"></has-error>
												</div>	
												
												<div class="form-group col-md-4">
													<label>Colonia</label>	
													<select v-model="form.colNegocio" id="colNegocio" name="colNegocio" type="text" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('colNegocio') }">
													</select>
													<has-error :form="form" field="colNegocio"></has-error>
												</div>											
											</div>

											
											<div class="row">
												<div class="form-group col-md-4">
													<label>Calle y Número</label>	
													<input v-model="form.calNumNegocio" id="calNumNegocio" name="calNumNegocio" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('calNumNegocio') }" 
													placeholder="Calle y número del domicilio">
													<has-error :form="form" field="calNumNegocio"></has-error>
												</div>

												<div class="form-group col-md-4">
													<label>Domicilio Fiscal</label>	
													<input v-model="form.domFiscal" id="domFiscal" name="domFiscal" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('domFiscal') }" 
													placeholder="Calle y número del domicilio">
													<has-error :form="form" field="domFiscal"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Sector</label>	
													<select v-model="form.sector" id="sector" name="sector" type="text" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('sector') }">
														<option disabled value="" selected>Seleccione una opciòn</option>
														<option value="Industria">Industria</option>
														<option value="Comercio">Comercio</option>
														<option value="Servicios">Servicios</option>
													</select>
													<has-error :form="form" field="sector"></has-error>
												</div>
											</div>

											<div class="row">
												<div class="form-group col-md-4">
													<label>Actividad Empresarial</label>	
													<input v-model="form.actEmpresarial" id="actEmpresarial" name="actEmpresarial" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('actEmpresarial') }" 
													placeholder="¿Que tipo de negocio es/será?">
													<has-error :form="form" field="actEmpresarial"></has-error>
												</div>
												<div class="form-group col-md-8">
													<label>Productos o Servicios</label>	
													<input v-model="form.proOfrece" id="proOfrece" name="proOfrece" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('proOfrece') }" 
													placeholder="¿Que tipo de productos o servicios ofrece/ofrecerá?">
													<has-error :form="form" field="proOfrece"></has-error>
												</div>
											</div>
											
											<div class="row">
												<div class="form-group col-md-4">
													<label>Experiencia Empresarial</label>	
													<input v-model="form.expEmpresario" id="expEmpresario" name="expEmpresario" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('expEmpresario') }" 
													placeholder="Tiempo que tiene de experiencia">
													<has-error :form="form" field="expEmpresario"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Experiencia en la Actividad</label>	
													<input v-model="form.expActividad" id="expActividad" name="expActividad" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('expActividad') }" 
													placeholder="Tiempo que tiene de experiencia">
													<has-error :form="form" field="expActividad"></has-error>
												</div>
												<div class="form-group col-md-4">
													<label>Inicio de Operaciones</label>
													<VueCtkDateTimePicker
													 v-model = "form.iniOperaciones" 
													 formatted = "LL"
													 :autoClose = true
													 :only-date = true
													 :noButtonNow = true
													 :noKeyboard = true
													 :noLabel = true
													 :right = true>
													<input id="iniOperaciones" name="iniOperaciones" placeholder="Seleccione una fecha" type="text" readonly="readonly" class="form-control" :class="{ 'is-invalid': form.errors.has('iniOperaciones') }" />
													</VueCtkDateTimePicker>									
													<has-error :form="form" field="iniOperaciones"></has-error>
												</div>
											</div>
											
											<div class="row">
												<div class="form-group col-md-6">
													<label>Superficie del Negocio</label>	
													<vue-numeric currency="M²" separator="," currency-symbol-position="suffix" v-model="form.supNegocio"
														id="supNegocio" name="supNegocio" type="text" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('supNegocio') }" 
														placeholder="100 M²" onKeyPress="return soloNumeros(event)">
													</vue-numeric>
													<has-error :form="form" field="supNegocio"></has-error>
												</div>
												<div class="form-group col-md-6">
													<label>Local Donde se Localizara</label>	
													<select v-model="form.perteneceA" id="perteneceA" name="perteneceA" type="text" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('perteneceA') }">
														<option disabled value="" selected>Seleccione una opción</option>
														<option value="Bodega">Bodega</option>
														<option value="Local">Local</option>
														<option value="Casa">Casa</option>
														<option value="Mercado">Mercado</option>
													</select>	
													<has-error :form="form" field="perteneceA"></has-error>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /.box-primary -->
							</tab-content>

							<tab-content title="Justificación y Destino del Crédito" icon="fas fa-book">
								<div class="box box-primary">	
									<div class="container">
										<div class="box-body">	
											<div class="row">                       	
												<div class="form-group col-md-12">
													<label>Justificación del Crédito</label>	
													<textarea v-model="form.justCredito" rows="3" id="justCredito" name="justCredito" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('justCredito') }" 
													placeholder="Describa brevemente..."></textarea>
													<has-error :form="form" field="justCredito"></has-error>
												</div>										
											</div>

											<div class="row">
												<div class="form-group col-md-8">
													<label>Capital de Trabajo</label>	
													<input v-model="form.capTrabajo" id="capTrabajo" name="capTrabajo" type="text" 
													class="form-control" :class="{ 'is-invalid': form.errors.has('capTrabajo') }" 
													placeholder="¿Cuales son algunos de sus capitales?">
													<has-error :form="form" field="capTrabajo"></has-error>
												</div>
												<div class="form-group col-md-2">
													<label>Monto</label>	
													<vue-numeric currency="$" separator="," v-model="form.monto"
														id="monto" name="monto" v-bind:precision="2" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('monto') }" 
														placeholder="$100,000" onKeyPress="return auxMoney(event)">
													</vue-numeric>
													<has-error :form="form" field="monto"></has-error>
												</div>
												<div class="form-group col-md-2">
													<label>Plazo</label>	
													<select v-model="form.plazo" id="plazo" name="plazo" type="text" 
														class="form-control" :class="{ 'is-invalid': form.errors.has('plazo') }">
														<option disabled value="" selected>Seleccione una opciòn</option>
														<option value="12 Meses">12 Meses</option>
														<option value="18 Meses">18 Meses</option>
														<option value="24 Meses">24 Meses</option>
														<option value="30 Meses">30 Meses</option>
														<option value="36 Meses">36 Meses</option>
													</select>
													<has-error :form="form" field="plazo"></has-error>
												</div>
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
					//STEP1
					id: '',
                    nomSolicitante: '',
                    fecNacimiento: '',
					lugNacimiento: '',
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

					//STEP4
					calNumPar: '',
					colParticular: '',
					munParticular: '',
					cpParticular: '',
					tipVivParticular: '',
					antLocParticular: '',
					tipDomParticular: '',
					valProParticular: '',

					//STEP5
					calNumNegocio: '',
					colNegocio: '',
					munNegocio: '',
					cpNegocio: '',
					domFiscal: '',
					sector: '',
					actEmpresarial: '',
					proOfrece: '',
					expEmpresario: '',
					expActividad: '',
					iniOperaciones: '',
					supNegocio: '',
					perteneceA: '',

					//STEP6
					justCredito: '',
					capTrabajo: '',
					monto: '',
					plazo: ''
				}),
			}
		},

		methods: {
			//CREAR REGISTROS
            createGenerales(){
                this.$Progress.start();
                this.form.post('generales')
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
				this.$router.push({path: 'creditos/'});
            })
        }
	}  	
</script>