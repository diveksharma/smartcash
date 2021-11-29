<template>
  <nav class="relative bg-white">
        <!-- Navbar -->
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-3">
            <div class="relative flex items-center justify-between h-16">     
                <!-- Logo -->
                <Link href="/" class="flex-shrink-0 flex items-center">
                    <img class="sm:block h-4 w-auto" src="/textlogo2.svg" alt="Smart Cash"> 
                </Link>
                <div class="absolute inset-y-0 right-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                      <button @click="dropdownMobile = !dropdownMobile" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-white hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu"> 
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                      </button>

                      <button>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                  </button>
                </div>
                <!-- Main menu Desktop -->
                  <div class="flex-1 hidden sm:block">
                    <div class="flex justify-center space-x-12">
                        <button 
                          @click="productDropdown = !productDropdown" 
                          :class="[ '/'+$page.url.split('/')[1] === '/produkter' ? 'bg-pink-400 text-white' : 'text-black hover:bg-pink-400 hover:text-white transition duration-500 ease-in-out', 'font-semibold text-sm px-3 py-2 rounded-md flex items-center']"
                        >
                            PRODUKTER
                        </button>
                        <div v-show="productDropdown" class="fixed inset-0 z-10" @click="productDropdown = false" />
                        <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                            <div v-if="productDropdown" class="absolute z-10 top-9 left-64 transform -translate-x-1/2 mt-6 px-3 w-screen max-w-xl sm:px-0">
                                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                  <div class="relative grid grid-cols-2 gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                      <div>
                                        <h2 class="font-semibold">VI REKOMENDERAR</h2>
                                        <div v-for="product in productOptions2" :key="product.category" class="flex flex-col">
                                          <div class="text-sm font-medium text-gray-400 pt-4">
                                            {{ product.category }}
                                          </div>
                                          <Link v-for="option in product.options" :key="option.id" :href="route(option.href)" class="pt-4 hover:text-gray-800 transition ease-in-out duration-150 text-sm font-semibold text-gray-500">
                                            {{ option.name }}
                                          </Link>
                                        </div> 
                                      </div>  
                                    <div>
                                      <h2 class="font-semibold">ALLA PRODUKTER</h2>  
                                        <div v-for="product in productOptions" :key="product.category" class="grid grid-cols-2 pt-9">
                                          <Link v-for="option in product.options" :key="option.id" :href="route(option.href)" class="pt-4 hover:text-gray-800 transition ease-in-out duration-150 text-sm font-semibold text-gray-500">
                                            {{ option.name }}
                                          </Link>
                                        </div>
                                      </div>     
                                  </div>

                                </div>
                            </div>
                        </transition>
                        <Link v-for="nav in navigation" :key="nav.id" :href="route(nav.href)" :class="[ $page.url === nav.url ? 'bg-pink-400 text-white' : 'text-black hover:bg-pink-400 hover:text-white transition duration-500 ease-in-out', 'font-semibold text-sm px-3 py-2 rounded-md flex items-center']">
                            {{ nav.name }}
                        </Link>

                        <div class="py-1 px-2 sm:px-6 lg:px-3 sm:block hidden">
                          <div class="flex justify-between items-center gap-x-3">
                            <img class="sm:block h-6 w-16 sm:h-8 sm:w-auto" src="/gasell-logo.png" alt="Gasell">
                            <img class="sm:block h-6 w-auto sm:h-12 sm:w-auto" src="/uc-logo.png" alt="UC">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <transition
        enter-active-class="transition ease-out duration-200"
        enter-class="opacity-0 scale-95"
        enter-to-class="opacity-100 scale-100"
        leave-active-class="duration-100 ease-in"
        leave-class="opacity-100 scale-100"
        leave-to-class="opacity-0 scale-95"
    >
        <div v-show="dropdownMobile" @click="dropdownMobile = false" class="absolute top-0 z-10 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="ring-1 ring-white ring-opacity-75 bg-white dark:bg-black divide-y-2 divide-gray-50 rounded-lg shadow-lg">
                <div class="pt-5 pb-6 px-5 bg-gray-50">
                    <div class="flex items-center justify-between">
                        <div>
                            <img class="h-4 w-auto" src="/textlogo2.svg" alt="Smart Cash">
                        </div>
                        <div class="-mr-2">
                            <button type="button" @click="dropdownMobile = !dropdownMobile"
                                    class=" dark:bg-gray-800 rounded-md p-2 inline-flex items-center bg-gray-50 justify-center text-gray-50  hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-7 w-7 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                      <div class="grid grid-cols-3 gap-0 mx-auto">
                        <Link v-for="navmobile in navigationmobile" :key="navmobile.id" :href="route(navmobile.href)" class="text-black font-semibold transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm">
                            {{ navmobile.name }}
                        </Link>
                      </div>  
                </div>
            </div>
        </div>
    </transition>
    <main>
        <slot></slot>
    </main>

     <Footer />
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from '@vue/reactivity';
import Footer from '@/Components/Footer';

    const navigation = [
      {id: 1, name: 'ERBJUDANDE', href:'erbjudande', url: '/erbjudande'},
      {id: 2, name: 'INLÖSENAVTAL', href: 'agreement', url: '/inlosenavtal'},
      {id: 3, name: 'OM OSS', href:'aboutus', url: '/omoss'},
      {id: 4, name: 'KONTAKT', href:'contact', url: '/kontakt'},
    ];

    const navigationmobile = [
      {id: 1, name: 'PRODUKTER', href:'products.pc-kassa'},
      {id: 2, name: 'ERBJUDANDE', href:'erbjudande'},
      {id: 3, name: 'INLÖSENAVTAL', href:'agreement'},
      {id: 4, name: 'OM OSS', href:'aboutus'},
      {id: 5, name: 'KONTAKT', href:'contact'},
    ];

          const productOptions = [

            { 
              options:[ 
                  {id: 1, name: 'PC-Kassa', href:'products.pc-kassa'},
                  {id: 2, name: 'Kassaregister', href:'products.kassaregister'},
                  {id: 3, name: 'Enox-kassa', href:'products.enox-kassa'},
                  {id: 1, name: 'Kortterminal', href:'products.card-terminal'},
                  {id: 2, name: 'Orderplatta', href:'products.orderplatta'},
                  {id: 3, name: 'Skanner', href:'products.skanner'},
                  {id: 4, name: 'Vågar', href:'products.vagar'},
                  {id: 5, name: 'Skrivare', href:'products.skrivare'},
                  {id: 6, name: 'Kontrollenheter', href:'products.kontrollenheter'},
                  {id: 7, name: 'Kvittorullar', href:'products.kvittorullar'},
                  {id: 8, name: 'Tillbehör', href:'products.tillbehor'}
                ]
            }, 
      ]

      const productOptions2 = [

                { 
          category: 'RESTAURANG & CAFÉ',
          options:[
              {id: 1, name: 'PC-Kassa', href:'products.pc-kassa'},
              {id: 2, name: 'Kassaregister', href:'products.kassaregister'},
              {id: 3, name: 'Enox-kassa', href:'products.enox-kassa'},
            ]
        },

                { 
          category: 'SKÖNHET & HÄLSA',
          options:[
                {id: 1, name: 'PC-Kassa', href:'products.pc-kassa'},
                {id: 2, name: 'Kassaregister', href:'products.kassaregister'},
                {id: 3, name: 'Enox-kassa', href:'products.enox-kassa'},
              ]
        },       
      ]

    const dropdownMobile = ref((false))
    const productDropdown = ref((false))  
  
  export default {
    components: {
      Link,
      Footer,
    },
      
    setup() {
      return {
        navigation,
        navigationmobile,
        dropdownMobile,
        productDropdown,
        productOptions,
        productOptions2,

      }
    },
  }

</script>
 <style>
  .smartcash-bg-color-banner {
    background-color: #ff90ed;
  }

  .smartcash-text-color-pink {
    color: #ff90ed;
  }
 </style>