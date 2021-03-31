import axios from 'axios'

const RESOURCE = '/states'

const actions = {
    setStates({ commit }) {
        axios.get(RESOURCE)
            .then(response => {
                commit('SET_STATES', response.data.data)
            })
    }
}

export default actions