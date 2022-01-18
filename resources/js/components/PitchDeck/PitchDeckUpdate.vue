<template> 
<BaseModal name="update-pitch-deck">  
    <h3>Upload a new pitch deck for {{ showCompany.name }}(accepts pdf)</h3>
    <input :value="pitchDeck.title" placeholder="Title for your pitch deck" @input="updateTitle"/>
    <BaseFileUploader @file-upload="updateFile"></BaseFileUploader>
    <div class="footer">
        <a href="#add-company" class="button cancel-button">Cancel</a>
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
        ...mapState(['pitchDeck', 'showCompany'])
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
            this.createPitchDeck(this.showCompany.id)
                .then(() => {
                    window.location.href = "#"  // close modal
                    window.location.reload()
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