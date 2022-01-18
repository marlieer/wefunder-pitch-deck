<template>
    <div>
        <CompanyBasicsCreate></CompanyBasicsCreate>
        <HighlightsCreate></HighlightsCreate>
        <PitchDeckCreate></PitchDeckCreate>
    </div>
</template>
<script>
import CompanyBasicsCreate from './CompanyBasicsCreate'
import HighlightsCreate from '../Highlights/HighlightsCreate'
import PitchDeckCreate from '../PitchDeck/PitchDeckCreate'
export default {
    components: {
        CompanyBasicsCreate,
        PitchDeckCreate,
        HighlightsCreate
    }
}
</script>