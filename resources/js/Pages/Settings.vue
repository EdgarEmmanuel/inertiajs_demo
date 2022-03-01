<template>
    <Head>
        <title>
            Settings
        </title>
        <meta name="description" content="description page settings" head-key="description"/>
    </Head>
    <div>
        <h1>
            Settings
        </h1>
    </div>
</template>

<script>
import Nav from "../shared/Nav";
import Layout from "../shared/Layout";
import {Head} from "@inertiajs/inertia-vue3";
export default {
    name: "Settings",
    // thanks to the below attribute all the component data will be wrapped into children of the layout
    layout: Layout,
    components: {
        Nav,
        Head
    }
}
</script>

<style scoped>

</style>
