<template>

    <div class="wrapper">
        <UserList v-for='u in users' :user='u'/>
    </div>

</template>

<script setup>
import { onMounted, ref } from 'vue';
import { useRoute, useRouter } from 'vue-router';

import UserList from '../components/UserList.vue';

const users = ref([]);

onMounted(()=>{
    fetch('http://localhost:8000/api/users')
        .then(response=>response.json().then((data)=> users.value = data))
});
</script>

<style scoped>
.wrapper {
  width: 100%;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

</style>