<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import { useForm } from "@inertiajs/vue3";
    import { defineProps } from 'vue';

    let props = defineProps({
        post: Object
    });
    const form = useForm({
        name : props.post.name,
        ingame_name : props.post.ingame_name,
        id_game : props.post.id_game,
        role : props.post.role,
        team : props.post.team,
        rank : props.post.rank
    });
</script>

  
<template>
    <Head title="Add Players"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit New Players</h2>
        </template>

        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="m-auto mt-10 ">
                        <div class="overflow-x-auto lg:px-8">
                           <form @submit.prevent="form.put(`/post/update/${post.id}`)">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Player Name
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text"  v-model="form.name" name="name" placeholder="Nama">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="ingame_name">
                                        Nickname
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ingame_name" type="text" v-model="form.ingame_name" name="ingame_name" placeholder="Nickname">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="id_game">
                                        Id Game
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id_game" type="text" v-model="form.id_game" name="id_game" placeholder="Id Game">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
                                        Role
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="role" type="text" v-model="form.role" name="role" placeholder="Role">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="team">
                                        Team
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="team" type="text" v-model="form.team" name="team" placeholder="Team">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="rank">
                                        Rank
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="rank" type="text" v-model="form.rank" name="rank" placeholder="Rank">
                                </div>
                                <div class="row">
                                    <div class="d-grid lg:py-4">
                                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-1">Submit</button>
                                    </div>
                                </div>
                           </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>