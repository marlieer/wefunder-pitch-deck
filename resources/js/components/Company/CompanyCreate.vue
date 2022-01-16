<template>
    <div>
        <CompanyBasicsCreate></CompanyBasicsCreate>
        <PitchDeckCreate></PitchDeckCreate>
    </div>
</template>
<script>
import CompanyBasicsCreate from './CompanyBasicsCreate'
import PitchDeckCreate from '../PitchDeck/PitchDeckCreate'
export default {
    components: {
        CompanyBasicsCreate,
        PitchDeckCreate
    }
}
</script>