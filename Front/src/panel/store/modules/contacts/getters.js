const getters = {
    getContactsAll(state) {
        return state.contacts
    },

    getContactById: (state) => (id) => {
        return state.contacts.find(contact => contact.id == id)
    }
}

export default getters