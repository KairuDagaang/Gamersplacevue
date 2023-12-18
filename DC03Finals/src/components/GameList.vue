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

.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.card-body {
  padding: 10px;
}

.card-title {
  text-align: center;
  color: white;
  background-color: #000000;
  padding: 0;
  border-radius: 5px;
  margin-bottom: 15px;
}

.card-text {
  text-align: center;
  font-weight: bold;
  color: rgb(233, 233, 233);
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
        <img :src="game.image">
        <div class="card-body">
            <h1 class="card-title fw-bold">{{game.title}}</h1>
            <p class="card-text fw-bold">{{game.description}}</p>
            <a :href="game.link" class="btn btn-primary mt-2 ml-10">Go to game</a>
        </div>
    </div>
</template>

<script setup>
    const props = defineProps({
        game: Object
    })
</script>