<template>
    <div id="scoreboard">
        <div>
            <h2>{{winner}}</h2>
        </div>
        <div id="score">
            <div>
                <h3>Player's Score: {{playerScore}}</h3>
            </div>
            <div>
                <h3>Computer's Score: {{computerScore}}</h3>
            </div>
        </div>
            <a href="http://34.67.60.57:8080/"><button v-if="computerScore == 10 || playerScore == 10" class="btn btn-warning">Reset</button></a>

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
                winner:"Let's see who's gonna win",

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
                    // this.winner = "It's a Draw";
                } else if(this.playerMove=='Rock'){
                    if(compMovePicked=='Paper'){
                        this.computerScore++;
                        // this.$root.$emit('resetPlay', this.computerScore);
                        if(this.computerScore == 10){
                            this.winner = 'Computer wins';
                        }
                    } else if(compMovePicked=='Scissors'){
                        this.playerScore++;
                         if(this.playerScore == 10){
                            this.winner = 'Player wins';
                        }
                    }
                } else if(this.playerMove=='Paper'){
                    if(compMovePicked=='Rock'){
                        this.playerScore++;
                        if(this.playerScore == 10){
                            this.winner = 'Player wins';
                            }
                    } else if(compMovePicked=='Scissors'){
                        this.computerScore++;
                        // this.$root.$emit('resetPlay', this.computerScore);
                         if(this.computerScore == 10){
                            this.winner = 'Computer wins';
                        }
                    }
                } else if(this.playerMove=='Scissors'){
                    if(compMovePicked=='Paper'){
                        this.playerScore++;
                        if(this.playerScore == 10){
                            this.winner = 'Player wins';
                            }

                    } else if(compMovePicked=='Rock'){
                        this.computerScore++;
                        // this.$root.$emit('resetPlay', this.computerScore);
                         if(this.computerScore == 10){
                            this.winner = 'Computer wins';
                        }
                    }
                }
            }
        }
    }


</script>

<style  scope>

#scoreboard {
        display:grid;
        grid-template-rows: 1fr 1fr;
        justify-items:center;
        justify-content:center;
}

#score{
        display:grid;
        grid-template-columns:1fr 1fr;
        justify-items:center;
        justify-content:center;
        column-gap:100px ;

}
a{
    text-align: center;
}
h3{
    font-size: 30px;
    color: white;
    margin-bottom: 40px;
}


</style>
