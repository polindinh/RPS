<template>
    <div id="moves-selection">
        <button class="btn btn-warning" @click="movePicked('Rock')" :disabled="checkVal">Rock</button>
        <button class="btn btn-warning" @click="movePicked('Paper')" :disabled="checkVal">Paper</button>
        <button class="btn btn-warning" @click="movePicked('Scissors')" :disabled="checkVal">Scissors</button>
        <br><br>
        <div>
            <h3>Make your move</h3>
        </div>

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
        mounted: function(){
            this.$root.$on('resetPlay', this.checkVal)
        },
        computed:{
            checkVal: function(data){
                if (data == 10){
                    return true;
                }
            }
        }
    }
</script>

<style scoped>
    h3{
        text-align: center;
    }
    button{
        margin:20px 60px;
    }
</style>
