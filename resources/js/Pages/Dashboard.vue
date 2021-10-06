<template>

<main>        

                <div class="wave wave1"></div>
                <div class="wave wave2"></div>
                <div class="wave wave3"></div>
                <div class="wave wave4"></div>
        <div class="mx-auto max-w-7xl lg:px-26">
          <div class="">
            <div class="">
              <div class="mt-44">
               <div class="text-center">
                    <h1>   
                      <span class="bg-clip-text lg:text-9xl text-7xl text-transparent font-bold subpixel-antialiased bg-white">Smart Cash</span>   
                    </h1>
               </div>
                <!-- <p class="text-left mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                  Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui Lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat.
                </p> -->
                <div class="mt-10 sm:mt-12">
                </div>
              </div>
            </div>
           <!--  <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
              <div class="mx-auto max-w-sm px-4 sm:max-w-xl sm:px-6 lg:max-w-none lg:px-0">
                <img class="w-full mb-48 ml-12 pb-9 lg:ml-16 lg:absolute lg:inset-y-0 lg:left-36 lg:h-full lg:w-auto lg:max-w-none transform lg:scale-150 scale-125 hidden" src="devices1.png" alt="Brinto Checkout Image">
              </div>
            </div> -->
          </div>
        </div>
</main>

<div class="relative bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
      <div class="flex justify-start lg:w-0 lg:flex-1">
        <a href="#">
          <span class="sr-only">Workflow</span>
          <img class="h-8 w-auto sm:h-10" src="SC-Logo.png" alt="">
        </a>
      </div>
      <div class="-mr-2 -my-2 md:hidden">
        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 " aria-expanded="false">
          <span class="sr-only">Open menu</span>
        </button>
      </div>
      <nav class="hidden md:flex space-x-10">
        <div class="relative">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <button type="button" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900" aria-expanded="false">
            <span>Solutions</span>
          </button>
        </div>

        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
          Pricing
        </a>
        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
          Docs
        </a>

        <div class="relative">
          <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
          <button type="button" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-expanded="false">
            <span>More</span>
            <!--
              Heroicon name: solid/chevron-down

              Item active: "text-gray-600", Item inactive: "text-gray-400"
            -->
            <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>

          <!--
            'More' flyout menu, show/hide based on flyout menu state.

            Entering: "transition ease-out duration-200"
              From: "opacity-0 translate-y-1"
              To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
              From: "opacity-100 translate-y-0"
              To: "opacity-0 translate-y-1"
          -->
          <div class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
  <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
      <div class="pt-5 pb-6 px-5">
        <div class="flex items-center justify-between">
          <div>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
          </div>
          <div class="-mr-2">
            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="mt-6">
          <nav class="grid gap-y-8">
            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">
                Analytics
              </span>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
              <!-- Heroicon name: outline/cursor-click -->
              <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">
                Engagement
              </span>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
              <!-- Heroicon name: outline/shield-check -->
              <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">
                Security
              </span>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
              <!-- Heroicon name: outline/view-grid -->
              <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">
                Integrations
              </span>
            </a>

            <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">
              <!-- Heroicon name: outline/refresh -->
              <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">
                Automations
              </span>
            </a>
          </nav>
        </div>
      </div>
      <div class="py-6 px-5 space-y-6">
        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Pricing
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Docs
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Help Center
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Guides
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Events
          </a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
            Security
          </a>
        </div>
        <div>
          <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
            Sign up
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
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
*
    {
        margin:0;
        padding:0;
    }

    section
    {
        position: relative;
        width: 100%¤;
        height: 100vh;
        background: linear-gradient(-45deg, #5c21ff, #fc1f74, #a311f8, #ff64b9);
        overflow: hidden;
    }

    section
    {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: url(/wave.png);
        background-size: 100px 1000px;
    }

    section .wave.wave1
    {
        animation: animate 30s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;
    }

    section .wave.wave2
    {
        animation: animate2 15s linear infinite;
        z-index: 999;
        opacity: 0.5;
        animation-delay: -5s;
        bottom: 10px;
    }

    section .wave.wave3
    {
        animation: animate2 15s linear infinite;
        z-index: 998;
        opacity: 0.2;
        animation-delay: -2s;
        bottom: 15px;
    }

    section .wave.wave4
    {
        animation: animate2 15s linear infinite;
        z-index: 997;
        opacity: 0.7;
        animation-delay: -2s;
        bottom: 20px;
    }

    @keyframes animate
    {
        0% {
            background-position-x: 0%;
        }
        100% {
            background-position-x: 1000%;
        }

    }

        @keyframes animate2
    {
        0% {
            background-position-x: 0%;
        }
        100% {
            background-position-x: -1000%;
        }

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


<script>

</script>
