<template>
    <Layout>
        <div>
            <h1>
                Users
            </h1>
            <p >
                The Time is {{ time }}
            </p>
            <Link preserve-scroll href="/users">Refresh</Link>
        </div>
    </Layout>
</template>

<script>
    import Layout from "../shared/Layout";
    import Nav from "../shared/Nav";
    import {Link} from "@inertiajs/inertia-vue3";

    export default {
        name: "Users",
        components: { Nav, Link, Layout},
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
