<template>
  <Head title="Produkter - PC-kassa" />
  <product-layout>
      <h2 class="sr-only">Produkter</h2>

      <div class="grid grid-cols-2 gap-y-10 sm:grid-cols-4 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">

        <div v-for="product in products" :key="product.id" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg shadow-md transition duration-500 ease-in-out hover:shadow-xl overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img :src="product.img" alt="Product" class="w-full h-full object-center object-cover transition duration-500 group-hover:opacity-80">
          </div>
          <div class="flex justify-end">
            <button @click="addToShoppingCart(product)" class="mt-2 px-4 py-2 bg-white rounded-full shadow-md text-xs">
              Lägg till produkt
            </button>
          </div>
          <h3 class="mt-4 text-xs sm:text-sm text-gray-700">
            {{ product.name }}
          </h3>
          <p class="mt-1 text-sm sm:text-lg font-medium text-gray-900">
            {{ product.price }} {{ product.currency }}
          </p>
        </div>

      </div>
  </product-layout>
</template>

<script>
import ProductLayout from './ProductLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';

  const products = [
    {id: 1, name: 'Smart Enox 1 utan kunddisplay', price: '1 500', currency: 'kr', img:'/pc1.png', href:'/checkout', info:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at congue erat, ac interdum risus.'},
    {id: 2, name: 'Smart Enox 2 med liten kunddisplay', price: '1 800', currency: 'kr', img:'/pc2.png', href: '/checkout', info:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at congue erat, ac interdum risus.'},
    {id: 3, name: 'Smart Enox 3 med stor kunddisplay', price: '1 500', currency: 'kr', img:'/pc3.png', href: '/checkout', info:'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at congue erat, ac interdum risus.'},
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