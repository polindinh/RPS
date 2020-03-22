<template>
    <div>
        <p>Player: {{playerMove}}</p>
    </div>
</template>

<script>
    export default {
        name:'Player',
        data: function() {
            return {
                playerMove: "Please pick your move"
            }
        },
        mounted: function() {
            this.$root.$on('PlayerMovePicked', this.getPlayerMove)
        },
        methods: {
            getPlayerMove: function(value){
                this.playerMove = value;
                this.$root.$emit('computerMove', this.playerMove);

            }
        }

    }
</script>

<style scoped>

</style>
