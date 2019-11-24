<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Creditos</h3>

                <div class="card-tools">
  
                  <router-link to="/solicitud-credito" class="nav-link" active-class="active" exact>
                    <button class="btn btn-success">Nueva Solicitud <i class="fas fa-plus-square fa-fw"></i></button>
                  </router-link>
  
                 <!--  <router-link to="/nuevo-credito" class="nav-link" active-class="active" exact>
                    <button class="btn btn-primary">Descargar <i class="fas fa-file-download fa-fw"></i></button>
                  </router-link> -->
  
                </div>
              </div>
              <!-- /.card-header -->
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

                    <tr v-for="credito in creditos" :key="credito.id">
                      <td hidden>{{ credito.id }}</td>
                      <td>{{ credito.nomSolicitante }}</td>
                      <td>{{ credito.fecNacimiento }}</td>
                      <td>{{ credito.curp }}</td>
                      <td>{{ credito.rfc }}</td>
                      <td>
                        <a href="#" @click="addInfoCredito(credito)">
                            <i class="fa fa-edit blue"></i>
                        </a>
                        /
                        <a href="#" @click="deleteCredito(credito)">
                            <i class="fa fa-trash red"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
</template>


<script>
  export default {
    data() {
      return {
        editmode: false,
        creditos: {},
        form: new Form({
          id: '',
          nomSolicitante: '',
          fecNacimiento: '',
          curp: '',
          rfc: ''
        })
      }
    },
    methods: {

      //LISTAR REGISTROS
      loadCreditos(){
        axios.get("generales").then(({ data }) => (this.creditos = data.data));
      },

      //BORRAR REGISTROS
      deleteCredito(id){
        swal.fire({
          title: '¿Eliminar Solicitud?',
          text: "Esta acción no se puede revertir",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Borrar'
        }).then((result) => {

          if(result.value) {    
            this.form.delete('generales/'+id).then(()=>{
              swal.fire(
                '¡Eliminado Correctamente!',
                'El usuario seleccionado ha sido eliminado',
                'success'
              )
              Fire.$emit('AfterCreate'); 

            }).catch(()=>{
              swal.fire("¡Error al Eliminar!", "Fallo la eliminación del registro", "warning");
            })
          }
        })
      },
        //EDITAR REGISTROS
      addInfoCredito(creditoId){
        this.$emit("idCredito", creditoId );
				this.$router.push({path: '/nuevo-credito/'+creditoId.id});
      },
    },

    //ACCIONES A REALIZAR DESPUES DE AGREGAR REGISTROS
    created() {
        this.loadCreditos();
        Fire.$on('AfterCreate', () => {
            this.loadCreditos();
        })
    }
  }
</script>