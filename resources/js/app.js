import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import i18n from '~/plugins/i18n'
import App from '~/components/App'
import vuetify from '~/plugins/vuetify'
import * as vuemask from '~/plugins/vuemask'
import * as vueformwizard from '~/plugins/vueformwizard'
import * as moment from '~/plugins/moment'
import * as vcurrency from '~/plugins/vcurrency'
import { Form, HasError, AlertError } from 'vform'

import '~/plugins'
import '~/components'

import Swal from 'sweetalert2'
window.swal = Swal

window.axios = require('axios')

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3500
})

window.toast = Toast
window.Form = Form

Vue.config.productionTip = false
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

/* eslint-disable no-new */
new Vue({
  i18n,
  Swal,
  Toast,
  store,
  router,
  vuetify,
  vuemask,
  vueformwizard,
  moment,
  vcurrency,
  ...App
})
