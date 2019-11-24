<template>
<div class="row mt-5">
  <div class="col-md-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-edit"></i>
          Nueva Solicitud de Credito
        </h3>
      </div>
	    <div class="card-body pad table-responsive">
	    	<div class="row"><!-- /.ROW SOLICITUD DE CREDITO Y ESTRUCTURA DE INVERSION -->
			  <div class="col-md-6">
			    <div class="card card-success card-outline">
			      <div class="card-header">
			        <h3 class="card-title">
			          <i class="fas fa-edit"></i>
			          Solicitud de Crédito
			        </h3>
			      </div>
			      <div class="card-body pad table-responsive">
			      	<div class="info-box">
					  <!-- <span class="info-box-icon bg-danger"><i class="far fa-times-circle"></i></span>
					  <div class="info-box-content">
					    <span class="info-box-text">Aún no se ha capturado nada</span>
					    <router-link to="/solicitud-credito">
					      <button type="button" class="btn btn-block btn-primary">Capturar</button>
		                </router-link>
					  </div> -->
					  <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <!-- <th>Fecha de Ingreso</th>
                      <th>Gestor/Promotor</th>
                      <th>Nombre Solicitante</th>
                      <th>Actividad</th>
                      <th>Monto Solicitud</th>
                      <th>Teléfono</th>
                      <th>Sector Económico</th>
                      <th>Ventanilla de Gestión</th>
                      <th>Programa</th>
                      <th>Correo Electrónico</th>
                      <th>Producto</th>
                      <th>Acciones</th> -->
                      <th hidden>id</th>
                      <th>Nombre</th>
                      <th>Fecha Nacimiento</th>
                      <th>CURP</th>
                      <th>RFC</th>                      
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td hidden>12</td>
                      <td>Luis Humberto</td>
                      <td>16 de Noviembre 1991</td>
                      <td>AURL911116HZSGBS01</td>
                      <td>AURL911116HZS</td>
                      <td>
                        <a href="#" @click="addInfoCredito(editarDG)">
                            <i class="fa fa-edit blue"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
					  <!-- /.info-box-content -->
					</div>
			      </div>
			      <!-- /.card -->
			    </div>
			  </div>
			  <!-- /.col -->
	
			  <div class="col-md-6">
			    <div class="card card-danger card-outline">
			      <div class="card-header">
			        <h3 class="card-title">
			          <i class="fas fa-edit"></i>
			          Estructura de Inversión
			        </h3>
			      </div>
			      <div class="card-body pad table-responsive">
			      	<div class="info-box">
					  <span class="info-box-icon bg-danger"><i class="far fa-times-circle"></i></span>

					  <div class="info-box-content">
					    <span class="info-box-text">Aún no se ha capturado nada</span>
					      <router-link to="/estructura-credito">
					      <button type="button" class="btn btn-block btn-primary">Capturar</button>
		                </router-link>
					  </div>
					  <!-- /.info-box-content -->
					</div>
			      </div>
			      <!-- /.card -->
			    </div>
			  </div>
			  <!-- /.col -->
			</div> <!-- /.ROW SOLICITUD DE CREDITO Y ESTRUCTURA DE INVERSION -->

			<div class="row"><!-- /.ROW DESCRIPCION DEL NEGOCIO Y DECLARACION PATRIMONIAL-->
			  <div class="col-md-6">
			    <div class="card card-danger card-outline">
			      <div class="card-header">
			        <h3 class="card-title">
			          <i class="fas fa-edit"></i>
			          Descripción del Negocio
			        </h3>
			      </div>
			      <div class="card-body pad table-responsive">
			      	<div class="info-box">
					  <span class="info-box-icon bg-danger"><i class="far fa-times-circle"></i></span>

					  <div class="info-box-content">
					    <span class="info-box-text">Aún no se ha capturado nada</span>
					      <router-link to="/negocio-credito">
					      <button type="button" class="btn btn-block btn-primary">Capturar</button>
		                </router-link>
					  </div>
					  <!-- /.info-box-content -->
					</div>
			      </div>
			      <!-- /.card -->
			    </div>
			  </div>
			  <!-- /.col -->

			  <div class="col-md-6">
			    <div class="card card-danger card-outline">
			      <div class="card-header">
			        <h3 class="card-title">
			          <i class="fas fa-edit"></i>
			          Declaración Patrimonial
			        </h3>
			      </div>
			      <div class="card-body pad table-responsive">
			      	<div class="info-box">
					  <span class="info-box-icon bg-danger"><i class="far fa-times-circle"></i></span>

					  <div class="info-box-content">
					    <span class="info-box-text">Aún no se ha capturado nada</span>
					      <router-link to="/patrimonial-credito">
					      <button type="button" class="btn btn-block btn-primary">Capturar</button>
		                </router-link>
					  </div>
					  <!-- /.info-box-content -->
					</div>
			      </div>
			      <!-- /.card -->
			    </div>
			  </div>
			  <!-- /.col -->
			</div> <!-- /.ROW DESCRIPCION DEL NEGOCIO Y DECLARACION PATRIMONIAL-->

			<div class="row"><!-- /.ROW INFORMACIÓN INGRESOS - EGRESOS Y ENTREGA DE EXPEDIENTES-->
			  <div class="col-md-6">
			    <div class="card card-danger card-outline">
			      <div class="card-header">
			        <h3 class="card-title">
			          <i class="fas fa-edit"></i>
			          Información Ingresos - Egresos
			        </h3>
			      </div>
			      <div class="card-body pad table-responsive">
			      	<div class="info-box">
					  <span class="info-box-icon bg-danger"><i class="far fa-times-circle"></i></span>

					  <div class="info-box-content">
					    <span class="info-box-text">Aún no se ha capturado nada</span>
					      <router-link to="/informacion-credito">
					      <button type="button" class="btn btn-block btn-primary">Capturar</button>
		                </router-link>
					  </div>
					  <!-- /.info-box-content -->
					</div>
			      </div>
			      <!-- /.card -->
			    </div>
			  </div>
			  <!-- /.col -->

			  <div class="col-md-6">
			    <div class="card card-danger card-outline">
			      <div class="card-header">
			        <h3 class="card-title">
			          <i class="fas fa-edit"></i>
			          Entrega de Expedientes
			        </h3>
			      </div>
			      <div class="card-body pad table-responsive">
			      	<div class="info-box">
					  <span class="info-box-icon bg-danger"><i class="far fa-times-circle"></i></span>

					  <div class="info-box-content">
					    <span class="info-box-text">Aún no se ha capturado nada</span>
					      <router-link to="/entrega-credito">
					      <button type="button" class="btn btn-block btn-primary">Capturar</button>
		                </router-link>
					  </div>
					  <!-- /.info-box-content -->
					</div>
			      </div>
			      <!-- /.card -->
			    </div>
			  </div>
			  <!-- /.col -->
			</div> <!-- /.ROW INFORMACIÓN INGRESOS - EGRESOS Y ENTREGA DE EXPEDIENTES-->

	    </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.col -->
</div>

</template>

<script>
export default {
	data() {
      return {
        datCreditos: {},
        form: new Form({
          id: this.$route.params.id,
        })
      }
	},
	methods: {
		//LISTAR DATOS GENERALES
      	loadDG(){
        	axios.get("generales").then(({ data }) => (this.creditos = data.data));
      },
	},
	created() {
        this.loadDG();
        Fire.$on('AfterCreate', () => {
            this.loadDG();
        })
    }
}
</script>