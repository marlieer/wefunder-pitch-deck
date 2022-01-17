<template>
    <p class="pitch-deck-title">{{ pitchDeck.title }}</p>
    <pdf :src="pdfdata" v-for="i in numPages" :key="i" :id="i" :page="i"
        style="width:100%;margin:20px auto;"
        :resize="true">
    </pdf>
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
<style lang="scss" scoped>
p.pitch-deck-title {
    font-size: 24px;
}

</style>