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

                                    <tr v-for="user in users.data" :key="user.id">
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
                                            <a :href="`/users/${user.id}/edit`" class="text-indigo-600 hover:text-indigo-900">Edit</a>
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

    <!--            START PAGINATE -->
            <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                <div class="flex-1 flex justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Previous </a>
                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50"> Next </a>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
<!--                    <div>-->
<!--                        <p class="text-sm text-gray-700">-->
<!--                            Showing-->
<!--                            <span class="font-medium">1</span>-->
<!--                            to-->
<!--                            <span class="font-medium">10</span>-->
<!--                            of-->
<!--                            <span class="font-medium">97</span>-->
<!--                            results-->
<!--                        </p>-->
<!--                    </div>-->
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <!-- Heroicon name: solid/chevron-left -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
<!--                            <Link v-for="link in users.links" :href="link.url" v-html="link.label">-->
<!--                                -->
<!--                            </Link>-->
                            <template v-for="link in users.links">
                                <a
                                    :href="link.url"
                                    v-if="link.url"
                                    v-text="link.label"
                                    aria-current="page"
                                    class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                                </a>

                                <a v-else href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                    <span class="sr-only">Previous</span>
                                    {{link.label}}
                                    <!-- Heroicon name: solid/chevron-left
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg> -->
                                </a>
                            </template>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <!-- Heroicon name: solid/chevron-right-->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>

            <!--            END PAGINATE-->
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
            users: Object,
        }
    }
</script>

<style scoped>
p{
    margin-top: 1000px;
}
</style>
