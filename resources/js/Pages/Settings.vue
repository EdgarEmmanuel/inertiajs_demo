<template>
    <div>
        <h1>
            Settings
        </h1>
    </div>
</template>

<script>
import Nav from "../shared/Nav";
import Layout from "../shared/Layout";
export default {
    name: "Settings",
    // thanks to the below attribute all the component data will be wrapped into children of the layout
    layout: Layout,
    components: {
        Nav
    }
}
</script>

<style scoped>

</style>
