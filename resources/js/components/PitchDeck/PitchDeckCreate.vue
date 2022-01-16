<template> 
<BaseModal name="add-pitch-deck">  
    <h3>Upload your pitch deck (accepts pdf or powerpoint)</h3>
    <BaseFileUploader @file-upload="updateFile"></BaseFileUploader>
    <div class="footer">
        <a href="#add-company" class="button cancel-button">Back</a>
        <button class="primary-button" @click="submit()">Finish</button>
    </div>

</BaseModal>

</template>
<script>
import BaseModal from '../Base/BaseModal'
import BaseFileUploader from '../Base/BaseFileUploader'
import { mapState, mapMutations, mapActions } from 'vuex'
export default {
    components: {
        BaseModal, BaseFileUploader
    },
    computed: {
        ...mapState(['pitchDeck', 'company'])
    },
    methods: {
        ...mapMutations([ 'updatePitchDeck', 'clearStore' ]),
        ...mapActions([ 'createCompany', 'createPitchDeck' ]),
        updateTitle(e) {
            this.updatePitchDeck({
                ...this.pitchDeck,
                title: e.target.value
            })
        },
        updateFile(file) {
            this.updatePitchDeck({
                ...this.pitchDeck,
                file: file
            })
        },
        submit() {
            this.createCompany()
                .then(() => this.createPitchDeck())
                .then(() => this.$router.push({
                    name: 'company',
                    params: { id: this.company.id }
                }))
                .then(() => this.clearStore())
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