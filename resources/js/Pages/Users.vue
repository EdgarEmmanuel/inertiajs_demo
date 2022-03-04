<template>
        <div class="container">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
<!--                                <tr>-->
<!--                                    <td class="px-6 py-4 whitespace-nowrap">-->
<!--                                        <div class="flex items-center">-->
<!--                                            <div class="flex-shrink-0 h-10 w-10">-->
<!--                                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">-->
<!--                                            </div>-->
<!--                                            <div class="ml-4">-->
<!--                                                <div class="text-sm font-medium text-gray-900">Jane Cooper</div>-->
<!--                                                <div class="text-sm text-gray-500">jane.cooper@example.com</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </td>-->
<!--                                    <td class="px-6 py-4 whitespace-nowrap">-->
<!--                                        <div class="text-sm text-gray-900">Regional Paradigm Technician</div>-->
<!--                                        <div class="text-sm text-gray-500">Optimization</div>-->
<!--                                    </td>-->
<!--                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">-->
<!--                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>-->
<!--                                    </td>-->
<!--                                </tr>-->

                                    <tr v-for="user in users" :key="user.id">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{user.name}}</div>
                                                    <div class="text-sm text-gray-500">{{user.email}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>

                                <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
