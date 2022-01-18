<template> 
<BaseModal name="add-highlights">  
    <h3>What are some company highlights you are proud of?</h3>
    <input v-for="highlight, index in highlights" :value="highlight" @input="updateHighlight(index)"/>
    <a @click="addHighlight" href="javascript:void(0)" class="add-highlight-link">Add another highlight</a>
    
    <div class="footer">
        <a href="#add-company" class="button cancel-button">Back</a>
        <a href="#add-pitch-deck" class="button primary-button">Next</a>
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
            'highlights':  state => state.highlights
        })
    },
    methods: {
        ...mapMutations([
            'updateHighlights'
        ]),
        addHighlight() {
            this.updateHighlight(this.highlights.push(null)) // push empty highlight into the array
        },
        updateHighlight(value, index) {
            
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
    a.add-highlight-link {
        display: flex;
        justify-content: center;
    }
</style>