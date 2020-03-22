<template>
    <div class="container">
        <Score/>
        <Player/>
        <Computer/>
        <Moves/>
    </div>
</template>

<script>
import Computer from "./Computer.vue";
import Player from "./Player.vue";
import Moves from "./Moves.vue";
import Score from "./Score.vue";

    export default {
        name: 'Root',
        components:{
            Computer,
            Player,
            Moves,
            Score,
        }
    }
</script>
