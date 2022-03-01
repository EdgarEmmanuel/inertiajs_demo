<template>
    <div>
        <header>
            <Nav/>
        </header>

        <slot/>
    </div>
</template>

<script>
import Nav from './Nav';

export default {
    name: "Layout",
    components:{
        Nav
    }
}
</script>

<style scoped>

</style>
