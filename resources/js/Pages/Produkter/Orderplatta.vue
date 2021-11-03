<template>
  <Head title="Produkter - Orderplatta" />
  <product-layout>
      <h2 class="sr-only">Produkter</h2>

      <div class="grid grid-cols-2 gap-y-10 sm:grid-cols-4 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

        <a v-for="product in products" :key="product.id" :href="product.href" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 rounded-lg shadow-md transition duration-500 hover:shadow-xl overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
            <img :src="product.img" :alt="product.name" class="w-full h-full object-center object-cover transition duration-500 group-hover:opacity-75">
          </div>
            <button @click="addToShoppingCart(product)" class="mt-2 px-4 py-2 bg-white rounded-full shadow-md text-xs">
              Lägg till produkt
            </button>
          <h3 class="mt-4 text-xs sm:text-sm text-gray-700">
            {{ product.name }}
          </h3>
          <p class="mt-1 text-sm sm:text-lg font-medium text-gray-900">
            {{ product.price }} {{ product.currency }}
          </p>
        </a>

      </div>
  </product-layout>
</template>

<script>
import ProductLayout from './ProductLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';

  const products = [
    {id: 1, name: 'Orderplatta (Handy)', price: '1 500', currency:'kr', img:'/orderplatta.png', href: '#'},
    
  ];

  export default {
    components: {
      ProductLayout,
      Head,
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