<template>
    <Head title="My Inertia App - Sign Up User"/>

    <!--    start form -->



    <div class="mt-10 sm:mt-0 p-10">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <!--                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>-->
                    <p class="mt-1 text-sm text-gray-600 mb-4 border rounded-lg">
                        <a href="/login">Sign In</a>
                    </p>
                    <h1 class="text-3xl">
                        SignUp a User
                    </h1>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form @submit.prevent="submit">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" v-model="form.name" name="name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                                    block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required/>
                                    <div v-if="$page.props.errors.name" v-text="$page.props.errors.name" class="text-red-500"></div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="email" v-model="form.email" name="email" id="email" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                                    block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required/>
                                    <div v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-red-500"></div>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                    <input type="password" v-model="form.password" name="password" id="password" autocomplete="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                                    block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
                                    <div v-if="$page.props.errors.password" v-text="$page.props.errors.password" class="text-red-500"></div>
                                </div>


                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md
                                     text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    :disabled="processing">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!--    end form -->
</template>

<script>
import { reactive } from 'vue';
import {Head} from "@inertiajs/inertia-vue3";

export default {
    name: "SignUp",
    layout: null,
    components:{
        Head
    },
    data() {
        return {
            processing: false,
            form: {
                name: '',
                email: '',
                password: '',
            }
        }
    },
    methods: {
        submit() {
            //console.log("data");
            this.$inertia.post('/users', this.form, {
                onStart: () => {
                    this.processing = true;
                },
                onFinish: () => {
                    this.processing = false;
                }
            })
        },
    },
}
</script>

<style scoped>

</style>
