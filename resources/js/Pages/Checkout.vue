<template>
    <homepage-layout>
      <div class="h-screen bg-white">
        <div class="py-12">
          <div class="max-w-md mx-auto shadow-lg rounded-lg bg-gray-200 md:max-w-5xl">
            <div class="md:flex">
              <div class="w-full p-4 px-5 py-5">
               <div class="md:grid md:grid-cols-3 gap-2 ">
                <div class="col-span-2 p-5">
                  <h1 class="text-xl font-medium">Produkt</h1>
                  <div class="felex justify-center"> <img class="rounded-md with-full" src="kvittorullar6.png"> 
                     <div class="flex flex-col ml-3"></div>
                  </div>                 
                  <div class="flex justify-between items-center mt-4 pt-6 border-t">
                      <div class="flex items-center"> <span class="text-md mb-6 font-medium text-black">kvitto på köp 18m × 1</span> </div>
                      <div class="flex justify-center items-end"> <span class="text-lg mb-6 font-medium text-gray-500 mr-1">Totalt:</span> <span class="text-lg mb-6 font-bold text-gray-800 ">1 500:-</span> </div>
                  </div>
                </div>
                <div class="p-5 bg-gray-800 rounded shadow-md overflow-vissible"> <span class="text-xl  font-medium text-gray-100 block pb-3">Betalning</span>
                  <div class="overflow-vissble flex justify-between items-center mt-2"></div>
                  <div class="flex justify-center flex-col pt-3"> <label class="text-xs text-gray-400">Namn På Kortet</label> <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border border-gray-600 py-4" placeholder="Förnamn Efternamn"></div>
                  <div class="flex justify-center flex-col pt-3"> <label class="text-xs text-gray-400 ">Kortnummer</label> <input type="text" class="focus:outline-none w-full h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="**** **** **** ****"> </div>
                  <div class="grid grid-cols-3 gap-2 pt-2 mb-3"></div>
                    <div class="col-span-2 "> <label class="text-xs text-gray-400">Kortets utgångsdatum</label>
                       <div class="gid grid-cols-2 gap-2"> <input type="date" class="focus:outline-none w-1/2 h-6 bg-gray-800 text-white placeholder-gray-300 text-sm border-b border-gray-600 py-4" placeholder="yy/mm"> </div>
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

  export default {
    components: {
      HomepageLayout, 
      Label, 
      Input, 
    },
      
  }
</script>