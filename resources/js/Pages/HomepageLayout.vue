<template>
<div>
  <nav class="relative">
        <!-- Navbar -->
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-3">
            <div class="relative flex items-center justify-between h-16">     
                <!-- Logo -->
                <Link href="/" class="flex-shrink-0 flex items-center">
                    <img class="sm:block h-4 w-auto" src="/textlogo2.svg" alt="Smart Cash"> 
                </Link>
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

    <main>
        <slot></slot>
    </main>

     <Footer />

</div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from '@vue/reactivity';
import Footer from '@/Components/Footer';

    const navigation = [
      {id: 1, name: 'ERBJUDANDE', href:'erbjudande'},
/*       {id: 2, name: 'REFERNSER', href:'refrences'}, */
      {id: 3, name: 'INLÖSENAVTAL', href:'agreement'},
      {id: 4, name: 'OM OSS', href:'aboutus'},
      {id: 5, name: 'KONTAKT', href:'contact'},
    ];

    const navigationmobile = [
      {id: 1, name: 'PRODUKTER', href:'products.pc-kassa'},
      {id: 2, name: 'ERBJUDANDE', href:'erbjudande'},
/*       {id: 3, name: 'REFERNSER', href:'refrences'} */,
      {id: 4, name: 'INLÖSENAVTAL', href:'agreement'},
      {id: 5, name: 'OM OSS', href:'aboutus'},
      {id: 6, name: 'KONTAKT', href:'contact'},
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
