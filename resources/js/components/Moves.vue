<template>
    <div id="moves-selection">
        <button @click="movePicked('Rock')">Rock</button>
        <button @click="movePicked('Paper')">Paper</button>
        <button @click="movePicked('Scissors')">Scissors</button>
    </div>
</template>

<script>
    export default {
        name:'Moves',
        methods:{
            movePicked : function(data){
            this.$root.$emit('PlayerMovePicked', data);
            this.$root.$emit('updateScore',data);

            },

        },

    }
</script>

<style scoped>

</style>
