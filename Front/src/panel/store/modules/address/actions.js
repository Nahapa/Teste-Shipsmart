import axios from 'axios'

const RESOURCE = '/address/cep'

const actions = {
    setAddressByCep({ commit }, params) {
        return new Promise((resolve) => {
            axios.get(`${RESOURCE}/${params}`)
                .then(response => {
                    commit('SET_ADDRESS', response.data.data)
                    resolve(true)
                })
        })
    },
}

export default actions