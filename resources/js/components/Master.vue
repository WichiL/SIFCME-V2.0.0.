<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      :clipped="$vuetify.breakpoint.lgAndUp"
      app
      src="img/fondoSidebar.png"
      >
       <template v-slot:prepend>
        <v-card color="#9F2A2A">
          <v-layout column align-center>
            <v-flex class="mt-5">
              <v-avatar size="100">
                <v-img src="/img/profile.png"></v-img>
              </v-avatar>            
            </v-flex>
            <p class="text-center title">
              {{ user.name }}
            </p>
            <p class="text-center overline">
              {{ user.email }}
            </p>
          </v-layout> 
        </v-card>     
      </template>
      <v-list dense>
        <template v-for="item in items">
          <v-row
            v-if="item.heading"
            :key="item.heading"
            align="center"
          >
            <v-col cols="6">
              <v-subheader v-if="item.heading">
                <strong><h4>{{ item.heading }}</h4></strong>
              </v-subheader>
            </v-col>
              <v-divider></v-divider>
          </v-row>
          <v-list-group
            v-else-if="item.children"
            :key="item.text"
            v-model="item.model"
            :append-icon="item.model ? item.icon : item['icon-alt']"
            :prepend-icon="item.icon1"
          >
            <template v-slot:activator>
              <v-list-item>
                <v-list-item-content>
                  <v-list-item-title align="center">
                    {{ item.text }}
                  </v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </template>
            <v-list-item
              v-for="(child, i) in item.children"
              :key="i"
              :to="child.path"
              link
            >
              <v-list-item-action v-if="child.icon">
                <v-icon>{{ child.icon }}</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>
                  {{ child.text }}
                </v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-list-group>
          <v-list-item
            v-else
            :key="item.text"
            :to="item.path"
            link
          >
            <v-list-item-action>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>
                {{ item.text }}
              </v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </template>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar
      :clipped-left="$vuetify.breakpoint.lgAndUp"
      app
      >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
      <v-toolbar-title
        style="width: 300px"
        class="ml-0 pl-4"
      >
        <span class="hidden-sm-and-down">{{ appName }}</span>
      </v-toolbar-title>
      <v-text-field
        flat
        solo-inverted
        hide-details
        prepend-inner-icon="mdi-magnify"
        label="Search"
        class="hidden-sm-and-down"
      />
      <v-spacer />
      <v-tooltip bottom>
        <template v-slot:activator="{ on }">
          <v-btn icon v-on="on">
            <v-icon>mdi-apps</v-icon>
          </v-btn>
        </template>
        <span>Opciones</span>
      </v-tooltip>

      <v-tooltip bottom>
        <template v-slot:activator="{ on }">
          <v-btn icon v-on="on">
            <v-icon>mdi-bell</v-icon>
          </v-btn>
        </template>
        <span>Notificaciones</span>
      </v-tooltip>

      <v-tooltip bottom>
        <template v-slot:activator="{ on }">
          
        </template>
        <span>Cuenta</span>
      </v-tooltip>

      <v-menu 
        :close-on-content-click="true"
        :nudge-width="200"
        open-on-hover
        offset-x>
        <template v-slot:activator="{ on: menu }">
          <v-tooltip bottom>
            <template v-slot:activator="{ on: tooltip }">
              <v-btn icon dark v-on="{ ...tooltip, ...menu }">
                <v-icon>mdi-account</v-icon>
              </v-btn> 
            </template>
            <span>Cuenta</span>
          </v-tooltip>
        </template>
        <v-card>
          <v-card color="#9F2A2A">
            <v-list-item >
              <v-list-item-avatar>
                <img src="img/profile.png" alt="Imagen de perfil">
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title><b>{{ user.name }}</b></v-list-item-title>
                <v-list-item-subtitle>{{ user.rol }}</v-list-item-subtitle>
                <v-list-item-subtitle>{{ user.email }}</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
         

          <v-list>
            <v-list-item link :to="{ name: 'settings.profile' }">
            <v-list-item-action>
              <v-icon>mdi-settings</v-icon>
            </v-list-item-action>
              <v-list-item-title>Perfil</v-list-item-title>
            </v-list-item>
            <v-list-item link @click.prevent="logout">
            <v-list-item-action>
              <v-icon>mdi-logout</v-icon>
            </v-list-item-action>
              <v-list-item-title>Cerrar Sesión</v-list-item-title>
            </v-list-item>
          </v-list>
        </v-card>
      </v-menu>
    </v-app-bar>
    
    <v-content>
      <v-container
        class="fill-height mt-8" 
        fluid
       >
        <v-row
          align="center"
          justify="center"
        >
          <child />
        </v-row>
      </v-container>
    </v-content>

    <v-footer
      padless
      color="#9F2A2A"
      

      >
      <v-row
        justify="center"
        no-gutters
      >
        <v-btn
          v-for="(link, l) in links"
          :key="l"
          text
          rounded
          :to="link.path"
          class="my-2"
        >
          {{ link.text }}
        </v-btn>
      </v-row>
    </v-footer>

  </v-app>
</template>

<script>
  import { mapGetters } from 'vuex'
  export default {
    props: {
      source: String,
    },
    data: () => ({
      dialog: false,
      drawer: null,
      appName: window.config.appName,
      
      links: [
        {text: 'DASHBOARD', path: '/dashboard', heading: 'Prueba'},  
        {text: 'USUARIOS', path: '/usuarios'},  
        {text: 'SOLICITUDES', path: '/solicitudes'},  
      ],
      items: [
        {  heading: 'General' },
        { icon: 'mdi-desktop-mac-dashboard', text: 'Dashboard', path: '/dashboard'},
        {
          icon: 'mdi-chevron-up',
          'icon-alt': 'mdi-chevron-down',
          icon1: 'mdi-face-profile',
          text: 'Solicitudes',
          model: false,
          children: [
            { icon: 'mdi-book-open-page-variant', text: 'Ver solicitudes', path:'/solicitudes' },
            { icon: 'mdi-note-plus', text: 'Crear Solicitud', path:'/nuevaSolicitud' },
          ],
        },
        { icon: 'mdi-account-multiple', text: 'Usuarios', path:'/usuarios' },
        {
          icon: 'mdi-chevron-up',
          'icon-alt': 'mdi-chevron-down',
          text: 'Administración',
          icon1: 'mdi-face-profile',
          model: false,
          children: [
            { icon: 'mdi-account-settings', text: 'Perfil', path: '/settings'},
            { icon: 'mdi-lock', text: 'Actualizar Contraseña', path: '/password'},
          ],
        },
      ],
    }),

    
    
    computed: mapGetters({
      user: 'auth/user'
    }),
    
    methods: {
      async logout () {
        // Log out the user.
        await this.$store.dispatch('auth/logout')

        // Redirect to login.
        this.$router.push({ name: 'login' })
      }
    },
     created () {
      this.$vuetify.theme.dark = true
    },
  }
</script>