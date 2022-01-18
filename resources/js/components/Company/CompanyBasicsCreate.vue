<template> 
<BaseModal name="add-company">  
    <h3>First, tell us some basics about your company</h3>
    <input :value="company.name" placeholder="Company name" @input="updateName" max="255"/>
    <p class="warning" v-if="errors.name">{{ errors.name }}</p>
    <input :value="company.location" placeholder="Headquarter city, state" @input="updateLocation" max="255"/>
    <p class="warning" v-if="errors.location">{{ errors.location }}</p>
    
    <div class="footer">
        <a href="#" class="button cancel-button">Cancel</a>
        <button class="primary-button" :disabled="disabled" @click="next()">Next</button>
    </div>

</BaseModal>

</template>
<script>
import BaseModal from '../Base/BaseModal'
import { mapState, mapMutations } from 'vuex'
export default {
    components: {
        BaseModal
    },
    data() {
        return {
            errors: {
                name: null,
                location: null,
            }
        }
    },
    computed: {
        ...mapState({
            'company':  state => state.company
        }),
        disabled() {
            return !this.company.name || this.errors.name || this.errors.location
        }
    },
    methods: {
        ...mapMutations([
            'updateCompany'
        ]),
        updateName(e) {
            // simple validation
            this.errors.name = e.target.value.length > 255 ? "Company name cannot exceed 255 characters" : null
            this.updateCompany({
                ...this.company,
                name: e.target.value
            })
        },
        updateLocation(e) {
            //simple validation
            this.errors.location = e.target.value.length > 255 ? "Location cannot exceed 255 characters": null
            this.updateCompany({
                ...this.company,
                location: e.target.value
            })
        },
        next() {
            window.location.href = "#add-pitch-deck"
        }
    }

}
</script>
<style lang="scss" scoped>
    div.footer {
        display: flex;
        justify-content: space-around;
        margin-top: 4rem;
    }
</style>