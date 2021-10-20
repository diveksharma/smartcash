<template>
<homepage-layout>
        
    <h2 class="sr-only">Produkter</h2>

    <div class="max-w-5xl mx-auto grid grid-cols-2 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a v-for="product in products" :key="product.id" :href="product.href" class="group">
          <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg shadow-md transition duration-500 ease-in-out hover:shadow-xl overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
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
</homepage-layout>
</template>

<script>
  const products = [
  {id: 1, name: 'Paket 1', price: '249 kr', img: '/paket1.png', href: '#'},
  {id: 2, name: 'Paket 2', price: '579 kr', img: '/paket2.png', href: '#'},
  {id: 3, name: 'Paket 3', price: '639 kr', img: '/paket3.png', href: '#'},
  {id: 4, name: 'Paket 4', price: '679 kr', img: '/paket4.png', href: '#'},
  {id: 5, name: 'Paket 5', price: '1290 kr', img: '/paket5.png', href: '#'},
  {id: 6, name: 'Paket 6', price: '1590 kr', img: '/paket6.png', href: '#'},
  ];

import HomepageLayout from './HomepageLayout.vue'

export default {
  components: { 
      HomepageLayout,
    },
    
    setup() {
      return {
        products,
      } 
    },
}
</script>