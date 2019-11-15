<template>
    <ul>
        <li @click="changeName('test1')">test 1</li>
        <li @click="changeName('test2')">test 2</li>
    </ul>
</template>


<script>
    export default {
        props:['when-clicked'],
        methods: {
            changeName: function(name){
                this.whenClicked(name);
            }
        }
    }
</script>
