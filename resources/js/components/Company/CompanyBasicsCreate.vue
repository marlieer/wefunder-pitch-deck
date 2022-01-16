<template> 
<BaseModal name="add-company">  
    <h3>First, tell us some basics about your company</h3>
    <input v-model="name" placeholder="Company name"/>
    <input v-model="location" placeholder="Headquarter city, state"/>
    
    <div class="footer">
        <a href="#" class="button cancel-button">Cancel</a>
        <button class="primary-button">Next</button>
    </div>

</BaseModal>

</template>
<script>
import BaseModal from '../Base/BaseModal'
export default {
    components: {
        BaseModal
    }

}
</script>
<style lang="scss" scoped>
    div.footer {
        display: flex;
        justify-content: space-around;
        margin-top: 4rem;
    }
</style>