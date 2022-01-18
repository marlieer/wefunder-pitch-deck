<template>
    <div class="company-wrapper">
        <h2>{{ company.name }}</h2>
        <p class="company-location">{{ company.location }}</p>
        <button class="primary-button" @click="goToCompany(company.id)">Learn More</button>
    </div>
</template>
<script>
export default {
    props: [
        'company'
    ],
    methods: {
        goToCompany(id) {
            this.$router.push({
                name: 'company',
                params: { id: id }
            })
        }
    }
}
</script>
<style lang="scss" scoped>
@import '../../../sass/app.scss';
h2 {
    margin-bottom: 0;
}
p.company-location {
    margin-top: 0.2rem;
}
p.list-continues {
    text-align: center;
    font-style: italic;
    color: $darkGrey;
    position: absolute;
    bottom: 5rem;
    left: 6rem;
}
div.company-wrapper {
    border-radius: $borderRadius;
    border: 1px solid $lightGrey;
    width: 20rem;
    padding: 1rem 2rem 9rem;
    margin: 1.8rem 1.5rem;
    box-shadow: $boxShadow;
    position: relative;
}
button {
    margin: auto;
    display: flex;
    position: absolute;
    bottom: 2rem;
    left: 6.5rem;
}
</style>