<template>
  <Head title="Inlösenavtal" />
 <homepage-layout>
  
  <div class="relative bg-white py-12 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
     <Icon name="background" class="absolute py-1 pb-96 right-1 mb-24" ></Icon>
     <Icon name="background" class="absolute py-40 pb-72 left-1" ></Icon> 
      <div class="relative py-6 px-6 rounded-2xl transition duration-500 hover:shadow-2xl hover:bg-white max-w-xl mx-auto">
       
        <div class="text-center">
          <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            Ansök Direkt!
          </h2>
          <p class="mt-4 text-lg leading-6 text-gray-500">
            Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.
          </p>
        </div>
        <div class="mt-12">
          <form @submit.prevent="submitAgreementForm()" class="grid grid-cols-1 gap-y-2 sm:gap-y-8 gap-x-6 sm:grid-cols-2 sm:gap-x-8">
            
            <div class="sm:col-span-1">
              <label for="first-name" class="block text-sm font-medium text-gray-700">KONTAKTPERSON</label>
              <div class="mt-1">
                <input required id="name" type="text" name="first-name" autocomplete="given-name" v-model="fields.name" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              </div>
            </div>
            
            <div>
              <label for="company-name" class="block text-sm font-medium text-gray-700">FÖRETAGSNAMN</label>
              <div class="mt-1">
                <input required id="company-name" type="text" name="company-name" autocomplete="company-name" v-model="fields.company" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              </div>
            </div>
            
            <div class="sm:col-span-1">
              <label for="company" class="block text-sm font-medium text-gray-700">ORGANISATIONSNUMMER</label>
              <div class="mt-1">
                <input required id="organization" type="number" name="organization-number" autocomplete="organization" v-model="fields.organization" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              </div>
            </div>
            
            <div class="sm:col-span-1">
              <label for="branch" class="block text-sm font-medium text-gray-700">TYP AV BRANSCH</label>
                <input required id="branch" name="branch" type="text" autocomplete="branch" v-model="fields.branch" class="py-1 px-4 mt-1 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
            </div>
            
            <div class="sm:col-span-">
              <label for="phone-number" class="block text-sm font-medium text-gray-700">TELEFON</label>
              <div class="mt-1 relative rounded-md shadow-sm">
                <input required id="phone" type="tel" name="phone-number" autocomplete="tel" v-model="fields.phone" class="py-1 px-4 block w-full focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder-opacity-30="+46 555 987-6543">
              </div>
            </div>
            
            <div class="sm:col-span-1">
              <label for="email" class="block text-sm font-medium text-gray-700">EMAIL</label>
              <div class="mt-1">
                <input required id="email" name="email" type="email" autocomplete="email" v-model="fields.email" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              </div>        
            </div>

            <div class="sm:col-span-">
              <label for="email" class="block text-sm font-medium text-gray-700">ADRESS</label>
              <div class="mt-1">
                <input required id="adress" name="adress" type="text" autocomplete="adress" v-model="fields.adress" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              </div>        
            </div>

            <div class="sm:col-span-1">
              <label for="email" class="block text-sm font-medium text-gray-700">PERSONNUMMER</label>
              <div class="mt-1">
                <input required id="social-security-number" name="social-security-number" type="text" autocomplete="social-security-number" v-model="fields.socialSecurityNumber" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              </div>        
            </div>

            <div class="sm:col-span-1">
              <label for="email" class="block text-sm font-medium text-gray-700">KONTONUMMER</label>
              <div class="mt-1">
                <input required id="account-number" name="account-number" type="text" autocomplete="account-number" v-model="fields.accountNumber" class="py-1 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
              </div>        
            </div>

            <div class="py-5 px-4 sm:col-span-1">
              <button type="submit" class="text-base font-semibold w-full inline-flex items-center justify-center px-12 py-2 xl:px-7 border border-transparent rounded-xl shadow-md text-white bg-indigo-400 transition duration-500 ease-in-out hover:bg-indigo-500">
                SKICKA
              </button>
              <div v-if="success" class="text-green-500 mt-3">
                Skickat!
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="sm:relative bg-white">
      <!-- <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48"></div> -->
      <div class="sm:relative">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense">
          <div class="px-4 text-center max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
            <div>
              <div class="mt-6">
                <h2 class="text-left text-3xl font-extrabold tracking-tight text-gray-900">
                 Ett inlösenavtal som täcker alla behov
                </h2>
                <p class=" text-left mt-4 text-md text-gray-500">
                Med vårt inlösenavtal kan du ta emot betalningar i butik och online från världens största kortutgivare oavsett vilken bank du har. VI JOBBAR MED ALLA BANKER!

                Med vårt inlösenavtal kan du hantera betalningar i över 100 olika valutor, samtidigt som du alltid får betalt i din egen valuta. Smart Cash erbjuder de snabbaste utbetalningarna på marknaden. I regel sätts pengarna in redan nästa dag.

                Vårt inlösenavtal erbjuder säkerhet i världsklass, tillsammans med våra samarbetspartners erbjuder vi ett riskteam som hela tiden arbetar med att övervaka dina transaktioner så vi tidigt kan upptäcka bedrägerier.
                </p>
              </div>
            </div>
          </div>
          <div class="mt-12 sm:mt-16 lg:mt-0">
            <div class="sm:pl-6 md:mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
              <img class="mx-auto md:ml-11 mt-12 sm:mt-28 transform scale-75" src="visa1.svg" alt="Visa">
            </div>
          </div>
        </div>
      </div>
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense">
          <div class="px-4 text-center max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
            <div>
              <div class="mt-12">
                <h2 class="text-left text-3xl font-extrabold tracking-tight text-gray-900">
                    Så här fungerar det!
                </h2>
                <p class="text-left mt-4 list-decimal text-md text-gray-500">
                    Vi börjar med att samla in uppgifter om dig och ditt företag.
                    Vår kompetenta avdelning för inlösenavtal lägger upp en ansökan efter att vi mottagit alla era uppgifter.
                </p>   
                <p class="text-left mt-4 list-decimal text-md text-gray-500">   
                    Ansökan granskas och behöver godkännas av våra samarbetspartners samt er bank
                    Ni som kund blir tilldelad ett redovisningsnummer som vi sedan kopplar samman med er kortterminal.
                    Nu är ni igång!
                </p>
              </div>
            </div>
          </div>
          <div class="mt-7 sm:mt-16 lg:mt-0">
            <div class="sm:pl-6 md:mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
              <img class="mx-auto md:ml-11 -mt-9 transform scale-50" src="mastercard1.svg" alt="Visa">
            </div>
          </div>
        </div>
      </div>

      <div class="bg-white pt-16 lg:py-24">
        <div class="pb-16 bg-gradient-to-r from-pink-300 via-purple-400 to-indigo-400 lg:pb-0 lg:z-10 lg:relative">
          <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
            <div class="relative lg:-my-8">
              <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 lg:hidden"></div>
              <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                  <img class="object-cover lg:h-full lg:w-full" src="https://images.unsplash.com/photo-1565728744382-61accd4aa148?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjB8fG1lZXRpbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
                </div>
              </div>
            </div>
            <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
              <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                <blockquote>
                  <div>
                    <svg class="h-12 w-12 text-white opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                      <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                    </svg>
 
                    <p class="mt-6 text-2xl font-medium text-white">
                      Skicka ett meddelande till oss idag! Kontakt informationen finns nedan. Vi hjälper dig gärna med dina frågor. Vi kommer att svara så snart som möjligt.
                    </p>
                  </div>
                  <footer class="mt-6 flex justify-between">
                    <p class="text-base font-medium text-white">Georg Massi</p>
                    <!-- <p class="text-base font-medium text-indigo-100">Smart Cash</p> -->
 
                    <Link class="font-semibold text-gray-200 bg-gradient-to-tr from-purple-500 to-indigo-500 hover:from-purple-600 px-2 py-2 rounded-lg" href="kontakt">Kontakt -></Link>

                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--       <div class="mt-24">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-36">
          <div class="px-4 text-center max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
            <div>
              <div class="mt-6">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                    Så här fungerar det!
                </h2>
                <p class="mt-4 list-decimal text-md text-gray-500">
                    Vi börjar med att samla in uppgifter om dig och ditt företag.
                    Vår kompetenta avdelning för inlösenavtal lägger upp en ansökan efter att vi mottagit alla era uppgifter.
                </p>   
                <p class="mt-4 list-decimal text-md text-gray-500">   
                    Ansökan granskas och behöver godkännas av våra samarbetspartners samt er bank
                    Ni som kund blir tilldelad ett redovisningsnummer som vi sedan kopplar samman med er kortterminal.
                    Nu är ni igång!
                </p>
              </div>
            </div>
          </div>
          <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
            <div class="sm:pl-0 md:-mr-auto lg:px-0 lg:m-0 lg:relative lg:h-full">
              <img class="mx-auto ml-18 md:ml-7 mt-16 transform scale-75" src="mastercard1.svg" alt="Mastercard">
            </div>
          </div>
        </div>
      </div>
    </div> -->
 
</homepage-layout>
</template>

<script>
import HomepageLayout from './HomepageLayout.vue'
import {Head} from '@inertiajs/inertia-vue3'
import Icon from '@/Components/Icon.vue'
import { Link } from '@inertiajs/inertia-vue3';

export default {
  components :{
    HomepageLayout,
    Head,
    Icon,
    Link,
  },

    data() {
    return {
      fields: {},
      errors: {},
      success: false,
      loaded: true,
    };
  },

    methods: {
        submitAgreementForm() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};

                axios.post('/submit-agreement-form', this.fields)
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


}
</script>