<template>
    <div class="container">
        <Header/>
        <Score/>
        <div id="moves">
            <Player/>
            <Computer/>
        </div>
        <Moves/>
        <!-- <Footer/> -->
    </div>
</template>

<script>
import Computer from "./Computer.vue";
import Player from "./Player.vue";
import Moves from "./Moves.vue";
import Score from "./Score.vue";
import Header from "./Header.vue";
// import Footer from "./Footer.vue";

    export default {
        name: 'Root',
        components:{
            Computer,
            Player,
            Moves,
            Score,
            Header,
            // Footer,
        }
    };
</script>

<style>
    .container {
        display:grid;
        grid-template-rows: 1fr 1fr 1fr 1fr 1fr ;
        justify-items:center;
        justify-content:center;
        width:100vw;
        height:100vh;
        background-color: #2ac27e;

    }
    #moves{
        display:grid;
        grid-template-columns:1fr 1fr;
        justify-items:center;
        justify-content:center;
        column-gap:100px ;
        margin-bottom: 60px;
    }

    
</style>
