<template>
    <homepage-layout :cart="cart">

        <nav class="">
          <div>
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div>
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-white hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                </button>
                </div>


<!--                 <div class="transition duration-300 hover:shadow-lg rounded-md flex items-center justify-center mx-auto sm:items-stretch sm:justify-start">
                  <div class="hidden sm:block">
                      <div class="flex space-x-4"> -->
                      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
<!--                       <Link v-for="name in names" :key="name.id" :href="route(name.href)" @mouseover="textHover(name.name)" @mouseleave="textHover('')" :class="[hoverText === name.name ? 'transition duration-500 ease-in-out bg-clip-text text-transparent bg-gradient-to-tl from-indigo-600 via-purple-500 to-pink-600' : '', $page.url === name.url ? 'bg-clip-text text-transparent bg-gradient-to-tl from-indigo-600 via-purple-500 to-pink-600' : 'text-gray-600', 'px-3 py-2 rounded-md text-sm font-medium']">
                          {{ name.name }} 
                      </Link>
                      </div>
                  </div>
                </div> -->


                </div>
                </div>
                <div class="pl-96 top-44 hidden sm:block absolute">
                <Link href="/checkout" class="relative rounded-full transform duration-500 hover:scale-110 left-72 sm:top-56 mt-10 px-2 py-2"> 
                  <!--<Icon name="bag" class="h-14 w-14 transform duration-500 hover:scale-110 rounded-full mx-auto pt-2"></Icon>-->
                  <div class="absolute top-3 -right-1 flex items-center justify-center font-medium rounded-full bg-purple-500 text-white w-5 h-5" style="font-size: 10px">
                    {{ cart.length }}
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" :class="[hasAddedProduct === true ? 'animate-bounce': 'h-6 w-6 text-purple-500 hover:shadow-xl']" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                </Link>
                  <section aria-labelledby="sale-heading" class="relative max-w-7xl mx-auto pt-32 px-4 flex flex-col items-center text-center sm:px-6 lg:px-8">
                      <div class="max-w-2xl mx-auto lg:max-w-none">
                        <button @click="productDropdown = !productDropdown" class="mt-6 inline-block w-full bg-gray-900 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-gray-800 sm:w-auto">Fler produkter</button>
                      </div>
                  </section>
                </div>
                    <div class="flex-1 hidden sm:block"/>
                      <div class="flex justify-center space-x-12">
                          <div v-show="productDropdown" class="fixed inset-20 z-10" @click="productDropdown = false" />
                          <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                              <div v-if="productDropdown" class="absolute z-10 top-1/2 flex jsutify-center w-screen max-w-6xl bg-white">
                                  <div class="rounded-lg shadow-xl overflow-hidden">
                                    <div class="relative grid grid-flow-col-dense sm:p-3">
                                      <div>
                                        <h2 class="text-sm font-medium text-gray-400"></h2>  
                                          <div v-for="product in productOptions" :key="product.category" class="grid grid-cols-6 gap-x-8">
                                            <Link v-for="option in product.options" :key="option.id" :href="route(option.href)" class="pt-6 flex items-center gap-4 transition ease-in-out duration-150 hover:animate-bounce text-sm font-semibold text-gray-700">
                                              <img class="h-7 w-7" :src="option.image"/>
                                              {{ option.name }}
                                            </Link>
                                          </div>
                                        </div>     
                                    </div>

                                  </div>
                              </div>
                          </transition>
                    </div>
          </div>
<!-- 
                          @click="productDropdown = !productDropdown" 
                          :class="[ '/'+$page.url.split('/')[1] === '/produkter' ? 'bg-indigo-400 text-white hover:bg-indigo-500' : 'hover:bg-pink-400 hover:text-white transition duration-500 ease-in-out', 'font-semibold text-sm px-3 py-2 rounded-md flex']">
                         -->

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
            <div v-show="dropdownMobile" class="inset-0 z-10" @click="dropdownMobile = false" />
  
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
                <div class="pb-6 px-5 bg-white">
                     <div class="flex items-center justify-between">
                        <div>
                            <img class="h-4 w-auto">
                        </div>
                        <div>
                            <button type="button" @click="dropdownMobile = !dropdownMobile"
                                    class=" dark:bg-gray-800 rounded-md p-2 inline-flex items-center justify-center text-gray-50  hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-5 w-5 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>  
                    </div>
                  <div class="grid grid-cols-3 gap-2 place-content-start">
                    <Link v-for="name in names" :key="name.id" :href="route(name.href)" class="flex items-center justify-center bg-gray-100 px-1 py-1 text-gray-600 rounded-md text-sm font-semibold">
                        {{ name.name }}
                    </Link>
                  </div>  
                </div>
            </div>
        </div>
      </transition>

        

      
        <main class="max-w-2xl mx-auto py-5 px-4 sm:px-6 lg:max-w-6xl lg:px-8">
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

  const productUrl = '/produkter';
  const names = [
    {id: 1, name: 'PC-Kassa', href:'products.pc-kassa', url: productUrl+'/pc-kassa'}, 
    {id: 2, name: 'Kortterminal', href:'products.card-terminal', url: productUrl+'/kortterminal'},
    {id: 3, name: 'Kassaregister', href:'products.kassaregister', url: productUrl+'/kassaregister'},
    {id: 4, name: 'EnoxKassa', href:'products.enox-kassa', url: productUrl+'/enox-kassa'},
    {id: 5, name: 'Orderplatta', href:'products.orderplatta', url: productUrl+'/orderplatta'},
    {id: 6, name: 'Skanner', href:'products.skanner', url: productUrl+'/skanner'},
    {id: 7, name: 'Vågar', href:'products.vagar', url: productUrl+'/vagar'},
    {id: 8, name: 'Skrivare', href:'products.skrivare', url: productUrl+'/skrivare'},
    {id: 9, name: 'Kontrollenheter', href:'products.kontrollenheter', url: productUrl+'/kontrollenheter'},
    {id: 10, name: 'Kvittorullar', href:'products.kvittorullar', url: productUrl+'/kvittorullar'},
    {id: 11, name: 'Tillbehör', href:'products.tillbehor', url: productUrl+'/tillbehor'}
  ];

  const productOptions = [
          { 
        options:[ 
            {id: 1, name: 'PC-Kassa', href:'products.pc-kassa', image:'/droppic4.svg'},
            {id: 2, name: 'Kassaregister', href:'products.kassaregister', image:'/droppic1.svg'},
            {id: 3, name: 'Enox-kassa', href:'products.enox-kassa', image:'/droppic2.svg'},
            {id: 1, name: 'Kortterminal', href:'products.card-terminal', image:'/droppic3.svg'},
            {id: 2, name: 'Orderplatta', href:'products.orderplatta', image:'/droppic5.svg'},
            {id: 3, name: 'Skanner', href:'products.skanner', image:'/droppic6.svg'},
            {id: 4, name: 'Vågar', href:'products.vagar', image:'/droppic2.svg'},
            {id: 5, name: 'Skrivare', href:'products.skrivare', image:'/droppic1.svg'},
            {id: 6, name: 'Kontrollenheter', href:'products.kontrollenheter', image:'/droppic5.svg'},
            {id: 7, name: 'Kvittorullar', href:'products.kvittorullar', image:'/droppic4.svg'},
            {id: 8, name: 'Tillbehör', href:'products.tillbehor', image:'/droppic3.svg'}
            ]
          }, 
      ];

  const dropdownMobile = ref((false))
  const productDropdown = ref((false))
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
        productDropdown,
        productOptions,
      }
    },
    
    props: ['cart'],
    data() {
      return {
        hoverText: '',
      }
    },

    methods: {
      textHover(text) {
        this.hoverText = text;
      },

      hasAddedProduct(){
       this.hasAddedProduct = true,
        setTimeout(() => {this.hasAddedProduct = false}, 2000);
       
      },

      

    },
  }



</script>