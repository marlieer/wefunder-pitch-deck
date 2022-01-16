<template> 
<BaseModal name="add-company">  
    <h3>First, tell us some basics about your company</h3>
    <input :value="company.name" placeholder="Company name" @input="updateName"/>
    <input :value="company.location" placeholder="Headquarter city, state" @input="updateLocation"/>
    
    <div class="footer">
        <a href="#" class="button cancel-button">Cancel</a>
        <button class="primary-button">Next</button>
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
    computed: {
        ...mapState({
            'company':  state => state.company
        })
    },
    methods: {
        ...mapMutations([
            'updateCompany'
        ]),
        updateName(e) {
            this.updateCompany({
                ...this.company,
                name: e.target.value
            })
        },
        updateLocation(e) {
            this.updateCompany({
                ...this.company,
                location: e.target.value
            })
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