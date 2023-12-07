<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Orders"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Orders</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="max-w-7xl m-auto mt-10 ">
                        <div class="overflow-x-auto flex justify-center text-center sm:px-6 lg:px-8 lg:py-7 ">
                            <table class="table w-full py-5">
                                <!-- head -->
                                <thead class="border table-primary bg-red-400 text-white">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Orders</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody >
                                <!-- row 1 -->
                                <tr>
                                    <th>1</th>
                                    <td>Cy Ganderton</td>
                                    <td>Quality Control Specialist</td>
                                    <td>
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-1">
                                            Edit
                                        </button>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Delete
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