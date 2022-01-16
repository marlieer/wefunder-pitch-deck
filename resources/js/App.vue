<template>
    <div>
        <h1>{{ message }}</h1>
        <FileUplaoder></FileUplaoder>
    </div>
</template>
<script>
import FileUplaoder from './components/Base/FileUploader'
export default {
    components: {
        FileUplaoder,
    },
    data() {
        return {
            message: 'hello world'
        }
    }
}
</script>