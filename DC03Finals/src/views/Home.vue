<template>
  <div class="wrapper">
    <div class="message">
        <h1>Hello Visitor!

        </h1>
            <h2>Welcome to GamersPlace - the ultimate hub for gaming enthusiasts worldwide!
            </h2>
                <h3>
                At GamersPlace, we're passionate about providing an online haven for gamers of all kinds. <br />
                Whether you're a competitive esports, a casual mobile gamer, or someone just <br />
                diving into the gaming universe, you've found your home here.
                </h3>
                <a href="/games" type="button" class="button">Explore</a>
    </div>
  </div>
</template>

<style scoped>
.wrapper {
  text-align: center;
  margin-top: 20vh; 
  margin-left: 100px;
}
.message {
    background-color: #2A2A30;
    border-radius: 5px;
    opacity: 0.7;
    padding: 50px;
}
 @keyframes scaleAnimation {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.1);
            }
        }
h1 {
  font-size: 2em;
  font-family: 'VALORANT', sans-serif;
  color: #E94646;
  animation: scaleAnimation 1.2s ease-in-out infinite alternate;
}

h2 {
  font-size: 1.5em;
  color: #cfcfcf;
  margin-top: 5vh;
}

h3 {
  font-size: 20px;
  color: #9e9e9e;
  margin-bottom: 50px;
  line-height: 1.5;
}
a {
    text-decoration: none;
}
.button {
    border-radius:5px;
    color:white;
    background-color:#E94646;
    font-family: 'VALORANT', sans-serif;
    border: none;
    padding:10px;
    width: 50px;
}
</style>
