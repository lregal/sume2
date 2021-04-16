import state from './state'
import getters from './getters'
import mutations from './mutations'
import actions from './actions'

let notifications = {
  namespaced: true,
  state,
  getters,
  mutations,
  actions,
}

export default notifications
