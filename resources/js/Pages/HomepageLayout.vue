<template>
<div>

  <nav class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-3">
          <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
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
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
              <Link href="/" class="flex-shrink-0 flex items-center">
                <img class="block lg:hidden h-8 w-auto" src="/textlogo2.svg" alt="Smart Cash"> 
                <img class="hidden lg:block h-4 w-auto" src="/textlogo2.svg" href="welcome" alt="Smart Cash">

              </Link>
              <div class="hidden sm:block sm:ml-24">
                <div class="flex space-x-8">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <Link v-for="nav in navigation" :key="nav.id" :href="route(nav.href)" class="text-black font-semibold transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm">
                  {{ nav.name }}
                </Link>

                </div>
              </div>
            </div>
          </div>
        </div>

<!--         <div class="sm:hidden" id="mobile-menu">
          <div class="px-2 pt-2 pb-3 space-y-1">
                <Link v-for="navmobile in navigationmobile" :key="navmobile.id" :href="route(navmobile.href)" class="text-black font-semibold transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm">
                  {{ navmobile.name }}
                </Link>
          </div>
        </div>    -->  
        
      <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
        <div v-if="dropdownMobile" class="absolute z-10 top-9 left-72  transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">
          <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <Link v-for="navmobile in navigationmobile" :key="navmobile.id" :href="route(navmobile.href)" class="text-black font-semibold transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm">
                  {{ navmobile.name }}
                </Link>
          </div>
        </div> 
      </transition>
        
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
      {id: 1, name: 'PRODUKTER', href:'products.pc-kassa'},
      {id: 2, name: 'ERBJUDANDE', href:'erbjudande'},
      {id: 3, name: 'REFERNSER', href:'refrences'},
      {id: 4, name: 'INLÖSENAVTAL', href:'agreement'},
      {id: 5, name: 'OM OSS', href:'aboutus'},
      {id: 6, name: 'KONTAKT', href:'contact'},
    ];

    const navigationmobile = [
      {id: 1, name: 'PRODUKTER', href:'products.pc-kassa'},
      {id: 2, name: 'ERBJUDANDE', href:'erbjudande'},
      {id: 3, name: 'REFERNSER', href:'refrences'},
      {id: 4, name: 'INLÖSENAVTAL', href:'agreement'},
      {id: 5, name: 'OM OSS', href:'aboutus'},
      {id: 6, name: 'KONTAKT', href:'contact'},
    ];

    const dropdownMobile = ref((false))  
  
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

      }
    },
  }

</script>
