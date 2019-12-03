<template>
  <v-app id="inspire" dark>
    <v-content>
      <v-container
        class="fill-height"
      >
    
          <v-row
          align="center"
          justify="center"
        >
          <v-col
            cols="12"
            sm="8"
            md="4"
          >
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
                <v-list-item-title> <p class="title white-text">No se pudo iniciar sesión:</p> </v-list-item-title>
                <ul>
                  <div v-for="error in errors">
                    <li>{{ error }}</li>
                  </div>
                </ul>          
            </v-alert>
        </div>
            <v-card class="elevation-12">
              <v-toolbar
                color="#9F2A2A"
                dark
                
              >
                <v-toolbar-title><strong class="subheading text-center">SIFCME V2.0.0</strong></v-toolbar-title>
                <v-spacer />
              
              </v-toolbar>
              <v-card-text>
                <v-form @submit.prevent="login" @keydown="form.onKeydown($event)">
                  <v-text-field
                    label="Email"
                    name="email"
                    v-model="form.email"
                    prepend-icon="mdi-account"
                    type="text"
                  />   

                  <v-text-field
                    counter="10"
                    id="password"
                    label="Contraseña"
                    v-model="form.password"
                    name="password"
                    prepend-icon="mdi-lock"
                    type="password"
                  />
                  
                  <v-card-actions>
                    <v-spacer />
                    <v-btn type="submit" :loading="form.busy" color="primary">Iniciar Sesión</v-btn>
                  </v-card-actions>
                </v-form>
              </v-card-text>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-content>
    <template>
  <v-footer
    dark
    padless
    fixed
    elevation-15
  >
    <v-card
      class="flex"
      flat
      dense
    >
     
      <v-card-text class="py-2 white--text text-center">
       <strong class="subheading">SIFCME V. - 2 . 0 . 0</strong>

        <v-spacer></v-spacer>
        <strong>{{ new Date().getFullYear() }} — <strong>Todos los derechos reservados</strong></strong> 
      </v-card-text>
    </v-card>
  </v-footer>
</template>
  </v-app>
</template>


<script>
export default {
  layout: 'basic',
  middleware: 'guest',

  components: {
  },

  data: () => ({
    alert: false,
    form: new Form({
      email: '',
      password: ''
    }),
    errors: []
  }),

  methods: {
    async login () {
      try {
        this.alert = false       
        // Submit the form.
        const { data } = await this.form.post('/api/login')
        // Save the token.
        this.$store.dispatch('auth/saveToken', {
          token: data.token,
          remember: this.remember
        })

        // Fetch the user.
        await this.$store.dispatch('auth/fetchUser')

        // Redirect dashboard.
        this.$router.push({ name: 'dashboard' })
        
      } catch (error) {
        this.errors = error.response.data.errors
        this.alert = true
      }
    }
  },
   created () {
      this.$vuetify.theme.dark = true
    },
}
</script>
