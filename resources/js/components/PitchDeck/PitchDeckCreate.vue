<template> 
<BaseModal name="add-pitch-deck">  
    <h3 v-if="isCreate">Upload your pitch deck (accepts pdf)</h3>
    <h3 v-else>Upload a new pitch deck for {{ showCompany.name }} (accepts pdf)</h3>
    <input :value="pitchDeck.title" placeholder="Title for your pitch deck" @input="updateTitle"/>
    <p class="warning" v-if="errors.title">{{ errors.title }}</p>
    <BaseFileUploader @addfile="updateFile" @removefile="updateFile(null)"></BaseFileUploader>
    <div class="footer">
        <a v-if="isCreate" href="#add-company" class="button cancel-button">Back</a>
        <a v-else href="#" class="button cancel-button">Cancel</a>
        <button class="primary-button" @click="submit()" :disabled="disabled">Finish</button>
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
    props: [
        'isCreate' // creating new pitch deck? Otherwise it'll be updating
    ],
    data() {
        return {
            errors: {
                title: null
            }
        }
    },
    computed: {
        ...mapState(['pitchDeck', 'company', 'showCompany']),
        disabled() {
            return !this.pitchDeck.file || this.errors.title
        }
    },
    methods: {
        ...mapMutations([ 'updatePitchDeck', 'clearStore' ]),
        ...mapActions([ 'createCompany', 'createPitchDeck' ]),
        updateTitle(e) {
            // simple validation
            this.errors.title = e.target.value.length > 255 ? "Pitch deck title cannot exceed 255 characters" : null
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
            if(this.isCreate) {
                this.create()
            } else {
                this.update()
            }
        },
        create() {
            this.createCompany()
                .then(() => this.createPitchDeck(this.company.id))
                .then(() => this.$router.push({
                    name: 'company',
                    params: { id: this.company.id }
                }))
                .then(() => this.clearStore())
        },
        update() {
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