<template>
    <Head title="My App - Home"/>
    <h1>
        Hello
    </h1>
</template>

<script>
import Nav from "../shared/Nav";
//import Layout from "../shared/Layout";
import {Head} from '@inertiajs/inertia-vue3'

export default {
    name: "Home",
    // thanks to the below attribute all the component data will be wrapped into children of the layout
    //layout: Layout,
    components:{Nav, Head}
}
</script>

<style scoped>

</style>
