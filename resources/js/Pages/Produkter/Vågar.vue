<template>
  <Head title="Produkter - Vågar" />
  <product-layout>
    <div class="grid grid-cols-2 gap-y-10 sm:grid-cols-4 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

      <Link v-for="product in productsVåg" :key="product.id" :href="product.href" class="">
        <div class="rounded-md relative left-0 h-10" />
        <div class="mt-0 w-full relative aspect-w-1 aspect-h-1 rounded-lg transform duration-500 ease-in-out hover:shadow-xl shadow-md overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
        <div v-if="product.tag" class="absolute flex items-center justify-center top-3 right-2 bg-pink-400 rounded-full shadow-md px-2 py-1">
          <span class="text-white text-xs">{{ product.tag }} </span>
        </div>
          <img :src="product.image" alt="Product" class="w-full h-full object-center object-cover transition duration-500 group-hover:opacity-80">
          <div class="rounded-md shadow-lg px-2 py-2 space-y-0">
            <div class="flex justify-center py-1">
              <div class="text-sm text-center break-words font-bold">
                {{ product.name }}
              </div>
            </div>
            <h3 class="text-center text-xs sm:text-sm py-4 text-gray-700">
              {{ product.name }}
            </h3>
            <div class="flex items-center justify-between bottom-0">
              <div @click="addToShoppingCart(product)" class="rounded-full shadow-md h-9 w-9 flex items-center justify-center transform duration-500 ease-in-out hover:scale-110 hover:shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
              </div>
              <div class="rounded-full shadow-lg h-10 w-24 flex items-center justify-center">
                <p class="text-right text-sm sm:text-md font-medium text-black">
                  {{ product.price_currency[0].price }} {{ product.price_currency[0].currency }}
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

  export default {
    props: ['products-våg'],
    components: {
      ProductLayout,
      Head,
      Link
    },

    methods: {
      addToShoppingCart(product) {
        axios.post('/add-to-shopping-cart', product)
      }
    },
    
  }

</script>