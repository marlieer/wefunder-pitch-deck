<template>
    <div class="company-wrapper">
        <h2>{{ company.name }}</h2>
        <p class="company-location">{{ company.location }}</p>
        <ol>
            <li v-for="highlight in company.highlights.slice(0,2)">{{ highlight.text }}</li>
        </ol>
        <button class="primary-button">Learn More</button>
    </div>
</template>
<script>
export default {
    props: [
        'company'
    ],
}
</script>
<style lang="scss" scoped>
@import '../../../../resources/sass/app.scss';
h2 {
    margin-bottom: 0;
}
p.company-location {
    margin-top: 0.2rem;
}
div.company-wrapper {
    border-radius: $borderRadius;
    border: 1px solid $lightGrey;
    width: 20rem;
    padding: 1rem 2rem;
    margin: 1.8rem 1.5rem;
    box-shadow: $boxShadow;
    position: relative;
    height: 20rem;
}
button {
    margin: auto;
    display: flex;
    position: absolute;
    bottom: 2rem;
    left: 5rem;
}
</style>