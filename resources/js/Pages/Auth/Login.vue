<template>
    <Head title="My App - Login"/>

<!--          START LOGIN FORM -->
    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6 p-10">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <p class="mt-1 text-sm text-gray-600 mb-4 border rounded-lg">
                        <a href="/signup">Sign Up</a>
                    </p>
                    <h3 class="text-lg font-medium leading-6 text-gray-900">SIGN IN</h3>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form @submit.prevent="signIn">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
<!--                                <div class="col-span-6 sm:col-span-3">-->
<!--                                    <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>-->
<!--                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />-->
<!--                                </div>-->

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input v-model="form.email" type="text" name="email-address" id="email-address" autocomplete="email"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    <div v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-red-500"></div>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                    <input v-model="form.password" type="password" name="password" id="password" autocomplete="family-name"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                    <div v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-red-500"></div>
                                </div>


                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white
                             bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    :disabled="processing">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--    END LOGIN FORM -->
</template>

<script>
import {Head} from "@inertiajs/inertia-vue3";
export default {
    name: "Login",
    layout: null,
    data() {
        return {
            processing: false,
            form: {
                email: '',
                password: '',
            }
        }
    },
    components:{
        Head
    },
    methods:{
        signIn(){
            this.$inertia.post('/login', this.form, {
                onStart: () => {
                    this.processing = true;
                },
                onFinish: () => {
                    this.processing = false;
                }
            })
        }
    }
}
</script>

<style scoped>

</style>
