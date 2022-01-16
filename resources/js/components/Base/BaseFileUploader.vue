<template>
<div>
    <file-pond
        name="image"
        class="file-uploader"
        ref="pond"
        label-idle="Drag files here or click to choose..."
        label-file-type-not-allowed="Accepted file types are powerpoint or pdf"
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
            acceptedFileTypes: [    // accepts powerpoint and pdf 
                "application/pdf", 
                "application/vnd.ms-powerpoint", 
                "application/vnd.openxmlformats-officedocument.presentationml.presentation"
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