<template>
    <homepage-layout>
<div class="py-9">
  <!-- Background color split screen for large screens -->
  <div class="relative overflow-hidden max-w-md mx-auto shadow-lg rounded-lg bg-white md:max-w-5xl"></div>

  <div class="relative overflow-hidden rounded-lg shadow-xl grid grid-cols-1 gap-x-16 max-w-7xl mx-auto lg:px-8 lg:grid-cols-2 xl:gap-x-48">
   <Icon name="halfwave" class="max-w-2xl absolute -top-32 transform -rotate-45 -left-80 inline-block" ></Icon>
    <h1 class="sr-only">information</h1>

    <section aria-labelledby="summary-heading" class="bg-gray-50 pt-16 pb-10 px-4 sm:px-6 lg:px-0 lg:pb-16 lg:bg-transparent lg:row-start-1 lg:col-start-2">
      <div class="max-w-lg mx-auto lg:max-w-none">
        <h2 id="summary-heading" class="relative text-lg font-medium text-gray-900">Din varukorg</h2>

        <ul role="list" class="overflow-y-auto h-96 text-sm font-medium text-gray-900 divide-y divide-gray-200">
          <li v-for="item in cart" :key="item.id" class="flex items-start py-6 space-x-4">
            <img :src="item.img" alt="Produkt" class="relativeflex-none w-20 h-20 rounded-md object-center object-cover">
            <div class="flex-auto space-y-1">
              <h3>{{ item.name }}</h3>
              <p class="text-gray-500">{{ item.info }}</p>
            </div>
            <p class="flex-none text-base font-medium">{{ item.price }} {{ item.currency }}</p>
          </li>

          <!-- More products... -->
        </ul>

        <div class="flex items-center justify-between border-t border-gray-200 pt-6">
          <dt class="text-normal">Total</dt>
          <dd class="text-normal"> {{ totalAmount }} </dd>
        </div>

        <dl class="hidden text-sm font-medium text-gray-900 space-y-6 border-t border-gray-200 pt-6 lg:block">
          <div class="flex items-center justify-between">
            <dt class="text-gray-600"> </dt>
            <dd> </dd>
          </div>
        </dl>

        <div class="fixed bottom-0 inset-x-0 flex flex-col-reverse text-sm font-medium text-gray-900 lg:hidden">
          <div class="relative z-10 bg-white border-t border-gray-200 px-4 sm:px-6">
            <div class="max-w-lg mx-auto">
              <button type="button" class="w-full flex items-center py-6 font-medium" aria-expanded="false">
                <span class="text-base mr-auto">Total</span>
                <span class="text-base mr-2">1 500:-</span>
                <!-- Heroicon name: solid/chevron-up -->
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>
          </div>

          <div>
            <!--
              Mobile summary overlay, show/hide based on mobile summary state.

              Entering: "transition-opacity ease-linear duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "transition-opacity ease-linear duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="inset-0 bg-black bg-opacity-0" aria-hidden="true"></div>

            <!--
              Mobile summary, show/hide based on mobile summary state.


Entering: "transition ease-in-out duration-300 transform"
                From: "translate-y-full"
           
     To: "translate-y-0"
              Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-y-0"
 
               To: "translate-y-full"
            -->
<!--             <div class="relative bg-white px-4 py-6 sm:px-6">
              <dl class="max-w-lg mx-auto space-y-6">
                <div class="flex items-center justify-between">
                  <dt class="text-gray-600">Smart Enox 1 utan kunddisplay</dt>
                  <dd>1 500:-</dd>
                </div>

                <div class="flex items-center justify-between">
                  <dt class="text-gray-600">Smart Enox 1 utan kunddisplay</dt>
                  <dd>1 500:-</dd>
                </div>

                <div class="flex items-center justify-between">
                  <dt class="text-gray-600">Smart Enox 1 utan kunddisplay</dt>
                  <dd>1 500:-</dd>
                </div>
              </dl>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <form class="sm:pt-32 pt-16 pb-36 px-4 sm:px-6 lg:pb-16 lg:px-0 lg:row-start-1 lg:col-start-1">
      <div class="max-w-lg mx-auto lg:max-w-none">
        <section aria-labelledby="contact-info-heading">
          <h2 id="contact-info-heading" class="relative text-lg font-medium text-gray-900">Information</h2>
           <div class="grid grid-cols-1 gap-y-4">  
            
            <div>
              <label for="first-name" class="relative block text-sm font-medium text-black">Namn/Företag</label>
                <div class="mt-1">
                  <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="relative py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                </div>
            </div>

          <div>
            <label for="email-address" class="relative block text-sm font-medium text-black ">Email address</label>
            <div class="mt-1">
              <input type="email" id="email-address" name="email-address" autocomplete="email" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
          </div>


            <div>
              <label for="number" class="block text-sm font-medium text-black">Telefon</label>
                <div class="mt-1">
                  <input type="number" name="number" id="number" autocomplete="number" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>
           </div> 

        </section>

        <div class="mt-10 pt-6 border-t border-gray-50 sm:flex sm:items-center sm:justify-center">
          <button type="submit" class="w-full bg-gradient-to-tr from-indigo-500 to-pink-500 rounded-md shadow-md py-2 px-4 text-sm font-medium text-white transform duration-500 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:ml-6 sm:order-last sm:w-auto">Skicka förfrågan</button>
        </div>
      </div>
    </form>
  </div>
</div>

  
    </homepage-layout>    
</template>

<script>
import HomepageLayout from './HomepageLayout.vue'
import Label from '@/Components/Label.vue'
import Input from '@/Components/Input.vue'
import Icon from '@/Components/Icon.vue'

  export default {
    components: {
      HomepageLayout, 
      Label, 
      Input,
      Icon, 
    },
    data() {
      return {
        cart: [],
      }
    },
    computed: {
      totalAmount() {
        var prices = this.cart.length ? this.cart.map(price => parseInt(price.price.replace(/\s/g, ''))) : [];
        var total = _.sum(prices);
        return total;
      },
    },
    mounted() {
      this.getCart();
    },
    methods: {
      getCart() {
        axios.get('/get-cart').then((response) => this.cart = response.data);
      }
    }
      
  }
</script>