<template>
    <p>count is: {{counter.count}}</p>
</template>

<script>
    import { reactive } from 'vue'
    const counter = reactive({
        count: 0
    })
    console.log(counter.count)
    counter.count++
</script>