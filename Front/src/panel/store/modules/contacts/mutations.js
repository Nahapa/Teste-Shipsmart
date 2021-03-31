const mutations = {
    SET_CONTACTS(state, contacts) {
        state.contacts = contacts
    },

    SET_CONTACT(state, contact) {
        state.contacts.push(contact)
    },

    PUT_CONTACT(state, contact) {
        let index = state.contacts.findIndex(_contact => _contact.id == contact.id)
        state.contacts[index] = contact
    },

    DELETE_CONTACT(state, id) {
        let index = state.contacts.findIndex(_contact => _contact.id == id)
        state.contacts.splice(index)
    }
}

export default mutations