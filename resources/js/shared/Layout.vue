<template>
    <Head title="My Inertia App"/>
    <div>
        <header>
            <Nav/>
        </header>

        <slot/>
    </div>
</template>

<script>
import Nav from './Nav';
import {Head} from "@inertiajs/inertia-vue3";

export default {
    name: "Layout",
    components:{
        Nav,
        Head
    }
}
</script>

<style scoped>

</style>
