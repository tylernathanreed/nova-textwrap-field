Nova.booting((Vue, router, store) => {
    Vue.component('index-text-wrap', require('./components/IndexField'))
    Vue.component('detail-text-wrap', require('./components/DetailField'))
    Vue.component('form-text-wrap', require('./components/FormField'))
})