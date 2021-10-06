<template>
<Head title="Produkter - Kvittorullar"/>
<product-layout>
        
    <h2 class="sr-only">Produkter</h2>

    <div class="grid grid-cols-2 gap-y-10 sm:grid-cols-4 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a v-for="product in products" :key="product.id" :href="product.href" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg shadow-md transition duration-500 hover:shadow-xl overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img :src="product.img" alt="Product" class="w-full h-full object-center object-cover transition duration-500 group-hover:opacity-80">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">
            {{ product.name }}
          </h3>
          <p class="mt-1 text-lg font-medium text-gray-900">
            {{ product.price }}
          </p>
      </a>
    </div>

</product-layout>
</template>


<script>
import ProductLayout from './ProductLayout';
import { Head } from '@inertiajs/inertia-vue3';
  const products = [
    {id: 1, name: '1', price: '', img:'/Kvittorullar1.png', href: '#'},
    {id: 2, name: '149141202-origpic-5c6f59', price: '', img:'/Kvittorullar2.png', href: '#'},
    {id: 3, name: '23800583-origpic-b535f5', price: '', img:'/Kvittorullar3.png', href: '#'},
    {id: 4, name: '2550423', price: '', img:'/Kvittorullar4.png', href: '#'},
    {id: 5, name: '57mmx50m kassa', price: '', img:'/Kvittorullar8.png', href: '#'},
    {id: 6, name: '80mm', price: '', img:'/Kvittorullar5.png', href: '#'},
    {id: 7, name: 'Ej kvitto på köp 18m', price: '', img:'/Kvittorullar6.png', href: '#'},
    {id: 8, name: 'kvittorullar-thermorulle-57-50-12-25-m', price: '', img:'/Kvittorullar7.png', href: '#'},
  ];


  export default {
    components:  {
        ProductLayout,
        Head,
    },
    
    setup() {
      return {
        products,
      }
    },

  }
</script>