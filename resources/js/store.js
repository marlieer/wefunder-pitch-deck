import { createStore } from 'vuex'

const state = () => {
    return {
        companies: [],
        company: {
            name: null,
            website: null,
            location: null,
            twitter: null,
            facebook: null,
            instagram: null,
            linked_in: null
        }
    }
}

const mutations = {
    setCompanies(state, payload) {
        state.companies = payload
    },
    updateCompany(state, payload) {
        state.company = payload
    }
}

const actions = {
    getCompanies({commit}) {
        axios.get('/api/companies')
            .then((res) => commit('setCompanies', res.data));
    }
}

export default createStore({
    state,
    mutations,
    actions,
})