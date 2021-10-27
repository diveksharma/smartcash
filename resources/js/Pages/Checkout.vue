<template>
    <homepage-layout>
      <div class="h-auto bg-white">
        <div class="py-36">
          <div class="relative overflow-hidden max-w-md mx-auto shadow-lg rounded-lg bg-white md:max-w-5xl">
            <Icon name="halfwave" class="max-w-2xl absolute -top-32 transform -rotate-45 -left-80 inline-block" ></Icon>
            <div class="md:flex">
              <div class="w-full p-4 px-5 py-5">
               <div class="inline-block md:grid md:grid-cols-3 gap-2 ">
                <div class="col-span-2 p-5">
                 <div class="grid grid-cols-2 -gap-x-1">
                  <div class="felex justify-center"> <img class="rounded-md shadow-lg with-full" src="kvittorullar6.png"> 
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
      
  }
</script>