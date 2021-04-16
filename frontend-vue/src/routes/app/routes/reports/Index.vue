<template>
  <div>
    <router-view></router-view>
  </div>
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
    this.setModule('reports.name')
  },
  methods: {
    ...mapMutations('app', ['setModule']),
  },
}

</script>
