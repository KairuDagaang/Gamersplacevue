<template>
  <div class="wrapper">
    <div class="user-info">
      <div class="info-item">
        <span class="label">User ID:</span>
        <span class="value">{{ account.user_id }}</span>
      </div>
      <div class="info-item">
        <span class="label">Account Name:</span>
        <span class="value">{{ account.account_name }}</span>
      </div>
      <div class="info-item">
        <span class="label">IGN:</span>
        <span class="value">{{ account.ign }}</span>
      </div>
      <div class="info-item">
        <span class="label">Email:</span>
        <span class="value">{{ account.email }}</span>
      </div>
      <div class="info-item">
        <span class="label">Password:</span>
        <span class="value">{{ account.password }}</span>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
  account: Object,
});
</script>

<style scoped>
.wrapper {
  margin: 20px;
  width: 93%;
  border-radius: 8px;
  padding: 20px;
  background-color: #2A2A30;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.user-info {
  display: flex;
  flex-direction: row;
  gap: 15px;
}

.info-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.label {
  font-weight: bold;
  color: #E94646;
  font-family: 'VALORANT', sans-serif;
}

.value {
  margin-left: 10px;
  font-weight: bold;
  color: #aaaaaa;
}
</style>
