import { createStore } from "vuex"

import address from './modules/address/address'
import contact from './modules/contacts/contact'
import form from './modules/forms/form'
import state from './modules/states/states'

const store = createStore({
    modules: {
        address,
        contact,
        form,
        state
    }
})

export default store