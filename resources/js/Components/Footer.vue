<template>
<div class="bg-white w-full relative overflow-hidden border-t border-gray-200 py-5 mt-28">
  <div class="absolute top-0 right-0">
    <Icon name="group3" class="h-full transform -rotate-45" />
  </div>
  <div class="max-w-7xl mx-auto relative">
    <div class="max-w-2xl lg:grid lg:grid-cols-2 lg:gap-y-5 px-5 sm:px-0">
      <div v-for="info in footer" :key="info.id" class="text-left">
        <h2 class="text-sm font-extrabold tracking-tight text-gray-900 uppercase">{{ info.title }}</h2>
        <p v-for="(detail, Idx) in info.details" :key="Idx" class="mt-1 font-medium text-sm text-gray-500">
          {{ detail.text }}
        </p>
      </div>
    </div>
  </div>
  <footer class="overflow-hidden relative bg-warm-gray-900" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto sm:mx-0 sm:ml-auto">
      <div class="mt-12 sm:mr-56 text-center border-t border-warm-gray-700 pt-8">
        <p class="text-base font-medium text-black sm:text-white xl:text-center">
          &copy; 2021 Smart Cash Sverige AB
        </p>
      </div>
    </div>
  </footer>
</div>
</template>

<script>
import Icon from '@/Components/Icon.vue'

const footer = [
  {
    id: 1,
    title: 'Information',
    details: [
      {text: 'Boka demo'}
    ]
  },
  {
    id: 2,
    title: 'Support',
    details: [
      {text: 'Kassaregister och kortterminaler: 011- 470 90 00'},
      {text: 'PC-Kassor: 011-18474'},
      {text: 'support@smartcash.se'},
    ]
  },
  {
    id: 3,
    title: 'Kontakt',
    details: [
      {text: 'Smart Cash Sverige AB'},
      {text: 'Kiselgatan 19'},
      {text: '602 23 Norrköping'},
      {text: '011-470 90 00'},
    ]
  }
]
export default {
  components:{
    Icon,
  },
  setup() {
    return {
      footer,
    }
  }
}
</script>