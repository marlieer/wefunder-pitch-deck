<template>
    <pdf :src="pdfdata" v-for="i in numPages" :key="i" :id="i" :page="i"></pdf>
</template>
<script>
import pdf from 'pdfvuer'
export default {
    props: [
        'pitchDeck'
    ],
    components: {
        pdf
    },
    data() {
        return {
            numPages: 0,
            pdfdata: undefined,
        }
    },
    watch: {
        // Wait for the pitchDeck data to load before loading the pdf viewer
        pitchDeck() {
            var self = this;
            this.pdfdata = pdf.createLoadingTask(this.pitchDeck.file)
            this.pdfdata.then(pdf => {
                self.numPages = pdf.numPages
            })
        }
    }
}
</script>