<template>
    <div class="top-right">
        <button class="secondary-button" @click="createCompany()">Add your company</button>
    </div>
    <h1>Company Profiles</h1>
    <div class="companies-list">
        <CompanyCard v-for="company in companies" :key="company.id" :company="company"/>
    </div>
</template>
<script>
import { mapState } from 'vuex'
export default {
    data() {

    },
    computed: {
        ...mapState([
            'companies'
        ]),
    },
    methods: {
        createCompany() {
            window.location.href = "#add-company"
        }
    }
}
</script>
 <style scoped lang="scss">
 div.top-right {
     display: flex;
     justify-content: flex-end;
 }

</style>