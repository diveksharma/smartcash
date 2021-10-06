<template>
<Head title="Produkter - Kortterminal"/>
<product-layout>
        
    <h2 class="sr-only">Produkter</h2>

    <div class="grid grid-cols-2 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
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

</product-layout>
</template>


<script>
import ProductLayout from './ProductLayout';
  const products = [
    {id: 1, name: 'ICT250', price: '', img:'/kortterminal1.png', href: '#'},
    {id: 2, name: 'IWL250', price: '', img:'/kortterminal2.png', href: '#'},
    {id: 3, name: 'T103p', price: '', img:'/kortterminal3.png', href: '#'},
    {id: 4, name: 'Verifone V400m', price: '', img:'/kortterminal4.png', href: '#'},
    {id: 5, name: 'West Int 8006', price: '', img:'/kortterminal5.png', href: '#'},
    {id: 6, name: 'West Int t103', price: '', img:'/kortterminal6.png', href: '#'},
    {id: 7, name: 'Westpay C-10', price: '', img:'/kortterminal7.png', href: '#'},
    {id: 8, name: 'Westpay C-100', price: '', img:'/kortterminal8.png', href: '#'},
  ];

  const names = [
    {id: 1, name: 'PC-Kassa', href:'#'}, 
    {id: 2, name: 'Kortterminal', href:'#'},
    {id: 3, name: 'Kassaregister', href:'#'},
    {id: 4, name: 'Enox Kassa', href:'#'},
    {id: 5, name: 'Orderplatta (Handy)', href:'#'},
    {id: 6, name: 'Skanner', href:'#'},
    {id: 7, name: 'Vågar', href:'#'},
    {id: 8, name: 'Skrivare', href:'#'},
    {id: 9, name: 'Kontrollenheter', href:'#'},
    {id: 10, name: 'Kvittorullar', href:'#'},
    {id: 11, name: 'Tillbehör', href:'#'}
  ];

  export default {
    components:  {
        ProductLayout
    },
    
    setup() {
      return {
        products,
        names,
      }
    },

    data() {
      return {
        hoverText: '',
      }
    },

    methods: {
      textHover(text) {
        this.hoverText = text;
      } 
    },
    

  }

</script>