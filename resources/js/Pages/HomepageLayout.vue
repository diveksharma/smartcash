<template>
<div>

  <nav class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-3">
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
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!--
                  Icon when menu is open.

                  Heroicon name: outline/x

                  Menu open: "block", Menu closed: "hidden"
                -->
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
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
          <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <Link v-for="navmobile in navigationmobile" :key="navmobile.id" :href="route(navmobile.href)" class="text-black font-semibold transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm">
                  {{ navmobile.name }}
                </Link>
          </div>
        </div>
  </nav>

    <main>
        <slot></slot>
    </main>

      <div class="border-t border-gray-200 py-5 mt-28">
      </div>


  <div class="lg:max-w-7xl lg:mx-auto lg:grid lg:grid-cols-3 lg:gap-y-5"> 
    <div>
        <div class="text-center">
            <h2 class="text-1xl font-extrabold tracking-tight text-gray-900">
                INFORMATION
            </h2>
            <p class="mt-1 text-md text-gray-500">
                Boka demo
            </p>
        </div>
    </div>

    <div>
        <div class="text-center">
            <h2 class="text-1xl font-extrabold tracking-tight text-gray-900">
                SUPPORT
            </h2>
            <p class="mt-1 text-md text-gray-500">
                Kassaregister och kortterminaler:
                011- 470 90 00
            </p>
            <p class="mt-1 text-md text-gray-500">
                PC-Kassor:
                011-184746
            </p>
            <p class="mt-1 text-md text-gray-500">
                support@smartcash.se
            </p>
        </div>
    </div>

    <div>
        <div class="text-center">
            <h2 class="text-1xl font-extrabold tracking-tight text-gray-900">
                KONTAKT
            </h2>
            <p class="mt-1 text-md leading-none text-gray-500">
                Smart Cash Sverige AB
            </p>
            <p class="mt-1 text-md leading-none text-gray-500">
                Kiselgatan 19
            </p>
            <p class="mt-1 text-md leading-none text-gray-500">
                602 23 Norrköping
            </p>
            <p class="mt-1 text-md leading-none text-gray-500">
                011-470 90 00
            </p>
        </div>
    </div>
  </div>


  <footer class="bg-warm-gray-900" aria-labelledby="footer-heading">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="mt-12 border-t border-warm-gray-700 pt-8">
            <p class="text-base text-warm-gray-400 xl:text-center">
            &copy; 2021 Smart Cash
            </p>
        </div>
        </div>
  </footer>

</div>
</template>

<style scoped>
/*         coloranimation */
        .coloranim {
        background: linear-gradient(-45deg, #5c21ff, #fc1f74, #a311f8, #ff64b9);
        background-size: 200% 200%;
        animation: gradient 6s ease infinite;
        height: 55vh;
        width: 100%;
    }


    /* coloranimation */
    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

</style>

<script>
import { Link } from '@inertiajs/inertia-vue3';

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

    
  
  export default {
    components: {
      Link,
    },
        
    setup() {
      return {
        navigation,
        navigationmobile,
      }
    },
  }

</script>