<template>
<div>
    <file-pond
        name="image"
        class="file-uploader"
        ref="pond"
        label-idle="Drag files here or click to choose..."
        label-file-type-not-allowed="Acceptes pdf only"
        :accepted-file-types="acceptedFileTypes"
        @addfile="uploadFile"/>
</div>
</template>
<script>
import vueFilePond from 'vue-filepond'
import "filepond/dist/filepond.min.css"
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type'

const FilePond = vueFilePond(FilePondPluginFileValidateType);

export default {
    components: {
        FilePond    // file-pond
    },
    data() {
        return {
            acceptedFileTypes: [    // accepts pdf 
                "application/pdf", 
            ],
            file: null
        }
    },
    methods: {
        uploadFile() {
            this.$emit('file-upload', this.$refs.pond.getFile().file)
        }
    }
}
</script>
<style scoped>
.file-uploader:hover{
    cursor:pointer;
}
</style>