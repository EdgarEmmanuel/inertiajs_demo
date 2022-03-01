<template>
        <div>
            <h1>
                Users
            </h1>
            <p >
                The Time is {{ time }}
            </p>
            <Link preserve-scroll href="/users">Refresh</Link>
        </div>
</template>

<script>
    import Layout from "../shared/Layout";
    import Nav from "../shared/Nav";
    import {Link} from "@inertiajs/inertia-vue3";

    export default {
        name: "Users",
        layout: Layout,
        components: { Nav, Link, },
        props: {
            time: String,
        }
    }
</script>

<style scoped>
p{
    margin-top: 1000px;
}
</style>
