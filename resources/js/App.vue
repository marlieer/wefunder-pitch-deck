<template>
    <div class="main">
        <router-view></router-view>
    </div>
    <div class="footer">
        <p>Designed and implemened by Marlie Dueck. Full design can be found on figma <a target="blank" href="https://www.figma.com/file/n6FC7HqLQoqOs1tzlQmc63/Pitch-Deck?node-id=0%3A1">here</a></p>
    </div>
</template>
<script>
export default {

}
</script>
<style lang="scss" scoped>
@import '../sass/app.scss';
div.footer {
    margin-top: auto;
    display: flex;
    justify-content: center;
    background-color: $lightOrange;
    padding: 0.3rem;
}
</style>