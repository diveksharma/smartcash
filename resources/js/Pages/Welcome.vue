<template>
    <Head title="Välkommen" />      
<div>

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
                    </div>
                <!-- Main menu Desktop -->
                <div class="flex-1 hidden sm:block">
                    <div class="flex justify-center space-x-8">
                        <button 
                          @click="productDropdown = !productDropdown" 
                            class="text-white font-semibold transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm uppercase"
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
                        <Link v-for="nav in navigation" :key="nav.id" :href="route(nav.href)" class="text-white font-semibold transition duration-500 ease-in-out hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-sm">
                            {{ nav.name }}
                        </Link>
                    </div>
                    
                </div>
            </div>
        </div>

      
        <!-- Hero Section -->
        <div class="relative">
            <div class="absolute inset-x-0 bottom-0 h-1/2"></div>
            <div class="mx-auto">
                <div class="relative sm:overflow-hidden">
                    <div class="relative max-w-7xl mx-auto px-4 sm:py-16 -py-24 sm:px-6 lg:py-32 lg:px-auto">
                         <h1 class="lg:text-7xl text-5xl pt-16 sm:pt-0 sm:text-left font-bold text-white">
                            <span class="block leading-tight">Smarta Betallösningar</span>
                            <span class="block leading-tight ml-1 lg:text-4xl text-3xl font-semibold">Semper curabitur</span>  <span class="block leading-tight ml-1 lg:text-4xl text-3xl font-semibold">viverra</span>
                        </h1>
                    </div>
                </div>
            </div>

        </div>    
        <!-- Wave -->
        <img class="absolute -bottom-1 transform rotate-180" src="waves.svg" alt="wave">
        
  </nav>

  <div class="mt-12 sm:mt-16 lg:mt-0 w-full">
    <div class="sm:pl-0 md:-mr-auto lg:px-0 lg:m-0 lg:relative lg:h-full">
      <img class="transform rotate-180 mt-60" src="waves.svg" alt="wave">
    </div>
  </div>

  <!-- content 1 -->
  <div class="relative bg-white">
    <div class="relative -mt-96 z-10">
      <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
        <div class="px-4 sm:mt-24 mt-40 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
          <div>
            <div>
              <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-t from-indigo-600 to-pink-600">
                <!-- Heroicon name: outline/inbox -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                Kom igång samma dag!
              </h2>
              <p class="mt-4 text-lg text-gray-500">
                Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.
              </p>

            </div>
          </div>
          <div class="mt-8 border-t border-gray-200 pt-6">
          </div>
        </div>
        <div class="mt-12 sm:mt-16 lg:mt-24">
          <div class="pl-14 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
            <img class="sm:w-full md:w-1/2 w-1/2 rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-16 left-96 lg:h-96 lg:w-auto lg:max-w-none" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" alt="Inbox user interface">
          </div>
        </div>
      </div>
    </div>
    <div class="mt-24 mb-28">
      <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
        <div class="px-4 mt-20 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
          <div>
            <div>
              <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-t from-pink-600 to-indigo-600">
                <!-- Heroicon name: outline/sparkles -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                Kom igång samma dag!

              </h2>
              <p class="mt-4 text-lg text-gray-500">
                  Hör av er till oss så hjälper vi till med att räkna fram de absolut bästa priserna för just er verksamhet!
              </p>
            </div>
          </div>
        </div>
        <div class="mt-12 sm:mt-16 lg:mt-24 lg:col-start-1">
          <div class="pl-48 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-96">
            <img class="sm:w-full md:w-1/2 w-1/2 mx-auto rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:-right-8 lg:h-96 lg:w-auto lg:max-w-none" src="sc-logo-bg.png" alt="Customer profile user interface">
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="bg-white">
  <div class="max-w-7xl mb-24 mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    <p class="text-center text-4xl lg:text-4xl font-extrabold uppercase text-gray-900 tracking-wider">
      Några av våra kunder!  
    </p>
    <div class="mt-6 grid grid-cols-2 gap-5 md:grid-cols-4 lg:mt-8">
      <div class="col-span-1 flex justify-center py-8 px-8 bg-white">
        <img class="max-h-24" src="Picture1.jpg" alt="Panefresco">
      </div>
      <div class="col-span-1 flex justify-center py-8 px-8 bg-white">
        <img class="max-h-24" src="Picture2.svg" alt="BurgerKing">
      </div>
      <div class="col-span-1 flex justify-center py-8 px-8 bg-white">
        <img class="max-h-24" src="Picture3.jpg" alt="Taco Bar">
      </div>
      <div class="col-span-1 flex justify-center py-8 px-8 bg-white">
        <img class="max-h-24" src="Picture4.png" alt="Tshirt Store">
      </div>
      <div class="col-span-1 flex justify-center py-8 px-8 bg-white">
        <img class="max-h-24" src="Picture5.png" alt="Stadsvakten">
      </div>
      <div class="col-span-1 flex justify-center py-8 px-8 bg-white">
        <img class="max-h-24" src="Picture6.jpg" alt="Nordicclub">
      </div>
      <div class="col-span-1 flex justify-center py-8 px-8 bg-white">
        <img class="max-h-24" src="Picture7.jpg" alt="Brooklyn Bar">
      </div>
      <div class="col-span-1 flex justify-center py-8 px-8 bg-white">
        <img class="max-h-24" src="Picture8.jpg" alt="Urbane Goat">
      </div>
    </div>
  </div>
</div>

  <!-- Content 2 -->
<div class="bg-white pt-14">
  <!-- Header -->
  <div class="relative pb-32 bg-gray-800">
    <div class="absolute inset-0">
      <img class="w-full h-full object-cover" src="support2.svg" alt="">
      <div class="absolute inset-0 bg-gradient-to-tr from-pink-600 via-purple-500 to-indigo-600 mix-blend-multiply" aria-hidden="true"></div>
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
      <h1 class="text-4xl font-extrabold tracking-tight text-white md:text-5xl lg:text-6xl">Support</h1>
      <p class="mt-6 max-w-3xl text-xl text-gray-300">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames. Dui, amet, nec sit pulvinar.</p>
    </div>
  </div>

  <!-- Overlapping cards -->
  <section class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
    <h2 class="sr-only" id="contact-heading">Contact us</h2>
    <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
      <div class="flex flex-col bg-white rounded-2xl shadow-lg transition duration-500 hover:shadow-2xl">
        <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
          <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
            <!-- Heroicon name: outline/phone -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-gray-900">Sales</h3>
          <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
        </div>
        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
          <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
        </div>
      </div>

      <div class="flex flex-col bg-white rounded-2xl shadow-lg transition duration-500 hover:shadow-2xl">
        <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
          <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
            <!-- Heroicon name: outline/support -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-gray-900">Technical Support</h3>
          <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
        </div>
        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
          <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
        </div>
      </div>

      <div class="flex flex-col bg-white rounded-2xl shadow-lg transition duration-500 hover:shadow-2xl">
        <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
          <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
            <!-- Heroicon name: outline/newspaper -->
            <svg class="h-6 w-6 text-white"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-gray-900">Media Inquiries</h3>
          <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
        </div>
        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
          <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
        </div>
      </div>
    </div>
  </section>
</div>

  <!-- Content 3 -->
  <div class="relative bg-white pt-5 pb-32 overflow-hidden">  
    <div class="relative">
      <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
        <div class="px-4 mt-24 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
          <div>
            <div>
              <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-tr from-pink-600 via-purple-500 to-indigo-600">
                <!-- Heroicon name: outline/inbox -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                Smarta Betallösningar!
              </h2>
              <p class="mt-4 text-lg text-gray-500">
                Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.
              </p>
            </div>
          </div>
          <div class="mt-8 border-t border-gray-200 pt-6">
          </div>
        </div>
        <div class="mt-12 sm:mt-16 lg:mt-24">
          <div class="pl-14 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
            <img class="sm:w-full md:w-1/2 w-1/2 rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-16 left-96 lg:h-96 lg:w-auto lg:max-w-none" src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" alt="Inbox user interface">
          </div>
        </div>
      </div>
    </div>
    <div class="mt-24">
      <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
        <div class="px-4 mt-2 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
          <div>
            <div>
              <span class="h-12 w-12 rounded-md flex items-center justify-center bg-gradient-to-tr from-pink-600 via-purple-500 to-indigo-600">
                <!-- Heroicon name: outline/sparkles -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>
              </span>
            </div>
            <div class="mt-6">
              <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                Kom igång samma dag!

              </h2>
              <p class="mt-4 text-lg text-gray-500">
                  Hör av er till oss så hjälper vi till med att räkna fram de absolut bästa priserna för just er verksamhet!
              </p>
            </div>
          </div>
        </div>
        <div class="mt-12 sm:mt-16 lg:mt-24 lg:col-start-1">
          <div class="pl-48 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-96">
            <img class="sm:w-full md:w-1/2 w-1/2 mx-auto rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:-right-8 lg:h-96 lg:w-auto lg:max-w-none" src="sc-logo-bg.png" alt="Customer profile user interface">
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
    
  <Footer />
</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }

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
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from '@vue/reactivity';
import Footer from '@/Components/Footer';
      
      const navigation = [
      {id: 2, name: 'ERBJUDANDE', href:'erbjudande'},
/*       {id: 3, name: 'REFERNSER', href:'refrences'}, */
      {id: 4, name: 'INLÖSENAVTAL', href:'agreement'},
      {id: 5, name: 'OM OSS', href:'aboutus'},
      {id: 6, name: 'KONTAKT', href:'contact'},
    ];

      const products = [
      {id: 2, name: 'ERBJUDANDE', href:'erbjudande'},
/*       {id: 3, name: 'REFERNSER', href:'refrences'}, */
      {id: 4, name: 'INLÖSENAVTAL', href:'agreement'},
      {id: 5, name: 'OM OSS', href:'aboutus'},
      {id: 6, name: 'KONTAKT', href:'contact'},
    ];

        const navigationmobile = [
      {id: 1, name: 'PRODUKTER', href:'products.pc-kassa'},
      {id: 2, name: 'ERBJUDANDE', href:'erbjudande'},
/*       {id: 3, name: 'REFERNSER', href:'refrences'}, */
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
    {id: 7, name: 'Vågar', href:'products.vågar'},
    {id: 8, name: 'Skrivare', href:'products.skrivare'},
    {id: 9, name: 'Kontrollenheter', href:'products.kontrollenheter'},
    {id: 10, name: 'Kvittorullar', href:'products.kvittorullar'},
    {id: 11, name: 'Tillbehör', href:'products.tillbehör'}
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

    const productDropdown = ref((false))
    const dropdownMobile = ref((false))

  export default {
    components: {
      Head,
      Link,
      Footer,
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

      }
    },
    
  }

</script>
