<template>
    <div>
        <p>Computer: {{compMove}}</p>
    </div>
</template>

<script>
    export default {
        name:'Computer',
        data: function() {
            return {
                compMove: "Do you think you can beat me ?"
            }
        },
        mounted: function() {
            this.$root.$on('computerMove', this.getCompMove)
        },
        methods: {
            getCompMove: function(){
                axios.get('/move')
                .then(response => {
                    this.compMove = response.data.move;
                    var ComputerMove = response.data.move
                    this.$root.$emit('computerPicked', ComputerMove);
                    // console.log(this.compMove);


                })
                .catch(error => {
                    // console.log(error);
                    this.compMove = 'Error getting that sweet sweet Kanye Quote';
                });
            }
        }
    }
</script>

<style scoped>

</style>
