import Vue from 'vue'

let actions = {
  getCompanyDataFiledsInfo ({ commit, getters, dispatch }) {
    commit('setLoadingStatus', true)
    Vue.http.get(getters.path('cdfi'))
      .then((response) => {
        commit('setCompanyDataFiledsInfo', response.body)
        commit('setLoadingStatus', false)
      }, (error) => {
        dispatch('openAlertBox', [
          'alertError',
          error.statusText,
        ], { root: true })
      })
  },
}

export default actions
