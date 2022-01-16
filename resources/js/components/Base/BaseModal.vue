<template>
    <div :id="name" class="overlay">
        <a href="#" class="close"></a>

        <div class="custom-modal">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['name'],
    }
</script>

<style lang="scss" scoped>
@import '../../../sass/app.scss';
    .close {
        position: relative;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
    }
    .overlay {
        visibility: hidden;
        position: fixed; /* Positioning and size */
        top: 0;
        left: 0;
        width: 100vw;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, .5);
        opacity: 0;
        z-index: 99;
    }
    .overlay:target {
        visibility: visible;
        opacity: 1;
    }
    .custom-modal {
        position: fixed;
        z-index: 100;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 40rem;
        background: $white;
        padding: 1rem 3rem 2rem;
        border-radius: $borderRadius;
        overflow-y: auto;
    }
    .overlay .cancel {
        position: absolute;
        width: 100%;
        height: 100%;
    }
</style>
