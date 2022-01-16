<template>
    <div>
        <h1>{{ message }}</h1>
        <BaseFileUploader></BaseFileUploader>
    </div>
</template>
<script>
import BaseFileUploader from './components/Base/BaseFileUploader'
export default {
    components: {
        BaseFileUploader,
    },
    data() {
        return {
            message: 'hello world'
        }
    }
}
</script>