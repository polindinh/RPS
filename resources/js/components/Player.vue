<template>
    <div>
        <p>Player: {{playerMove}}</p>
        <img :src="playerMoveImage" alt="Image">

    </div>
</template>

<script>
    export default {
        name:'Player',
        data: function() {
            return {
                playerMove: "Pick a move to start",
                playerMoveImage:"images/Paper.png",
            }
        },
        mounted: function() {
            this.$root.$on('PlayerMovePicked', this.getPlayerMove)
        },
        methods: {
            getPlayerMove: function(value){
                this.playerMove = value;
                this.playerMoveImage = "images/"+value+".png";
                this.$root.$emit('computerMove', this.playerMove);
            },
        }

    }
</script>

<style scoped>
  img{
        width:250px;
        height: 250px;
        margin: 0 auto;
    }
     p{
        text-align: center;
        margin-bottom: 30px;

    }
</style>
