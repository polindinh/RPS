<template>
    <div>
        <p>Player: {{playerScore}}</p>
        <p>Computer: {{computerScore}}</p>
        <h2>{{winner}}</h2>

    </div>
</template>

<script>
    export default {
        name:'Score',
        data: function(){
            return{
                playerScore: 0,
                computerScore:0,
                compMove: '',
                playerMove:'',
                winner:'',
            }
        },
        mounted: function() {
            this.$root.$on('updateScore', this.notifyPlayer)
            this.$root.$on('computerPicked', this.notifyComp)
        },
        methods:{
            notifyPlayer: function(playerMovePicked){
                this.playerMove= playerMovePicked;
                console.log(this.playerMove);
            },
            notifyComp: function(compMovePicked){
                this.compMove= compMovePicked;
                console.log(this.compMove);
                if(compMovePicked==this.playerMove){
                    this.winner = 'Draw';
                } else if(this.playerMove=='Rock'){
                    if(compMovePicked=='Paper'){
                        this.computerScore++;
                        this.winner = 'Computer wins';
                    } else if(compMovePicked=='Scissors'){
                        this.playerScore++;
                        this.winner = 'Player wins';
                    }
                } else if(this.playerMove=='Paper'){
                    if(compMovePicked=='Rock'){
                        this.playerScore++;
                        this.winner = 'Player wins';
                    } else if(compMovePicked=='Scissors'){
                        this.computerScore++;
                        this.winner = 'Computer wins';
                    }
                } else if(this.playerMove=='Scissors'){
                    if(compMovePicked=='Paper'){
                        this.playerScore++;
                        this.winner = 'Player wins';

                    } else if(compMovePicked=='Rock'){
                        this.computerScore++;
                        this.winner = 'Computer wins';


                    }
                }
            }
        }
    }


</script>

<style  scoped>

</style>
