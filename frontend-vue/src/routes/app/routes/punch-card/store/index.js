import state from './state'
import getters from './getters'
import mutations from './mutations'
import actions from './actions'

let punchCard = {
  namespaced: true,
  state,
  getters,
  mutations,
  actions,
}

export default punchCard
