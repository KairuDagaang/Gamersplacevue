<template>

    <div class="wrapper">
        <AccountList v-for='a in accounts' :account='a'/>
    </div>

</template>

<script setup>
import { onMounted, ref } from 'vue';
import { useRoute, useRouter } from 'vue-router';

import AccountList from '../components/AccountList.vue';

const accounts = ref([]);

onMounted(()=>{
    fetch('http://localhost:8000/api/accounts')
        .then(response=>response.json().then((data)=> accounts.value = data))
});
</script>
