import axios from 'axios'

const RESOURCE = '/contacts'

const actions = {
    setContacts({ commit }) {
        axios.get(RESOURCE)
            .then(response => {
                commit('SET_CONTACTS', response.data.data)
            })
    },

    newContact({ commit }, params) {
        axios.post(RESOURCE, params)
            .then(response => {
                commit('SET_CONTACT', response.data.data)
            })
    },

    updateContact({ commit }, params) {
        axios.put(`${RESOURCE}/${params.id}`, params)
            .then(response => {
                commit('PUT_CONTACT', response.data.data)
            })
    },

    deleteContact({ commit }, id) {
        axios.delete(`${RESOURCE}/${id}`)
            .then(() => {
                commit('DELETE_CONTACT', id)
            })
    }
}

export default actions