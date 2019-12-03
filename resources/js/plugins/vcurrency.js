import Vue from 'vue'
import VCurrencyField from 'v-currency-field'

Vue.use(VCurrencyField, {
  locale: 'mx',
  decimalLength: 2,
  autoDecimalMode: true,
  min: null,
  max: null,
  defaultValue: 0
})
