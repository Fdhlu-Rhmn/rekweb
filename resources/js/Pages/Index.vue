<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import {Link} from '@inertiajs/vue3'

import { defineProps } from 'vue';
defineProps({
    posts: Array
});
</script>

<template>
    <Head title="Orders"/>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Pemain Mobile Legend</h2>
        </template>
        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="max-w-7xl m-auto mt-10 ">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold sm:px-6 lg:px-3 lg:py-2 rounded mx-7" href="post/create" role="button">Add Data</a>

                        <div class="overflow-x-auto flex justify-center text-center sm:px-6 lg:px-8 lg:py-7 ">
                            <table class="table w-full py-5">
                                <!-- head -->
                                <thead class="border table-primary bg-red-400 text-white">
                                <tr>
                                    <!-- <th>No</th> -->
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Id Pemain</th>
                                    <th>Role</th>
                                    <th>Team</th>
                                    <th>Rank</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody >
                                <!-- row 1 -->
                                <tr v-for="post in posts" :key="post.id">
                                    <th>{{post.name }}</th>
                                    <td>{{post.ingame_name}}</td>
                                    <td>{{post.id_game}}</td>
                                    <td>{{post.role}}</td>
                                    <td>{{post.team}}</td>
                                    <td>{{post.rank}}</td>
                                    <td>
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-1">
                                            <Link :href="`/post/edit/${post.id}`">Edit</Link>
                                        </button>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            <Link :href="`/post/delete/${post.id}`" method="delete">Delete</Link>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        </AuthenticatedLayout>

</template>

