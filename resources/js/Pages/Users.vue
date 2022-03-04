<template>
        <div>
            <h1>
                Users
            </h1>
            <ul>
                <li v-for="user in users" :key="user.id" v-text="user.name"/>
            </ul>
<!--            <p >-->
<!--                The Time is {{ time }}-->
<!--            </p>-->
<!--            <Link preserve-scroll href="/users">Refresh</Link>-->
        </div>
</template>

<script>
    import Layout from "../shared/Layout";
    import Nav from "../shared/Nav";
    import {Link} from "@inertiajs/inertia-vue3";

    export default {
        name: "Users",
        // thanks to the below attribute all the component data will be wrapped into children of the layout
        layout: Layout,
        components: { Nav, Link, },
        props: {
            time: String,
            users: Array,
        }
    }
</script>

<style scoped>
p{
    margin-top: 1000px;
}
</style>
