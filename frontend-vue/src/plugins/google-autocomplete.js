import Vue from 'vue'
import VuetifyGoogleAutocomplete from 'vuetify-google-autocomplete'

Vue.use(VuetifyGoogleAutocomplete, {
  apiKey: 'AIzaSyALXY4Yl0nHvfWTPwBHdyI8aG29HcozG_k', // Can also be an object. E.g, for Google Maps Premium API, pass `{ client: <YOUR-CLIENT-ID> }`
  installComponents: true, // Optional (default: true) - false, if you want to locally install components
  vueGoogleMapsCompatibility: false, // Optional (default: false) - true, requires vue2-google-maps to be configured see https://github.com/xkjyeah/vue-google-maps
})
