<template>
  <v-container fluid fill-height style="min-height:80vh;background-color: white;">
    <v-layout justify-center align-center>
     <h1>DASHBOARD</h1>
    </v-layout>
  </v-container>
</template>
<script>
import {
  mapMutations,
} from 'vuex'

export default {
  data () {
    return {}
  },
  created () {
    this.setModule('dashboard.name')
    this.setPage(null)
  },
  methods: {
    ...mapMutations('app', [
      'setModule',
      'setPage',
    ]),
  },
}

</script>
