<template>
    <homepage-layout>
<div class="py-9">

  <!-- Background color split screen for large screens -->
  <div class="relative overflow-hidden max-w-md mx-auto shadow-lg rounded-lg bg-white md:max-w-5xl"></div>

  <div class="relative overflow-hidden rounded-lg shadow-xl grid grid-cols-1 gap-x-16 max-w-7xl mx-auto lg:px-20 lg:grid-cols-2 xl:gap-x-48">
   <Icon name="halfwave" class="max-w-2xl absolute -top-32 transform -rotate-45 -left-80 inline-block" ></Icon>
    <h1 class="sr-only">information</h1>

    <section aria-labelledby="summary-heading" class="bg-gray-50 pt-16 pb-10 px-4 sm:px-6 lg:px-0 lg:pb-16 lg:bg-transparent lg:row-start-1 lg:col-start-2">
      <div class="mt-10 sm:mt-0 max-w-lg mx-auto lg:max-w-none">
        <h2 id="summary-heading" class="relative text-lg font-medium text-gray-900">Din varukorg - {{ cart ? cart.length + ' produkter' : 'Inga produkter finns' }} </h2>

        <ul v-if="cart" role="list" class="pr-4 overflow-y-auto h-96 text-sm font-medium text-gray-900 divide-y divide-gray-200 scrollbar-w-2 scrollbar-track-gray-lighter scrollbar-thumb-rounded scrollbar-thumb-gray scrolling-touch">
          <li v-for="item in cart" :key="item.id" class="flex items-start py-6 space-x-4">
            <img :src="item.image" alt="Produkt" class="relativeflex-none w-20 h-20 rounded-md object-center object-cover">
            <div class="flex-auto space-y-1">
              <h3>{{ item.name }}</h3>
              <p class="text-gray-500">{{ item.description.information }}</p>
            </div>
            <p class="flex-none text-base font-medium">{{ item.price_currency[0].price }} {{ item.price_currency[0].currency }}</p>
            <button @click="clearShoppingCart(item)">
              <svg xmlns="http://www.w3.org/2000/svg" class="hover:animate-pulse h-6 w-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </button>
          </li>

          <!-- More products... -->
        </ul>
        <div v-else>
          <div src="emptycart.svg" alt="EmptyCart"></div>
        </div>
        <template v-if="cart">
          <div class="flex items-center justify-between border-t border-gray-200 pt-6">
            <dt class="font-bold text-lg text-gray-900">Total</dt>
            <dd class="font-medium text-md text-gray-700"> {{ totalAmount }} kr</dd>
          </div>

          <dl class="hidden text-sm font-medium text-gray-900 space-y-6 border-t border-gray-200 pt-6 lg:block">
            <div class="flex items-center justify-between">
              <dt class="text-gray-600"> </dt>
              <dd> </dd>
            </div>
          </dl>
        </template>

<!--         <div class="fixed bottom-0 inset-x-0 flex flex-col-reverse text-sm font-medium text-gray-900 lg:hidden">

          <div>
            <div class="inset-0 bg-black bg-opacity-0" aria-hidden="true"></div>
          </div>
        </div> -->
      </div>
    </section>

    <form @submit.prevent="submitRequestForm" class="sm:pt-32 pt-16 pb-36 px-4 sm:px-6 lg:pb-16 lg:px-0 lg:row-start-1 lg:col-start-1">
      <div class="max-w-lg mx-auto lg:max-w-none">
        <section aria-labelledby="contact-info-heading">
          <h2 id="contact-info-heading" class="relative text-lg font-medium text-gray-900">Information</h2>
           <div class="grid grid-cols-1 gap-y-4">  
            
            <div>
              <label for="first-name" class="relative block text-sm font-medium text-black">Namn/Företag</label>
                <div class="mt-1">
                  <input type="text" name="first-name" id="first-name" autocomplete="given-name" v-model="fields.name" class="relative py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" required>
                </div>
            </div>

          <div>
            <label for="email-address" class="relative block text-sm font-medium text-black ">Email</label>
            <div class="mt-1">
              <input type="email" id="email" name="email" autocomplete="email" v-model="fields.email" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
          </div>


            <div>
              <label for="number" class="block text-sm font-medium text-black">Telefon</label>
                <div class="mt-1">
                  <input type="text" name="number" id="number" autocomplete="tel" v-model="fields.phone" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>
           </div> 

        </section>

        <div class="mt-10 pt-6 border-t border-gray-50 sm:flex sm:items-center sm:justify-center">
          <button type="submit" class="w-full bg-gradient-to-tr from-indigo-500 to-pink-500 rounded-md shadow-md py-2 px-4 text-sm font-medium text-white transform duration-500 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:ml-6 sm:w-auto">Skicka förfrågan</button>
          <div v-if="success" class="text-green-500 ml-3">
            Skickat!
          </div>
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

    props: ['cart'],

    data() {
      return {
        //cart: [],
        fields: {
          cartItems: this.cart,
          name: '',
          email: '',
          phone: '',
        },
        errors: {},
        success: false,
        loaded: true,
      };
    },

    computed: {
      totalAmount() {
        if(this.cart != null) {
          var prices = this.cart.length ? this.cart.map(price_currency => parseInt(price_currency.price_currency[0].price.replace(/\s/g, ''))) : [];
          var total = _.sum(prices);
          return total;
        } else {
          return 0;
        }
      },
    },

    mounted() {
      //this.getCart();
    },
      
    methods: {
          //getCart() {
          //  axios.get('/get-cart').then((response) => this.cart = response.data);
          //},

          submitRequestForm() {
              if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};

                axios.post('/submit-request-form', this.fields)
                    .then(response => {
                        //this.fields = {}; //Clear input fields.
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
          
          clearShoppingCart(product) {
              axios.post("/remove-item-cart", product);
              this.$inertia.reload();
          },
      },





  }
</script>