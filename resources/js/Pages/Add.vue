<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
export default {
  data() {
    return {
      formData: {
        name: "",
        pemesanan: "",
        address:""
        // Tambahkan field lainnya sesuai kebutuhan
      },
    };
  },
  methods: {
    async submitForm() {
      // Kirim data formulir ke Laravel untuk disimpan
      await this.$inertia.post(route("orders.store"), this.formData);

      // Redirect ke halaman index setelah menyimpan
      this.$inertia.visit(route("orders"));
    },
  },
};
</script>

  
<template>
    <Head title="Orders Add"/>

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Orders</h2>
        </template>

        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="m-auto mt-10 ">
                        <div class="overflow-x-auto lg:px-8">
                           <form @submit.prevent="submitForm">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Nama Pemesan
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text"  v-model="formData.name" name="name" placeholder="Nama">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="pemesanan">
                                        Nama Barang
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pemesanan" type="text" v-model="formData.pemesanan" name="pemesanan" placeholder="Nama barang">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                                        Alamat
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" v-model="formData.address" name="address" placeholder="Alamat">
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