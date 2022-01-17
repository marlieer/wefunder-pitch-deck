<template>
    <div class="header">
        <a href="/">Back to company profiles</a>
        <a href="#update-pitch-deck" class="button secondary-button">Upload a new pitch deck</a>
    </div>
    <h1>{{ company.name }}</h1>
    <p class="location">{{ company.location }}</p>
    <div class="content-wrapper">
        <PitchDeckShow :pitchDeck="company.pitch_deck"></PitchDeckShow>
        <HighlightsShow :highlights="company.highlights"></HighlightsShow>
    </div>
    <PitchDeckUpdate></PitchDeckUpdate>
</template>
<script>
import { mapState, mapActions } from 'vuex'
import PitchDeckShow from '../../components/PitchDeck/PitchDeckShow'
import PitchDeckUpdate from '../../components/PitchDeck/PitchDeckUpdate'
import HighlightsShow from '../../components/Highlights/HighlightsShow'
export default {    
    components: {
        PitchDeckShow,
        HighlightsShow,
        PitchDeckUpdate
    },
    computed: {
        ...mapState({
            company: state => state.showCompany
        })
    },
    created() {
        this.getCompany(this.$route.params.id)
    },
    methods: {
        ...mapActions([ 'getCompany' ]),
    }

}
</script>
<style lang="scss" scoped>
@import '../../../../resources/sass/app.scss';
div.content-wrapper {
    display: flex;
    flex-direction: column;
    margin: 3rem auto;
}
div.header {
    display: flex;
    justify-content: space-between;
    margin: 2rem;
}
h1 {
    margin-bottom: 0
}
p.location {
    text-align: center;
}

@media (min-width: 1440px) {
    div.content-wrapper {
        max-width: 1400px;
    }
}
</style>