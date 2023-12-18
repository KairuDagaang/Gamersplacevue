<template>

    <div class="wrapper">
        <GameList v-for='g in games' :game='g'/>
    </div>

</template>

<script setup>
import GameList from '../components/GameList.vue';

const games = [
    {
        "id":1,
        "image":'https://m.media-amazon.com/images/M/MV5BNzU2YTY2OTgtZGZjZi00MTAyLThlYjUtMWM5ZmYzOGEyOWJhXkEyXkFqcGdeQXVyNTgyNTA4MjM@._V1_FMjpg_UX1000_.jpg',
        "title": 'Fortnite',
        "description": 'A free-to-play battle royale game developed by Epic Games. Known for its vibrant, cartoonish graphics and building mechanics, Fortnite drops players onto an island where they fight to be the last one standing among 100 competitors.',
        "link":'https://www.fortnite.com/?lang=en-US'
    },
    {
        "id":2,
        "image":'https://m.media-amazon.com/images/M/MV5BNmNhM2NjMTgtNmIyZC00ZmVjLTk4YWItZmZjNGY2NThiNDhkXkEyXkFqcGdeQXVyODU4MDU1NjU@._V1_FMjpg_UX1000_.jpg',
        "title": 'Valorant',
        "description": 'A tactical first-person shooter game developed by Riot Games. It combines precise gunplay with unique character abilities in 5v5 matches. Players select from a roster of agents, each with distinct abilities, and engage in team-based combat across various maps.',
        "link":'https://playvalorant.com/en-us/'
    },
    {
        "id":3,
        "image":'https://images.launchbox-app.com/104e37d1-167a-4ee8-b313-b1e6d1b566c7.jpg',
        "title":'Crossfire',
        "description":'A tactical first-person shooter developed by Smilegate Entertainment. It features fast-paced gameplay, offering multiple game modes and maps for players to engage in intense battles. The game emphasizes teamwork, strategy, and skillful shooting.',
        "link":'https://crossfire.z8games.com/'
    },
    {
        "id":4,
        "image":'https://m.media-amazon.com/images/M/MV5BMjZjODM2MDMtMGE2ZS00NWIyLTkzOWMtYjY0YTM3MzQ0ZjMzXkEyXkFqcGdeQXVyNTgyNTA4MjM@._V1_FMjpg_UX1000_.jpg',
        "title":'Call of Duty',
        "description":'A renowned series encompassing various games within different settings and storylines. It spans multiple genres from historical warfare to futuristic scenarios. Known for its high-quality graphics, immersive campaigns, and multiplayer modes, COD offers diverse gaming experiences.',
        "link":'https://www.callofduty.com/'
    },
    {
        "id":5,
        "image":'https://m.media-amazon.com/images/M/MV5BYjVkNDg2Y2QtZGZmOS00NGYwLTk1ODctNGVhNzZjZjk2ZDRlXkEyXkFqcGdeQXVyNzIyNjgxMDk@._V1_FMjpg_UX1000_.jpg',
        "title":'Farlight 84',
        "description":'An online multiplayer third-person shooter game set in a futuristic world. It involves battles between different factions on a post-apocalyptic Earth, combining elements of shooting, survival, and exploration. Players fight for resources and engage in combat using high-tech weapons and vehicles.',
        "link":'https://farlight84.farlightgames.com/'
    },
    {
        "id":6,
        "image":'https://www.stuff.tv/wp-content/uploads/sites/2/2021/08/apex-legends-main.jpg?w=1080',
        "title":'Apex Legends',
        "description":'A free-to-play battle royale game set in the Titanfall universe. It features squads of three players selecting unique characters called Legends, each with their own abilities. The game emphasizes teamwork, fast-paced action, and strategic decision-making within a shrinking play area.',
        "link":'https://www.ea.com/games/apex-legends'
    },
    {
        "id":7,
        "image":'https://www.impdb.org/images/a/a9/PUBG_Cover.jpg',
        "title":'PlayerUnknowns Battlegrounds',
        "description":'A battle royale game developed by PUBG Corporation. Players parachute onto an island, scavenging for weapons and equipment while battling to be the last one standing. The game shrinking play area forces encounters and strategic positioning, making it an intense and thrilling survival experience.',
        "link":'https://pubg.com/en-na'
    },
    {
        "id":8,
        "image":'https://m.media-amazon.com/images/M/MV5BYjBkNTJkOWUtNTg1ZS00NGZhLWIxMGUtOWE0ZDA0NzRkODM3XkEyXkFqcGdeQXVyMTA0MTM5NjI2._V1_.jpg',
        "title":'Overwatch',
        "description":'A team-based multiplayer first-person shooter developed by Blizzard Entertainment. In this vibrant and fast-paced game, players choose from a diverse roster of heroes, each with their own unique abilities and playstyles.',
        "link":'https://overwatch.blizzard.com/en-us/'
    },
    {
        "id":9,
        "image":'https://m.media-amazon.com/images/M/MV5BMWYxNGJhNmQtZmI4OS00NjQ1LThmNzAtY2JkYmQ5NjliNDgwXkEyXkFqcGdeQXVyODc0OTEyNDU@._V1_.jpg',
        "title":'League of Legends',
        "description":'a highly competitive multiplayer online battle arena (MOBA) developed by Riot Games. Players select from a vast roster of champions, each with distinct abilities, and engage in team-based matches. The objective is to destroy the opposing teams nexus while battling across lanes, defeating minions, and leveraging strategic teamwork.',
        "link":'https://www.leagueoflegends.com/en-ph/'
    },
    {
        "id":10,
        "image":'https://assets-prd.ignimgs.com/2021/12/07/dota-2-1638917128883.jpg',
        "title":'Dota 2',
        "description":'A renowned multiplayer online battle arena (MOBA) developed by Valve Corporation. Similar to other MOBAs, players select heroes with unique abilities and battle in teams of five to destroy the enemys ancient structure. The game emphasizes strategy, map control, and precise execution of hero abilities.',
        "link":'https://www.dota2.com/home'
    },
    {
        "id":11,
        "image":'https://cdn.vcgamers.com/news/wp-content/uploads/2022/06/csgo-1-1.jpg',
        "title":'Counter-Strike: Global Offensive',
        "description":'A tactical first-person shooter developed by Valve and Hidden Path Entertainment. Its a competitive multiplayer game where players engage in intense team-based battles, taking on the roles of terrorists or counter-terrorists across various game modes.',
        "link":'https://blog.counter-strike.net/'
    },
       {
        "id":12,
        "image":'https://image.api.playstation.com/vulcan/ap/rnd/202307/2619/4c5a041bc41518ee7d62c531bd21eb217369affae84b79df.png',
        "title":'Destiny 2: The Final Shape',
        "description":'an expansion within the Destiny 2 universe, introducing new storylines, missions, and content for players to explore. The expansion delves deeper into the ongoing narrative of Destiny 2, expanding upon the cosmic conflict between the Guardians and various adversaries seeking to control the universe.',
        "link":'https://www.bungie.net/7/en/Destiny/NewLight'
    }
]
</script>


<style scoped>
.wrapper {
  width: 100%;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

</style>