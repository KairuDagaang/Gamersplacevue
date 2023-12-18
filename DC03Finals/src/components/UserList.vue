<style scoped>
.card {
  width: 300px;
  margin: 10px;
  border-radius: 15px;
  background-color: #2A2A30;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s ease-in-out;
  margin-bottom: 20px;
}

.card:hover {
  transform: translateY(-5px);
}

.card-body {
  padding: 10px;
}

.card-title {
  text-align: center;
  color: #E94646;
  font-family: 'VALORANT', sans-serif;
  background-color: #000000;
  padding: 5px;
  border-radius: 5px;
  margin-bottom: 15px;
  font-size: 20px;
}

.card-text {
  text-align: center;
  font-weight: bold;
  color: #a8a8a8;
  margin-bottom: 15px;
}

.btn {
  display: block;
  width: 50%;
  margin-left: 50px;
  text-align: center;
  padding: 8px 16px;
  border: none;
  border-radius: 5px;
  background-color: rgb(197, 72, 72);
  color: white;
  text-decoration: none;
  transition: 0.3s ease;
}

.btn:hover {
  background-color: rgba(197, 72, 72, 0.8);
}
</style>

<template>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h1 class="card-title fw-bold">User ID: {{user.id}}</h1>
            <p class="card-text fw-bold">First Name:{{user.fname}}</p>
            <p class="card-text fw-bold">Last Name: {{user.lname}}</p>
            <p class="card-text fw-bold">Location: {{user.location}}</p>
        </div>
    </div>
</template>

<script setup>
    const props = defineProps({
        user: Object,
    })
</script>