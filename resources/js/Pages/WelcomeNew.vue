<template>
    <Head title="Välkommen" />      
    <!-- Navbar and Hero Section -->
    <nav class="relative coloranim">
            <!-- Navbar -->
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-3">
                <div class="relative flex items-center justify-between h-16">     
                    <!-- Logo -->
                    <Link href="/" class="flex-shrink-0 flex items-center">
                        <img class="sm:block h-4 w-auto" src="/smart-cash-text.svg" alt="Smart Cash"> 
                    </Link>

                    
                    <div class="absolute inset-y-0 right-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                        <button @click="dropdownMobile = !dropdownMobile" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu"> 
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
                                class="text-white font-semibold transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm uppercase"
                            >
                                Produkter
                            </button>
                            <div v-show="productDropdown" class="fixed inset-0 z-10" @click="productDropdown = false" />
                        <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
                            <div v-if="productDropdown" class="absolute z-10 top-9 left-64 transform -translate-x-1/2 mt-6 px-3 w-screen max-w-4xl sm:px-0">
                                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                  <div class="relative grid grid-cols-3 bg-white sm:p-8">
                                      
                                        <div v-for="product in productOptions2" :key="product.category" class="flex flex-col">
                                          <div class="text-sm font-medium text-gray-400 pt-4">
                                            {{ product.category }}
                                          </div>
                                          <Link v-for="option in product.options" :key="option.id" :href="route(option.href)" class="pt-6 flex items-center gap-4 transition ease-in-out duration-150 hover:animate-bounce hover:text-gray-800 text-sm font-semibold text-gray-700">
                                            <img class="h-7 w-7" :src="option.image"/>
                                            {{ option.name }}
                                          </Link>
                                        </div> 
                                        
                                    <div>
                                      <h2 class="text-sm font-medium text-gray-400 pt-4">ALLA PRODUKTER</h2>  
                                        <div v-for="product in productOptions" :key="product.category" class="grid grid-cols-2 gap-x-6">
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
                            <Link v-for="nav in navigation" :key="nav.id" :href="route(nav.href)" class="text-white flex items-center font-semibold transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm">
                                {{ nav.name }}
                            </Link>

                            <div class="py-1 rounded-full shadow-xl px-2 sm:px-6 lg:px-3 sm:block">
                                <div class="flex justify-between items-center gap-x-3">
                                    <img class="sm:block h-6 w-16 sm:h-8 sm:w-auto" src="/gasell-logo.png" alt="Gasell">
                                    <img class="sm:block h-6 w-auto sm:h-12 sm:w-auto" src="/uc-logo.png" alt="UC">
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>

        
            <!-- Hero Section -->
            <div class="relative">
                <div class="absolute inset-x-0 bottom-0 h-1/2"></div>
                <div class="mx-auto">
                    <div class="relative py-2 sm:overflow-hidden">
                        <div class="relative max-w-7xl mx-auto px-4 sm:py-16 -py-24 sm:px-6 lg:py-32 lg:px-auto">
                            <h1 class="lg:text-7xl text-5xl pt-16 sm:pt-0 sm:text-left font-bold text-white">
                                <span class="block leading-tight">Smarta Betallösningar</span>
                                <span class="block leading-tight ml-1 lg:text-3xl text-3xl font-semibold">Hör av er till oss så hjälper vi till med de absolut bästa priserna för just er verksamhet!</span>  <span class="block leading-tight ml-1 lg:text-3xl text-3xl font-semibold"></span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- Wave -->
            <img class="absolute -bottom-1 transform rotate-180" src="waves.svg" alt="wave">
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
                        <div class="py-1 px-2 sm:px-6 lg:px-3">
                            <div class="flex justify-between items-center gap-x-3">
                                <img class="sm:block h-6 w-auto sm:h-6 sm:w-auto" src="/gasell-logo.png" alt="Gasell">
                                <img class="sm:block h-6 w-auto sm:h-9 sm:w-auto" src="/uc-logo.png" alt="UC">
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </transition>
    

    <!-- Get started Section -->
    <div class="max-w-7xl mx-auto py-12 sm:py-24 px-2 sm:px-6 lg:px-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-12 gap-x-24">
            <div>
                <div>
                    <span class="h-8 sm:h-12 w-8 sm:w-12 rounded-md flex items-center justify-center bg-gradient-to-t from-indigo-600 to-pink-600">
                        <svg class="h-4 sm:h-6 w-4 sm:w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                    </span>
                </div>
                <div class="mt-6">
                    <h2 class="text-lg sm:text-4xl font-extrabold tracking-tight text-gray-900">
                        Smart Cash
                    </h2>
                    <p class="mt-4 text-sm sm:text-lg text-gray-500">
                        Smart Cash är ett väletablerat bolag i kassabranschen och erbjuder de absolut senaste funktionerna som marknaden efterfrågar. Vi strävar alltid efter att ge våra kunder en unik kundupplevelse med förstklassig service, oavsett företagsstorlek.
                    </p>
                </div>
            </div>
            <div>
                <img class="rounded-xl shadow-xl ring-1 ring-black ring-opacity-5" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" alt="Get Started">
            </div>
        </div>
    </div>


    <!-- Another Section (Give name later!!!!) -->
    <div class="max-w-7xl mx-auto py-12 sm:py-24 px-2 sm:px-6 lg:px-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-12 gap-x-24">
            <div>
                <img class="rounded-xl shadow-xl ring-1 ring-black ring-opacity-5" src="sc-logo-bg.png" alt="Get Started">
            </div>
            <div>
                <div>
                    <span class="h-8 sm:h-12 w-8 sm:w-12 rounded-md flex items-center justify-center bg-gradient-to-t from-indigo-600 to-pink-600">
                        <svg class="h-4 sm:h-6 w-4 sm:w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                    </span>
                </div>
                <div class="mt-6">
                    <h2 class="text-lg sm:text-4xl font-extrabold tracking-tight text-gray-900">
                        Kom igång samma dag!
                    </h2>
                    <p class="mt-4 text-sm sm:text-lg text-gray-500">
                        Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <Icon name="background4" class="absolute flex items-center w-screen justify-center mx-auto -left-32 p-16"></Icon>
    <div class="relative max-w-7xl mx-auto py-12 sm:py-24 px-2 sm:px-6 lg:px-3">
        <div class="sm:flex sm:justify-between sm:items-center">
            <img class="sm:block h-auto w-auto" src="/gasell-smartcash.png" alt="Gasell">
            <img class="sm:block h-auto w-auto" src="/UC-dark.png" alt="UC">
        </div>
    </div>
    <!-- Customers Section -->
    <div class="max-w-7xl mx-auto py-8 sm:py-24 px-2 sm:px-6 lg:px-3 shadow-xl">
        <h2 class="relative text-center text-lg sm:text-4xl uppercase font-extrabold text-gray-900 tracking-tight">
            Några av våra kunder
        </h2>
        <div class="relative mt-6 grid grid-cols-2 md:grid-cols-4 gap-2 sm:gap-5">
            <div v-for="customer in customers" :key="customer.id" class="col-span-1 flex justify-center py-8 px-8">
                <img class="max-h-24" :src="customer.logo" :alt="customer.name">
            </div>
        </div>
    </div>

    <!-- Support Section -->
    <div class="w-full mx-auto py-12 sm:py-24">
        <div class="relative pb-32 bg-gray-800">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover" src="support2.svg" alt="">
                <div class="absolute inset-0 bg-gradient-to-tr from-pink-600 via-purple-500 to-indigo-600 mix-blend-multiply" aria-hidden="true"></div>
            </div>
            <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
                <h1 class="text-2xl uppercase font-bold tracking-tight text-white md:text-5xl lg:text-4xl">Vi hjälper dig</h1>
                <p class="mt-6 max-w-3xl text-sm sm:text-lg text-gray-300">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames. Dui, amet, nec sit pulvinar.</p>
            </div>
        </div>

        <section class="-mt-32 max-w-7xl mx-auto relative z-10 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
            <h2 class="sr-only" id="contact-heading">Kontakta oss</h2>
            <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">

                <div v-for="support in contactUs" :key="support.id" class="flex flex-col bg-white rounded-2xl shadow-lg transition duration-500 hover:shadow-2xl">
                    <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                        <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
                            <div v-html="support.svg"></div>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900">{{ support.type }}</h3>
                        <p class="mt-4 text-base text-gray-500">
                            {{ support.description }}
                        </p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
                        <a :href="support.href" class="text-base font-medium text-indigo-700 hover:text-indigo-600">
                            Kontakta<span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </div>


        <!-- Another Section (Give name later!!!!) -->
    <div class="max-w-7xl mx-auto py-12 sm:py-24 px-2 sm:px-6 lg:px-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-12 gap-x-24">
            <div>
                <div class="mt-6">
                    <h2 class="text-lg sm:text-4xl font-extrabold tracking-tight text-gray-900">
                        PC-Kassor
                    </h2>
                    <p class="mt-4 text-sm sm:text-lg text-gray-500">
                        Behöver du bara kunna ta betalt med kort? Eller söker du en smart mobil terminal som kan integreras med ditt affärssystem?
                    </p>
                </div>
                <div class="py-4">
                    <a href="products.pc-kassa" class="text-base font-medium text-indigo-700 hover:text-indigo-600">
                        Gå vidare<span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>
            <div>
                <img class="rounded-xl shadow-xl ring-1 ring-black ring-opacity-5" src="3pckassor.png" alt="Get Started">
            </div>
        </div>
    </div>

    <!-- Another Section (Give name later!!!!) -->
    <div class="max-w-7xl mx-auto py-12 sm:py-24 px-2 sm:px-6 lg:px-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-12 gap-x-24">
            <div>
                <img class="rounded-xl shadow-xl ring-1 ring-black ring-opacity-5" src="3kortterminaler.png" alt="Get Started">
            </div>
            <div>
                <div class="mt-6">
                    <h2 class="text-lg sm:text-4xl font-extrabold tracking-tight text-gray-900">
                        Kortterminaler
                    </h2>
                    <p class="mt-4 text-sm sm:text-lg text-gray-500">
                        Behöver du bara kunna ta betalt med kort? Eller söker du en smart mobil terminal som kan integreras med ditt affärssystem?
                    </p>
                </div>
                <div class="py-4">
                    <a href="products.kortterminaler" class="text-base font-medium text-indigo-700 hover:text-indigo-600">
                        Gå vidare<span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    
  <Footer />
</template>

<script>
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from '@vue/reactivity';
import Footer from '@/Components/Footer';
import Icon from '@/Components/Icon.vue';
      
    const navigation = [
        {id: 2, name: 'ERBJUDANDE', href:'erbjudande'},

        {id: 4, name: 'INLÖSENAVTAL', href:'agreement'},
        {id: 5, name: 'OM OSS', href:'aboutus'},
        {id: 6, name: 'KONTAKT', href:'contact'},
    ];

    const products = [
        {id: 2, name: 'ERBJUDANDE', href:'erbjudande'},
        {id: 4, name: 'INLÖSENAVTAL', href:'agreement'},
        {id: 5, name: 'OM OSS', href:'aboutus'},
        {id: 6, name: 'KONTAKT', href:'contact'},
    ];

    const navigationmobile = [
        {id: 1, name: 'PRODUKTER', href:'products.pc-kassa'},
        {id: 2, name: 'ERBJUDANDE', href:'erbjudande'},
        {id: 4, name: 'INLÖSENAVTAL', href:'agreement'},
        {id: 5, name: 'OM OSS', href:'aboutus'},    
        {id: 6, name: 'KONTAKT', href:'contact'},
    ];

    const names = [
        {id: 1, name: 'PC-Kassa', href:'products.pc-kassa'}, 
        {id: 2, name: 'Kortterminal', href:'products.card-terminal'},
        {id: 3, name: 'Kassaregister', href:'products.kassaregister'},
        {id: 4, name: 'Enox-kassa', href:'products.enox-kassa'},
        {id: 5, name: 'Orderplatta (Handy)', href:'products.orderplatta'},
        {id: 6, name: 'Skanner', href:'products.skanner'},
        {id: 7, name: 'Vågar', href:'products.vagar'},
        {id: 8, name: 'Skrivare', href:'products.skrivare'},
        {id: 9, name: 'Kontrollenheter', href:'products.kontrollenheter'},
        {id: 10, name: 'Kvittorullar', href:'products.kvittorullar'},
        {id: 11, name: 'Tillbehör', href:'products.tillbehor'}
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
      ]

      const productOptions2 = [

                { 
          category: 'RESTAURANG & CAFÉ',
          options:[
              {id: 1, name: 'PC-Kassa', href:'products.pc-kassa', image:'/droppic4.svg'},
              {id: 2, name: 'Kassaregister', href:'products.kassaregister', image:'/droppic1.svg'},
              {id: 3, name: 'Enox-kassa', href:'products.enox-kassa', image:'/droppic5.svg'},
            ]
        },

                { 
          category: 'SKÖNHET & HÄLSA',
          options:[
                {id: 1, name: 'PC-Kassa', href:'products.pc-kassa', image:'/droppic3.svg'},
                {id: 2, name: 'Kassaregister', href:'products.kassaregister', image:'/droppic6.svg'},
                {id: 3, name: 'Enox-kassa', href:'products.enox-kassa', image:'/droppic2.svg'},
              ]
        },       
      ]

    const customers = [
        {id: 1, name: 'Panfresco', logo: '/Picture1.jpg'},
        {id: 1, name: 'Burger King', logo: '/Picture2.svg'},
        {id: 1, name: 'Taco bar', logo: '/Picture3.jpg'},
        {id: 1, name: 'T-shirt Store', logo: '/Picture4.png'},
        {id: 1, name: 'Stadsvakten', logo: '/Picture5.png'},
        {id: 1, name: 'NordicClub', logo: '/Picture6.jpg'},
        {id: 1, name: 'Brooklyn Bar', logo: '/Picture7.jpg'},
        {id: 1, name: 'Urbane Goat', logo: '/Picture8.jpg'},

    ]

    const contactUs = [
        {
          id: 1, 
          svg: '<svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>', 
          type: 'Kontakta oss',
          description: 'Hör av er till oss för en professionell rådgivning över vilka produkter just du behöver i din verksamhet.',
          href: '/kontakt'
        },
        {
          id: 2, 
          svg: '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>', 
          type: 'Vi erbjuder',
          description: 'Flexibelt kassasystem med integrerad kortterminal & inlösenavtal som anpassas efter kundens behov.',
          href: '#'
        },
        {
          id: 3, 
          svg: '<svg class="h-6 w-6 text-white"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>', 
          type: 'Support',
          description: 'Support Mån-Sön',
          href: '/kontakt'
        },   
    ]

    const productDropdown = ref((false));
    const dropdownMobile = ref((false));

    export default {
        components: {
            Head,
            Link,
            Footer,
            Icon
        },

        setup() {
            return {
                navigation,
                productDropdown,
                products,
                navigationmobile,
                dropdownMobile,
                names,
                productOptions,
                customers,
                contactUs,
                productOptions2,
            }
        },
    }
    
</script>

<style scoped>
   
    .coloranim {
    background: linear-gradient(-95deg, #5c21ff, #fc1f74, #a311f8, rgb(227, 67, 255));
    background-size: 200% 200%;
    animation: gradient 5s ease infinite;
    height: 55vh;
    width: 100%;
    }

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