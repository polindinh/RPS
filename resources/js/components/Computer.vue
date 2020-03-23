<template>
    <div>
        <p>Computer: {{compMove}}</p>
        <img :src="moveImage" alt="Image">
    </div>
</template>

<script>
    export default {
        name:'Computer',
        data: function() {
            return {
                compMove: "Can you beat me ?",
                moveImage:"images/Paper.png",
            }
        },
        mounted: function() {
            this.$root.$on('computerMove', this.getCompMove)

        },
        methods: {
            getCompMove: function(){
                var self = this;
                axios.get('/move')
                .then(response => {
                    this.compMove = response.data.move;
                    this.moveImage = "images/"+response.data.move+".png";
                    var ComputerMove = response.data.move;
                    this.$root.$emit('computerPicked', ComputerMove);
                })
                .catch(error => {
                    this.compMove = "Error getting Computer's move";
                });
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
