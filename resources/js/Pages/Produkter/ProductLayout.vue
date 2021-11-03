<template>
    <homepage-layout>

        <nav class="bg-white">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-0 sm:h-16">
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


                <div class="transition duration-300 hover:shadow-lg rounded-md flex items-center justify-center mx-auto sm:items-stretch sm:justify-start">
                <div class="hidden sm:block">
                    <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <Link v-for="name in names" :key="name.id" :href="route(name.href)" @mouseover="textHover(name.name)" @mouseleave="textHover('')" :class="[hoverText === name.name ? 'transition duration-500 ease-in-out bg-clip-text text-transparent bg-gradient-to-tl from-indigo-600 via-purple-500 to-pink-600' : 'text-gray-600', 'px-3 py-2 rounded-md text-sm font-medium']">
                        {{ name.name }}
                    </Link>
                    </div>
                </div>
                </div>
                <Link href="/checkout">
                  <Icon name="bag" class="h-14 w-14 transition duration-300 hover:shadow-xl rounded-full mx-auto pt-2"></Icon>
                </Link>
            </div>
            </div>



            <!-- Mobile menu, show/hide based on menu state. -->
 
            <div class="sm:hidden" id="mobile-menu">
              <button @click="dropdownMobile = !dropdownMobile" type="button" class="pl-4 inline-flex items-center justify-center p-2 rounded-md text-gray-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu"> 
                <span class="font-extrabold">Fler Produkter</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="pl-1 pt-1 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            </div>  
        </nav>

      <transition
        enter-active-class="duration-200 ease-in"
        enter-class="opacity-0 scale-100"
        enter-to-class="opacity-100 scale-100"
        leave-active-class="duration-200 ease-out"
        leave-class="opacity-100 scale-100"
        leave-to-class="opacity-0 scale-95">

        <div v-show="dropdownMobile" @click="dropdownMobile = false" class="top-18 z-10 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="ring-1 ring-white ring-opacity-75 bg-white dark:bg-black divide-y-2 divide-gray-50 rounded-lg shadow-lg">
                <div class="pb-6 px-5 bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="h-4 w-auto">
                        </div>
                        <div>
                            <button type="button" @click="dropdownMobile = !dropdownMobile"
                                    class=" dark:bg-gray-800 rounded-md p-2 inline-flex items-center bg-gray-50 justify-center text-gray-50  hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                  <div class="grid grid-flow-col grid-cols-3 grid-rows-4 gap-x-5 sm:px-2 sm:pt-2 sm:pb-3 sm:space-y-1 break-normal">
                    <Link v-for="name in names" :key="name.id" :href="route(name.href)" @mouseover="textHover(name.name)" @mouseleave="textHover('')" :class="[hoverText === name.name ? 'transition duration-500 ease-in-out bg-clip-text text-transparent bg-gradient-to-tl from-indigo-600 via-purple-500 to-pink-600' : 'text-gray-600', 'px-3 py-2 rounded-md text-sm font-medium']">
                        {{ name.name }}
                    </Link>
                  </div>  
                </div>
            </div>
        </div>
      </transition>

        

      
        <main class="max-w-2xl mx-auto py-5 px-4 sm:py-12  sm:px-6 lg:max-w-6xl lg:px-8">
            <slot></slot>
        </main>
    
    </homepage-layout>    
</template>


<script>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from '@vue/reactivity';
import HomepageLayout from '../HomepageLayout.vue';
import Icon from '@/Components/Icon';
import Button from '@/Components/Button.vue';

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
    {id: 4, name: 'EnoxKassa', href:'products.enox-kassa'},
    {id: 5, name: 'Orderplatta', href:'products.orderplatta'},
    {id: 6, name: 'Skanner', href:'products.skanner'},
    {id: 7, name: 'Vågar', href:'products.vågar'},
    {id: 8, name: 'Skrivare', href:'products.skrivare'},
    {id: 9, name: 'Kontrollenheter', href:'products.kontrollenheter'},
    {id: 10, name: 'Kvittorullar', href:'products.kvittorullar'},
    {id: 11, name: 'Tillbehör', href:'products.tillbehör'}
  ];

  const dropdownMobile = ref((false))
  
  export default {
    components:  {
        HomepageLayout,
        Link,
        Icon,
        Button,
    },

    setup() {
      return {
        products,
        names,
        dropdownMobile,
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