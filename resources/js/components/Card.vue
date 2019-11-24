<template>
  <div class="card">
    <div v-if="title" class="card-header">
      {{ title }}
    </div>

    <div class="card-body">
      <slot />
    </div>
  </div>
</template>

<script>
export default {
  name: 'Card',

  props: {
    title: { type: String, default: null }
  }
}
</script>


<v-card
            color="#9F2A2A"
            absolute
            > 
            <v-col cols="11">
                <v-row
                    align="center"
                    justify="space-between"
                    >
                    <v-card color="#9F2A2A" outlined>
                        <v-list-item>
                            <v-icon 
                                x-large
                                left
                                >
                                mdi-clipboard-account
                            </v-icon>            
                            <v-list-item-content class="mt-5 mb-3">
                                <v-list-item-title><h2>Usuarios</h2></v-list-item-title>
                                <v-list-item-subtitle>Control de usuarios</v-list-item-subtitle>
                            </v-list-item-content>
                        </v-list-item>
                    </v-card>
                    <!-- <v-card color="#9F2A2A">
                        <modal />    
                    </v-card> -->
                </v-row>
            </v-col>
        </v-card>
