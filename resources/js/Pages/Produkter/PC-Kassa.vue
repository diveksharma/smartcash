<template>
  <Head title="Produkter - PC-kassa" />
  <product-layout>
      <h2 class="sr-only">Produkter</h2>

      <div class="grid grid-cols-2 gap-y-10 sm:grid-cols-4 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

        <Link v-for="product in products" :key="product.id" :href="product.href" class="">
          <div class="rounded-md absolute left-0 h-10"></div>
          <div class="mt-4 w-full relative aspect-w-1 aspect-h-1 rounded-lg transform duration-500 ease-in-out hover:shadow-xl shadow-md overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img :src="product.img" alt="Product" class="w-full h-full object-center object-cover transition duration-500 group-hover:opacity-80">
          <div class="rounded-md shadow-lg px-2 py-3 space-y-2">
            <div class="flex justify-center">
              <div class="text-sm text-center break-words font-bold">
                {{ product.name }}
              </div>
            </div>
            <h3 class="text-center text-xs sm:text-sm text-gray-700">
              {{ product.name }}
            </h3>
          <div class="flex justify-between">
            <div @click="addToShoppingCart(product)"  class="rounded-full shadow-md h-10 w-10 flex items-center justify-center transform duration-500 ease-in-out hover:scale-110 hover:shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
              </svg>
            </div>
            <div class="shadow-md rounded-full h-10 w-24 flex items-center justify-center">
              <p class="text-right text-sm sm:text-lg font-medium text-pink-400">
                {{ product.price }} {{ product.currency }}
              </p>
            </div>
          </div>
          </div>
          </div>
        </Link>

      </div>
  </product-layout>
</template>

<script>
import ProductLayout from './ProductLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

  const products = [
    {id: 1, name: 'Smart Enox 1 utan kunddisplay', price: '1 500', currency: 'kr', img:'/pc1.png', href:'/productinfo', info:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at congue erat, ac interdum risus.'},
    {id: 2, name: 'Smart Enox 2 med liten kunddisplay', price: '1 800', currency: 'kr', img:'/pc2.png', info:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at congue erat, ac interdum risus.'},
    {id: 3, name: 'Smart Enox 3 med stor kunddisplay', price: '1 500', currency: 'kr', img:'/pc3.png', info:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at congue erat, ac interdum risus.'},
  ];

  export default {
    components: {
      ProductLayout,
      Head,
      Link
    },
    setup() {
      return {
        products,
      }
    },

    methods: {
      addToShoppingCart(product) {
        axios.post('/add-to-shopping-cart', product)
      }
    },
    
  }

</script>