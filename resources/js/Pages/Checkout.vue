<template>
    <homepage-layout>

<!--       <div class="max-w-7xl mx-auto">
        <div class="flex flex-col-reverse sm:flex-row">
          <div class="h-auto bg-white">
            <div class="sm:py-36">
              <div class="relative overflow-hidden max-w-md mx-auto shadow-lg rounded-lg bg-white md:max-w-5xl">
                <Icon name="halfwave" class="max-w-2xl absolute -top-32 transform -rotate-45 -left-80 inline-block" ></Icon>
                <div class="md:flex">
                  <div class="w-full p-4 px-5 py-5">
                  <div class="inline-block md:grid md:grid-cols-1 gap-2 ">
                    <div class="col-span-2 p-5">
                    </div>
                    <div class="p-5 bg-white overflow-vissible"> <span class="relative text-xl font-medium text-black block pb-3">Förfrågan</span>
                      <div class="overflow-vissble flex justify-between items-center mt-2"></div>
                    <div class="grid grid-cols-2 gap-x-2">  
                      <div>
                        <label for="first-name" class="block text-sm font-medium text-black">Namn</label>
                        <div class="mt-1">
                          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                        </div>
                      </div>
                      
                      <div>
                        <label for="Surname" class="block text-sm font-medium text-black">Efternamn</label>
                        <div class="mt-1">
                          <input type="text" name="Surname" id="Surname" autocomplete="Surname" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                        </div>
                      </div>
                    </div>  
                      <div>
                        <label for="Address" class="block text-sm font-medium text-black">Address</label>
                        <div class="mt-1">
                          <input type="number" name="Address" id="Address" autocomplete="Address" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                        </div>
                      </div>
                    
                    <div class="grid grid-cols-2 gap-x-2">  
                      <div>
                        <label class="block text-sm font-medium text-black">Stad</label>
                          <input id="" name="" type="text" autocomplete="" class="py-1 px-4 mt-1 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                      </div>
                      
                      <div>
                        <label for="postalcode" class="block text-sm font-medium text-black">Postnummer</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                          <input type="number" name="Postalcode" id="Postalcode" autocomplete="Postalcode" class="py-1 px-4 block w-full pl-20 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                        </div>
                      </div>
                    </div>  
                  </div>  
                  </div>
                </div> 
                </div>
              </div>  
            </div>      
          </div> -->
          
            <!-- Shopping Cart -->
<!--             <div class="h-auto bg-white">
              <div class="py-12 sm:py-36">
                <div class="relative overflow-hidden max-w-md mx-auto shadow-lg rounded-lg bg-white md:max-w-5xl">
                  <Icon name="halfwave" class="max-w-2xl absolute -bottom-32 transform rotate-45 -right-80 inline-block" />
                  <div class="md:flex">
                    <div class="w-full p-4 px-5 py-5">
                      <ul>
                        <li v-for="item in cart" :key="item.id" class="flex border-b border-gray-300">
                          <div class="flex justify-between">
                            <div class="flex items-center">
                              <img :src="item.img" class="rounded-full bg-white shadow-md h-10" />
                              <h2 class="ml-2 font-bold text-md text-gray-500">{{ item.name }}</h2>
                            </div>
                            <div class="font-medium text-sm text-gray-900">{{ item.price }}</div>
                          </div>
                        </li>
                      </ul> -->


<!-- 
                    <div class="inline-block md:grid md:grid-cols-3 gap-2 ">
                      <div class="col-span-2">
                      <div class="grid grid-cols-2 -gap-x-1">
                        <div class="relative justify-between"> <img class="rounded-md shadow-lg h-24 with-full" src="kvittorullar6.png"> 
                          <div class="flex flex-col ml-3"></div>
                        </div>
                        <span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </span>                
                      </div>
                        <div class="justify-between"> 
                          <div> <span class="text-md mb-6 font-medium text-black">kvitto på köp 18m × 1</span> </div>
                          <div> <span class="text-lg mb-6 font-medium text-gray-500 mr-1">Totalt:</span> <span class="text-lg mb-6 font-bold text-gray-800 ">1 500:-</span> </div>
                        </div>
                        <div class="flex justify-between items-center mt-4 pt-6 border-t"></div>
                      </div>  
                    </div> -->
<!--                   </div> 
                </div>
              </div>  
            </div>      
          </div>
        
      </div>
    </div>
 -->
<!--       <div class="h-auto bg-white">
        <div class="sm:py-36">
          <div class="relative overflow-hidden max-w-md mx-auto shadow-lg rounded-lg bg-white md:max-w-5xl">
            <Icon name="halfwave" class="max-w-2xl absolute -top-32 transform -rotate-45 -left-80 inline-block" ></Icon>
            <div class="md:flex">
              <div class="w-full p-4 px-5 py-5">
               <div class="inline-block md:grid md:grid-cols-3 gap-2 ">
                <div class="col-span-2 p-5">
                 <div class="grid grid-cols-2 -gap-x-1">
                  <div class="relative justify-center"> <img class="rounded-md shadow-lg with-full" src="kvittorullar6.png"> 
                     <div class="flex flex-col ml-3"></div>
                  </div>
                  <span class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>                
                </div> 
                  <div class="flex justify-between items-center mt-4 pt-6 border-t">
                      <div class="flex items-center"> <span class="text-md mb-6 font-medium text-black">kvitto på köp 18m × 1</span> </div>
                      <div class="flex justify-center items-end"> <span class="text-lg mb-6 font-medium text-gray-500 mr-1">Totalt:</span> <span class="text-lg mb-6 font-bold text-gray-800 ">1 500:-</span> </div>
                  </div>
                </div>
                <div class="p-5 bg-white overflow-vissible"> <span class="text-xl font-medium text-black block pb-3">Betalning</span>
                  <div class="overflow-vissble flex justify-between items-center mt-2"></div>
        <div class="grid grid-cols-2 gap-x-2">  
          <div>
            <label for="first-name" class="block text-sm font-medium text-black">Namn</label>
            <div class="mt-1">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
            </div>
          </div>
          
          <div>
            <label for="Surname" class="block text-sm font-medium text-black">Efternamn</label>
            <div class="mt-1">
              <input type="text" name="Surname" id="Surname" autocomplete="Surname" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
            </div>
          </div>
        </div>  
          <div>
            <label for="Address" class="block text-sm font-medium text-black">Address</label>
            <div class="mt-1">
              <input type="number" name="Address" id="Address" autocomplete="Address" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
            </div>
          </div>
        
        <div class="grid grid-cols-2 gap-x-2">  
          <div>
            <label class="block text-sm font-medium text-black">Stad</label>
              <input id="" name="" type="text" autocomplete="" class="py-1 px-4 mt-1 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
          </div>
          
          <div>
            <label for="postalcode" class="block text-sm font-medium text-black">Postnummer</label>
            <div class="mt-1 relative rounded-md shadow-sm">
              <input type="number" name="Postalcode" id="Postalcode" autocomplete="Postalcode" class="py-1 px-4 block w-full pl-20 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
            </div>
          </div>
        </div>  
               </div>  

              </div>
             </div> 
            </div>
          </div>  
        </div>      
      </div> -->



  
<div class="py-9">
  <!-- Background color split screen for large screens -->
  <div class="relative overflow-hidden max-w-md mx-auto shadow-lg rounded-lg bg-white md:max-w-5xl"></div>
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
            <div class="fixed inset-0 bg-black bg-opacity-0" aria-hidden="true"></div>

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