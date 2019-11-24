import axios from 'axios'
import * as types from '../mutation-types'

// state
export const state = {
  users: null
}

// getters
export const getters = {
  users: state => state.users
}

// mutations
export const mutations = {
  [types.UPDATE_USERS] (state, { upUser }) {
    state.users = upUser
  },

  [types.DESTROY_USER] (state, { delUser }) {
    state.users = delUser
  }
}

// actions
export const actions = {
  async fetchUsers ({ commit }) {
    try {
      const { data } = await axios.get('/api/users')
      commit(types.SUCCCESS_USERSFETCH, { users: data })
    } catch (e) {
      commit(types.ERROR_USERSFETCH)
    }
  },

  updateUser ({ commit }, payload) {
    commit(types.UPDATE_USERS, payload)
  },

  destroyUser ({ commit }, payload) {
    commit(types.DESTROY_USER, payload)
  }
}
