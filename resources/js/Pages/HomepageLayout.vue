<template>
  <nav class="relative">
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
                    <div class="flex justify-center space-x-8">
                        <button 
                          @click="productDropdown = !productDropdown" 
                            class="text-black font-semibold transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm uppercase"
                        >
                            Produkter
                        </button>
                        <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                            <div v-if="productDropdown" class="absolute z-10 top-9 left-72  transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">
                                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                  <div class="relative grid grid-cols-2 gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                      <div v-for="product in productOptions" :key="product.category">
                                        <div class="flex flex-col">
                                          <div class="font-medium text-black">
                                            {{ product.category }}
                                          </div>
                                          <Link v-for="option in product.options" :key="option.id" :href="route(option.href)" class="font-normal text-gray-600">
                                            {{ option.name }}
                                          </Link>
                                        </div> 
                                      </div>
                                    
                                  </div>
                                
                                    <!-- <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                        <Link v-for="item in productOptions" :key="item.category" :href="route(item.href)" :class="['-m-3 p-3 flex items-start rounded-lg hover:bg-gray-200 transition ease-in-out duration-150']">
                                          <div class="ml-4">
                                              <p class="text-base font-medium text-gray-900">
                                              {{ item.name }}
                                              </p>
                                              <p class="mt-1 text-sm text-gray-500">
                                              {{ item.description }}
                                              </p>
                                          </div>
                                        </Link>
                                    </div>
                                    <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                        <div v-for="item in callsToAction" :key="item.name" class="flow-root">
                                      
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </transition>
                        <Link v-for="nav in navigation" :key="nav.id" :href="route(nav.href)" class="text-black font-semibold transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm">
                            {{ nav.name }}
                        </Link>
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
      {id: 1, name: 'ERBJUDANDE', href:'erbjudande'},
      {id: 2, name: 'INLÖSENAVTAL', href:'agreement'},
      {id: 3, name: 'OM OSS', href:'aboutus'},
      {id: 4, name: 'KONTAKT', href:'contact'},
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
          category: 'Kassor',
          options:[
              {id: 1, name: 'PC-Kassa', href:'products.pc-kassa'},
              {id: 2, name: 'Kassaregister', href:'products.kassaregister'},
              {id: 3, name: 'Enox-kassa', href:'products.enox-kassa'},
            ]
        },

        { category: 'Tillbehör',
            options:[ 
              {id: 1, name: 'Kortterminal', href:'products.card-terminal'},
              {id: 2, name: 'Orderplatta (Handy)', href:'products.orderplatta'},
              {id: 3, name: 'Skanner', href:'products.skanner'},
              {id: 4, name: 'Vågar', href:'products.vågar'},
              {id: 5, name: 'Skrivare', href:'products.skrivare'},
              {id: 6, name: 'Kontrollenheter', href:'products.kontrollenheter'},
              {id: 7, name: 'Kvittorullar', href:'products.kvittorullar'},
              {id: 8, name: 'Tillbehör', href:'products.tillbehör'}
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

      }
    },
  }

</script>
