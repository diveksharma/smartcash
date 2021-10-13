<template>
 <Head title="Refrences"/>
<homepage-layout>

<div class="bg-white">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    <p class="text-center text-4xl lg:text-4xl font-extra bold uppercase text-gray-900 tracking-wider">
      REFERENSER
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

</homepage-layout>
</template>

<script>
import HomepageLayout from './HomepageLayout.vue'
import Head from '@inertiajs/inertia-vue3'

export default {
  components: { 
      HomepageLayout,
      Head, 
  
  },
        
}
</script>