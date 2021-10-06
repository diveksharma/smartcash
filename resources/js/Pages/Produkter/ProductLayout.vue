<template>
    <homepage-layout>

        <nav class="bg-white">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-white hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                    Icon when menu is closed.

                    Heroicon name: outline/menu

                    Menu open: "hidden", Menu closed: "block"
                    -->
                    <!--
                    Icon when menu is open.

                    Heroicon name: outline/x

                    Menu open: "block", Menu closed: "hidden"
                    -->
                </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="hidden sm:block">
                    <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <Link v-for="name in names" :key="name.id" :href="route(name.href)" @mouseover="textHover(name.name)" @mouseleave="textHover('')" :class="[hoverText === name.name ? 'transition duration-500 ease-in-out bg-clip-text text-transparent bg-gradient-to-tl from-indigo-600 via-purple-500 to-pink-600' : 'text-gray-600', 'px-3 py-2 rounded-md text-sm font-medium']">
                        {{ name.name }}
                    </Link>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

                    <a href="#" class="text-gray-600 transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-md font-medium">PC-Kassor</a>

                    <a href="#" class="text-gray-600 transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-md font-medium" aria-current="page">Kortterminaler</a>

                    <a href="#" class="text-gray-600 transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-md font-medium">Kassaregister</a>

                    <a href="#" class="text-gray-600 transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-md font-medium">Kvittorullar</a>

                    <a href="#" class="text-gray-600 transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-md font-medium">Kontrollenheter</a>

                    <a href="#" class="text-gray-600 transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-md font-medium">Enox Kassa</a>
            </div>
            </div>
        </nav>

        <main class="max-w-2xl mx-auto py-16 px-4 sm:py-12  sm:px-6 lg:max-w-7xl lg:px-8">
            <slot></slot>
        </main>
    
    </homepage-layout>    
</template>


<script>
import HomepageLayout from '../HomepageLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

  const products = [
    {id: 1, name: 'ICT250', price: '', img:'/kortterminal1.jpg', href: '#'},
    {id: 2, name: 'IWL250', price: '', img:'/kortterminal2.jpg', href: '#'},
    {id: 3, name: 'T103p', price: '', img:'/kortterminal3.png', href: '#'},
    {id: 4, name: 'Verifone V400m', price: '', img:'/kortterminal4.png', href: '#'},
    {id: 5, name: 'West Int 8006', price: '', img:'/kortterminal5.png', href: '#'},
    {id: 6, name: 'West Int t103', price: '', img:'/kortterminal6.jpg', href: '#'},
    {id: 7, name: 'Westpay C-10', price: '', img:'/kortterminal7.png', href: '#'},
    {id: 8, name: 'Westpay C-100', price: '', img:'/kortterminal8.png', href: '#'},
  ];

  const names = [
    {id: 1, name: 'PC-Kassa', href:'products.pc-kassa'}, 
    {id: 2, name: 'Kortterminal', href:'products.card-terminal'},
    {id: 3, name: 'Kassaregister', href:'products.kassaregister'},
    {id: 4, name: 'Enox-kassa', href:'products.enox-kassa'},
    {id: 5, name: 'Orderplatta (Handy)', href:'products.orderplatta'},
    {id: 6, name: 'Skanner', href:'products.skanner'},
    {id: 7, name: 'Vågar', href:'products.vågar'},
    {id: 8, name: 'Skrivare', href:'products.skrivare'},
    {id: 9, name: 'Kontrollenheter', href:'products.kontrollenheter'},
    {id: 10, name: 'Kvittorullar', href:'products.kvittorullar'},
    {id: 11, name: 'Tillbehör', href:'products.tillbehör'}
  ];

  export default {
    components:  {
        HomepageLayout,
        Link,
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