<script setup>
import { RouterLink, RouterView } from 'vue-router'

</script>

<template>
<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/valorant" rel="stylesheet">
</head>
   <div class="container">
    <div class="Sidebar">
      <div class="ProjectHeader">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuTK_xtJiY6yVWxrq44tr4fWtydD6GAEiQCvkX6QNyTTA0lIhzi6-VfA7LhxylWlodWOQ&usqp=CAU">
        <div class="title">
          Gamersplace
        </div>
      </div>
      <nav class="Sidebar-link">
        <ul class="nav-list">
          <li>
            <RouterLink to="/" class="nav-link">
              <i class="fas fa-home icon"></i> Home
            </RouterLink>
          </li>
          <li>
            <RouterLink to="/users" class="nav-link">
              <i class="fas fa-user icon"></i> Users
            </RouterLink>
          </li>
          <li>
            <RouterLink to="/accounts" class="nav-link">
              <i class="fas fa-user-circle icon"></i> Accounts
            </RouterLink>
          </li>
          <li>
            <RouterLink to="/games" class="nav-link">
              <i class="fas fa-gamepad icon"></i> Games
            </RouterLink>
          </li>
        </ul>
      </nav>
      <div class="details">
        Gamersplace is the system 
        that acts as the homebase 
        for every user that wants 
        to explore any games.
        In other words, it is a gathering 
        place for gamers! <br /> <br />
        <small>Copyright &copy; 2023. All rights reserved.</small>
      </div>
    </div>
    <div class="main-content">
      <RouterView />
    </div>
  </div>
</template>

<style scoped>
.container {
  display: flex;
  height: 100vh; 
  background-image: url('https://cdn.dribbble.com/users/3770240/screenshots/11902405/media/fdd5693ff851f6d3c2d64b61ae9d0a38.gif');
  background-size:cover;

}

.Sidebar {
  width: 185px;
  background-color: #2A2A30;
  background-size: cover;
  padding: 10px;
  height: 97%; 
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
  display: flex;
  flex-direction: column; 
}

img {
  height: 110px;
  border-radius: 80px;
  margin-left: 35px;
  margin-bottom: 5px;
  width: 110px;
}

.ProjectHeader {
  margin-bottom: 20px;
}

.title {
  font-size: 24px;
  font-weight: bold;
  color: #E94646;
  text-align: center;
  font-family: 'VALORANT', sans-serif;
}

.Sidebar-link .nav-list {
  list-style: none;
  padding: 0;
}

.nav-link {
  display: flex;
  align-items: center;
  color: white;
  padding: 15px; 
  margin-top: 20px;
  font-size: 15px;
  font-family: 'VALORANT', sans-serif;
  text-decoration: none;
  transition: color 0.3s ease;
}

.nav-link i {
  margin-right: 10px; 
}

.nav-link:hover {
  color: #E94646;
  background-color: #1a1a1d;
}

.icon {
  width: 20px; 
  color: #E94646;
}

.details {
  color: #888; 
  font-size: 14px;
  line-height: 1.6; 
  margin-top: auto; 
}

.details small {
  display: block;
  margin-top: 10px;
  color: #aaa;
}

.main-content{
  overflow: auto;
}
</style>

