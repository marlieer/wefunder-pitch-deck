import axios from 'axios'
import { createStore } from 'vuex'

const state = () => {
    return {
        companies: [],
        company: {
            id: null,
            name: null,
            website: null,
            location: null,
            twitter: null,
            facebook: null,
            instagram: null,
            linked_in: null
        },
        pitchDeck: {
            file: null,
            title: null
        },
    }
}

const mutations = {
    setCompanies(state, payload) {
        state.companies = payload
    },
    updateCompany(state, payload) {
        state.company = payload
    },
    updatePitchDeck(state, payload) {
        state.pitchDeck = payload
    },
    clearStore(state) {
        state.pitchDeck = {
            file: null,
            title: null
        },
        state.company = {
            id: null,
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

const actions = {
    getCompanies({commit}) {
        axios.get('/api/companies')
            .then((res) => commit('setCompanies', res.data));
    },
    createCompany({commit, state}) {
        return axios.post('/api/company', state.company)
            .then((res) => commit('updateCompany', { ...state.company, id: res.data.id }));
    },
    createPitchDeck({commit, state}) {
        return axios.post('/api/pitch-deck', { ...state.pitchDeck, id: state.company.id})
            .then(() => commit('clearStore'));
    }
}

export default createStore({
    state,
    mutations,
    actions,
})