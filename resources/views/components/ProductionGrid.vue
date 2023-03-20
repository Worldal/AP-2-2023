<template>
<div id="app">
<ul>
    <li v-for="item in items" :key="item.id">
        {{ item.title }}
    </li>
</ul>
</div>
</template>


<script>
const { createApp } = Vue

createApp({
    mounted() {
        console.log('Application montée')
    },
    data() {
        return {
            items: []
        }
    }
}).mount('#app')

</script>


