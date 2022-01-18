<template>
    <div class="top-right">
        <a href="#add-company" class="button secondary-button">Add your company</a>
    </div>
    <h1>Company Profiles</h1>
    <div class="companies-list-wrapper">
        <CompanyCard v-for="company in companies" :key="company.id" :company="company"/>
    </div>
    <CompanyCreate></CompanyCreate>
</template>
<script>
import { mapState, mapActions } from 'vuex'
import CompanyCard from '../../components/Company/CompanyCard.vue'
import CompanyCreate from '../../components/Company/CompanyCreate'
export default {
    components: {
        CompanyCard, CompanyCreate
    },
    data() {
        return {

        }
    },
    computed: {
        ...mapState([
            'companies'
        ]),
    },
    created() {
        this.getCompanies()
    },
    methods: {
        ...mapActions([
            'getCompanies'
        ])
    }
}
</script>
 <style scoped lang="scss">
 @import '../../../sass/app.scss';
 div.top-right {
     display: flex;
     justify-content: flex-end;
     margin: 2rem;
 }
div.companies-list-wrapper {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: auto;
}

@media (min-width: 1440px) {
    div.companies-list-wrapper {
        max-width: 1400px;
    }
}
</style>