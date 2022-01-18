<template>
<div>
    <file-pond
        name="image"
        class="file-uploader"
        ref="pond"
        label-idle="Drag files here or click to choose..."
        label-file-type-not-allowed="Acceptes pdf only"
        :allowMultiple="false"
        :accepted-file-types="acceptedFileTypes"
        @addfile="addFile"
        @removefile="$emit('removefile')"
        @error="throwError()"/>
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
            file: null,
            errors: false,
        }
    },
    methods: {
        addFile() {
            // only add the file if there are no errors
            if(!this.errors) {
                this.$emit('addfile', this.$refs.pond.getFile().file)
            }
            // reset errors
            this.errors = false
        },
        throwError() {
            this.errors = true
            this.$emit('removefile')
        }
    }
}
</script>
<style scoped>
.file-uploader:hover{
    cursor:pointer;
}
</style>