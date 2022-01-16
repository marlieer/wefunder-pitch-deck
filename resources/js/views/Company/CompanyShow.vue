<template>
    <div class="header">
        <a href="/">Back to company profiles</a>
        <a href="#update-pitchdeck" class="button secondary-button">Upload a new pitch deck</a>
    </div>
    <h1>{{ company.name }}</h1>
    <p class="location">{{ company.location }}</p>
</template>
<script>
import { mapState, mapActions } from 'vuex'
export default {    
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
</style>