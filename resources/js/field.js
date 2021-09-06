Nova.booting((Vue, router, store) => {
  Vue.component('index-country-select', require('./components/IndexField'))
  Vue.component('detail-country-select', require('./components/DetailField'))
  Vue.component('form-country-select', require('./components/FormField'))
})
