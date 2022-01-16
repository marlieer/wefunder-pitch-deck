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
        var formData = new FormData();
        formData.append("file", state.pitchDeck.file)
        formData.append("company_id", state.company.id)
        return axios.post('/api/pitch-deck', formData, {
            headers: {
                'Content-type': 'multipart/form-data'
            } 
        });
    }
}

export default createStore({
    state,
    mutations,
    actions,
})