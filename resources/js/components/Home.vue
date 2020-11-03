<template>
    <div id='snakeWrapper'> 
        <div id='snake'>
            <div v-for="piece in pieces" class='piece'></div>
        </div>
    </div>
</template>
<script>
    
    export default
    {
        data()
        {
            return {
                pieces: [
                {
                    x: 0,
                    y: 0,
                },
                {
                    x: 0,
                    y: 1
                } 
                ]
            }
        },
        mounted()
        {

        },
        methods:
        {

        }
    }
</script>
<style scoped>
#snakeWrapper
{
    width: 30vw;
    height: 49vw;
    background-color: black;
}
.piece
{
    width: 1vw;
    height: 1vw;
    background-color: yellow;
    display: inline-block;
}
</style>