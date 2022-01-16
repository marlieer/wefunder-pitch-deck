import { createStore } from 'vuex'

const state = () => {
    return {
        companies: [],
    }
}

const mutations = {
    setCompanies(state, payload) {
        state.companies = payload
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