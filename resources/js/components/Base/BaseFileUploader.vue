<template>
<div>
    <h2>Upload files</h2>
    <file-pond
        name="image"
        ref="pond"
        label-idle="Click to choose image, or drag here..."
        label-file-type-not-allowed="Accepted file types are powerpoint or pdf"
        :accepted-file-types="acceptedFileTypes"
        server="/api/pitch-deck"/>
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
            ] 
        }
    }
}
</script>