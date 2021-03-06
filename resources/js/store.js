import axios from 'axios'
import { createStore } from 'vuex'

const state = () => {
    return {
        companies: [],
        showCompany: {      // current company being shown
            pitch_deck: {
                file: null
            },
        },
        company: {  // company being created
            id: null,
            name: null,
            website: null,
            location: null,
            twitter: null,
            facebook: null,
            instagram: null,
            linked_in: null
        },
        highlights: [   // highlights being created
            null
        ],
        pitchDeck: {    // pitch deck bring created
            file: null,
            title: null
        },
    }
}

const mutations = {
    setCompanies(state, payload) {
        state.companies = payload
    },
    setShowCompany(state, payload) {
        state.showCompany = payload
    },
    updateCompany(state, payload) {
        state.company = payload
    },
    updateHighlights(state, payload) {
        state.highlights = payload
    },
    updatePitchDeck(state, payload) {
        state.pitchDeck = payload
    },
    // reset the store's pitchdeck and company objects
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
    getCompany({commit}, id) {
        axios.get(`/api/company/${id}`)
            .then((res) => commit('setShowCompany', res.data));
    },
    createCompany({commit, state}) {
        return axios.post('/api/company', state.company)
            .then((res) => commit('updateCompany', { ...state.company, id: res.data.id }));
    },
    createHighlights({commit, state}) {
        return axios.post('/api/highlights', {
            highlights: state.highlights,
            company_id: state.company_id
        })
    },
    createPitchDeck({commit, state}, company_id) {
        var formData = new FormData();
        formData.append("file", state.pitchDeck.file)
        formData.append("company_id", company_id)
        formData.append("title", state.pitchDeck.title)
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