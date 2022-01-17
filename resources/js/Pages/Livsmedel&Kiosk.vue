<template>
     <!-- NAVBAR AND HERO SECTION -->
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
                                <span class="block leading-tight uppercase">Livsmedel & Kiosk</span>
                                <span class="block leading-tight ml-1 lg:text-3xl text-3xl font-semibold"></span>  <span class="block leading-tight ml-1 lg:text-3xl text-3xl font-semibold"></span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- Wave -->
            <img class="absolute -bottom-1 transform rotate-180" src="waves.svg" alt="wave">
    </nav>
    <!-- DROPDOWN -->
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

    <!-- CONTENT -->
<!--     <div class="bg-white">
        <div class="max-w-2xl mx-auto py-24 px-4 sm:py-3 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="grid items-center grid-cols-1 gap-y-16 gap-x-8 lg:grid-cols-2">
                <div>
                    <div class="border-b border-gray-200 pb-10">
                        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Är du ute efter ett kassasystem med en våg, skanner och kortterminal kopplad till kassan? Då har du kommit rätt!</p>
                        <br>
                        <h2 class="font-medium text-gray-500">Enox kassasystem är anpassat för alla livsmedelsbutiker och kiosker som har ett behov av de funktioner marknaden efterfrågar. Med Enox kassasystem kan du sammankoppla en våg eller varför inte en skanner för att underlätta din försäljning. För att få reda på exakt vad du behöver så tveka inte att kontakta oss för en Demo helt kostnadsfritt.</h2>
                    </div>

                    <dl class="mt-10 space-y-10">
                       <div v-for="feature in features" :key="feature.name">
                            <dt class="text-lg -ml-1 font-bold tracking-tight text-gray-900">{{ feature.name }}</dt>
                            <dd class="mt-4 text-md text-gray-500">{{ feature.description }}</dd>
                        <div>
                            <img :src="feature.image" class="h-24 w-auto rounded-md">
                        </div>
                        </div>
                    </dl>
                </div>
            
                <div>
                    <div class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden" >
                        <img src="https://quickbutik.imgix.net/22496B/products/1613570786602cf3baf2288.jpeg" />
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-4 sm:gap-6 sm:mt-6 lg:gap-8 lg:mt-8">
                        
                        <div class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden">
                            <img src="https://quickbutik.imgix.net/22496B/products/60450ca9c4f63.jpeg" alt="PC-Kassa" class="w-full h-full object-center object-cover shadow-lg" :class="{ full: fullWidthImage }" @click="fullWidthImage = !fullWidthImage"  />
                        </div>

                        <div class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden">
                            <img src="https://quickbutik.imgix.net/22496B/products/60450cd7b0c17.jpeg" alt="Photo" class="w-full h-full object-center object-cover" :class="{ full: fullWidthImage }" @click="fullWidthImage = !fullWidthImage"  />
                        </div>
                    
                        
                        <div class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden">
                            <img src="https://quickbutik.imgix.net/22496B/products/60450cdb1bec2.jpeg" alt="Photo" class="w-full h-full object-center object-cover" :class="{ full: fullWidthImage }" @click="fullWidthImage = !fullWidthImage"  />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="bg-white sm:pb-32">
        <div class="max-w-2xl mx-auto py-24 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
                <div>
                    <div class="border-b border-gray-200 pb-10">
                        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Ett kassasystem framtaget för butiker inom skönhet & salong!</p>
                        <br>
                        <h2 class="font-medium text-gray-500">I vårt kassasystem har vi inte bara tänkt på alla viktiga funktioner våra kunder efterfrågar utan har även jobbat på designen av kassorna då vi anser att det behöver se snyggt och prydligt ut för att matcha er butik. Med Enox kassasystem kan du enkelt hålla koll på ditt lager samt sköta era bokningar på ett enkelt & smidigt sätt. Här kan ni erbjuda era kunder e-postbekräftelser efter varje bokning. För att få reda på exakt vad du behöver så tveka inte att kontakta oss för en Demo helt kostnadsfritt.</h2>
                    </div>

                    <dl class="mt-10 space-y-10">
                       <div v-for="feature in features" :key="feature.name">
                                <dt class="text-lg -ml-1 font-bold tracking-tight text-gray-900">{{ feature.name }}</dt>
                                <dd class="mt-4 text-md font-semibold sm:whitespace-nowrap text-gray-500">{{ feature.description }}</dd>
<!--                             <div>
                                <img :src="feature.image" class="h-24 w-auto rounded-md">
                            </div> -->
                        </div>
                    </dl>
                </div>
            <div class="bg-purple-400 absolute sm:block hidden right-0" style="width: 50%; height: 40%;"/>
                <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-16 relative">
<!--                     <ImagePopup 
                        class="image" 
                        src="https://quickbutik.imgix.net/22496B/products/1613570786602cf3baf2288.jpeg" 
                        alt="TODO" 
                        title="TODO "
                    ></ImagePopup> -->
                    <ImagePopup src="https://quickbutik.imgix.net/22496B/products/1613570786602cf3baf2288.jpeg" alt="Enox" class="bg-gray-100 rounded-lg p-2" />
                    <ImagePopup src="https://quickbutik.imgix.net/22496B/products/60450ca9c4f63.jpeg" alt="Enox" class="bg-gray-100 rounded-lg p-2" />
                    <ImagePopup src="https://quickbutik.imgix.net/22496B/products/60450cd7b0c17.jpeg" alt="Enox" class="bg-gray-100 rounded-lg p-2" />
                    <ImagePopup src="https://quickbutik.imgix.net/22496B/products/60450cdb1bec2.jpeg" alt="Enox" class="bg-gray-100 rounded-lg p-2" />
                </div>
        </div>
    </div>

        <div class="bg-purple-400 absolute sm:block hidden left-0" style="width: 55%; height:  55%;"/>
        <div class="relative py-12">
            <div class="overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 space-y-8 sm:px-6 lg:px-8">
                    <div class="text-base max-w-prose mx-auto lg:max-w-none -mb-6">
                        <h2 class="text-base text-indigo-600 font-semibold uppercase">Funktioner:</h2>
                    </div>
                    <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-start">
                        <div class="relative z-10">
                            <div v-for="text in descriptions" :key="text.id" class="prose prose-indigo sm:text-white text-gray-500 mx-auto font-semibold lg:max-w-none sm:whitespace-nowrap">

                                <li> {{ text.description }} </li>

                            </div>
                        </div>
                    <div class="mt-12 relative text-base max-w-prose mx-auto lg:mt-0 lg:max-w-none">
                        <svg class="absolute top-0 right-0 -mt-20 -mr-20 lg:top-auto lg:right-auto lg:bottom-1/2 lg:left-1/2 lg:mt-0 lg:mr-0 xl:top-0 xl:right-0 xl:-mt-20 xl:-mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                                <defs>
                                    <pattern id="bedc54bc-7371-44a2-a2bc-dc68d819ae60" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                            <rect width="404" height="384" fill="url(#bedc54bc-7371-44a2-a2bc-dc68d819ae60)" />
                        </svg>
                        <div>
                            <img class="relative rounded-lg px-6 py-8 sm:px-10 sm:pt-10 sm:pb-8" src="https://images.unsplash.com/photo-1593014290067-93bac771f1c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="cafe"/>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

    <!-- MESSAGE -->
    <div class="mx-auto pt-24">
        <div class="relative py-44 px-4 sm:px-6 lg:px-8 lg:py-24">
        <div class="absolute top-0 right-0 bg-purple-400" style="width: 50%; height: 100%;" />
        <!--      <Icon name="background" class="absolute py-1 pb-96 right-1 mb-24" ></Icon>
        <Icon name="background" class="absolute py-40 pb-72 left-1" ></Icon> --> 
            <div class="relative py-6 px-6 rounded-2xl transition duration-500 hover:shadow-2xl bg-white group-hover:bg-white max-w-xl mx-auto">
            
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        VILL DU VETA MER? SKICKA EN FÖRFRÅGAN IDAG.
                    </h2>
                    <p class="mt-4 font-bold leading-6 text-gray-700">
                        Vi ringer upp dig!
                    </p>
                </div>
                <div class="mt-12">
                    <form @submit.prevent="submitRequestForm()" class="grid grid-cols-1 gap-y-2 sm:gap-y-8 gap-x-6 sm:grid-cols-2 sm:gap-x-8">
                        
                        <div class="sm:col-span-1">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">NAMN/FÖRETAG</label>
                            <div class="mt-1">
                                <input required id="name" type="text" name="first-name" autocomplete="given-name" v-model="fields.name" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            </div>
                        </div>
                            
                        
                            
                        <div class="sm:col-span-1">
                            <label for="email" class="block text-sm font-medium text-gray-700">EMAIL</label>
                            <div class="mt-1">
                                <input required id="email" name="email" type="email" autocomplete="email" v-model="fields.email" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                            </div>        
                        </div>

                        <div class="sm:col-span-">
                            <label for="phone-number" class="block text-sm font-medium text-gray-700">TELEFON</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input required id="phone" type="tel" name="phone-number" autocomplete="tel" v-model="fields.phone" class="py-1 px-4 block w-full focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder-opacity-30="+46 555 987-6543">
                            </div>
                        </div>

                        <div class="py-5 px-4 sm:col-span-1">
                            <button type="submit" class="text-base font-semibold w-full inline-flex items-center justify-center px-12 py-2 xl:px-7 border border-transparent rounded-xl shadow-md text-white bg-purple-400 transition duration-200 ease-in-out hover:bg-indigo-500 focus:ring-2 focus:ring-blue-600">
                                SKICKA
                            </button>
                        </div>
                        
                        <div v-if="success" class="text-green-500 ml-3">
                            Skickat!
                        </div>
                    </form>
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
import ImagePopup from '@/Components/ImagePopup.vue';
      
    const navigation = [
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


    const features = [
  {
    name: 'Fördelar med att använda Enox som sitt kassasystem:', description: 'Godkänt av Skatteverket', image: '/pc3.png',
  },
  { name: '', description: 'Fri support & kostnadsfria uppdateringar' , image: '/kortterminal8.png'},
  {
    name: '', description: 'Inga dolda avgifter' , image: '/enoxkassa.jpg',
  },
  { name: '', description: "Snabb & stabil prestanda i alla våra kassor", image: ''},

    {
    name: '', description: 'Enkelt att använda kassan i försäljningsläge samt admin', image: '/pc3.png',
  },
  { name: '', description: 'Rapporter görs per automatik, du kan fokusera på att sälja' , image: '/kortterminal8.png'},
  {
    name: '', description: 'Integrationer mot program som swish, fortnox, personalkollen, caspeco och mycket mer.' , image: '/enoxkassa.jpg',
  },
  { name: '', description: "Kompatibelt med Sveriges största leverantörer av kortterminaler", image: ''},
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
    ];

    const products = [
        {id: 2, name: 'ERBJUDANDE', href:'erbjudande'},
        {id: 4, name: 'INLÖSENAVTAL', href:'agreement'},
        {id: 5, name: 'OM OSS', href:'aboutus'},
        {id: 6, name: 'KONTAKT', href:'contact'},
    ];

    const descriptions = [
        {
            description: 'Sökfält inbyggt i kassan för att snabbt kunna söka upp kvitton, kunder & artiklar',
        },
                {
            description: 'Presentkort/Rabattkort (pappersform eller plastkort)',
        },
                {
            description: 'Artiklar kopplade till meddelanden',
        },
                {
            description: 'Spara recept under rätt kund',
        },
                {
            description: 'Rapporter i pdf format skickat direkt till din mejladress & er ekonomiansvarig/revisor',
        },
                {
            description: 'Rabatthantering',
        },
                {
            description: 'Statistik och där man enkelt ser vilka timmar det går bäst under dygnet',
        },
                {
            description: 'Personalliggare',
        },
                {
            description: 'Kortterminal kopplad till kassan',
        },
                {
            description: 'Kunddisplay där du kan lägga upp företagsreklam eller tillbehör för merförsäljning',
        },
                {
            description: 'Inbyggt fakturasystem',
       },
                       {
            description: 'Backoffice',
       },
                       {
            description: 'Elektroniskt kvitto (välj att antingen mejla kvittot eller arkivera med ett knapptryck)',
       },
                       {
            description: 'Lagerhantering',
       },
                       {
            description: 'Bokningskalender med e-post bekräftelse',
       }, 
    ];

    const productDropdown = ref((false));
    const dropdownMobile = ref((false));

    const fields = ref({
        name: '',
        email: '',
        phone: '',
        type: 1,
    });
    const errors = ref({});
    const success = ref((false));
    const loaded = ref((true));

    export default {
        components: {
            Head,
            Link,
            Footer,
            Icon,
            Footer,
            ImagePopup,
        },

        setup() {
            return {
                navigation,
                navigationmobile,
                features,
                dropdownMobile,
                productOptions,
                productOptions2,
                productDropdown,
                products,
                names,
                fields,
                errors,
                success,
                loaded,
                descriptions,

            }
        },


        methods: {
            submitRequestForm() {
                if (this.loaded) {
                    this.loaded = false;
                    this.success = false;
                    this.errors = {};

                    axios.post('/submit-request-form', this.fields)
                        .then(response => {
                            this.fields = {}; //Clear input fields.
                            this.loaded = true;
                            this.success = true;
                        })
                        .catch(error => {
                            this.loaded = true;
                            if (error.response.status === 422) {
                                    this.errors = error.response.data.errors || {};
                            }
                        });
                }
            },

        },
    };

</script>

<style scoped>
   
    .coloranim {
    background: linear-gradient(-95deg, #b521ff, #da22ff, #1f5efc, rgb(136, 32, 255));
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

