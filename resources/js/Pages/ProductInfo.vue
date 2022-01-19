<template>
    <homepage-layout :cart="cart">    
            <div class="max-w-7xl mx-auto sm:pt-16 sm:px-6 lg:px-8">
           <!--  <Icon name="background4" class="absolute items-center justify-center mx-auto -left-32 p-24 sm:block hidden"></Icon> -->
                <button onclick="history.back()" class="flex justify-start transform duration-500 hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <h2 class="">Tillbaka </h2>
                </button>
           
                <div class="max-w-2xl mx-auto lg:max-w-none">
                <!-- Product Info-->
                <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
                    <!-- Image gallery (maybe) -->
                    <div class="flex flex-col-reverse">
                    <!-- Image selector (maybe) -->
                    <div class="hidden mt-6 w-full max-w-2xl mx-auto sm:block lg:max-w-none">
                        <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">

                        <!-- More images (maybe) -->
                        </div>
                    </div>

                    <div class="w-full aspect-w-1 aspect-h-1">
                        <!-- Product image. -->
                        <div id="tabs-2-panel-1" aria-labelledby="tabs-2-tab-1" role="tabpanel" tabindex="0">
                        <img :src="productInfo.image" alt="Smart Enox 1 utan kunddisplay" class="w-full h-full object-center object-cover">
                        </div>
                    </div>
                    </div>

                    <!-- Product info -->
                    <div class="mt-10 px-4 sm:px-0 sm:mt-16 lg:mt-40">
                    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">{{ productInfo.name }}</h1>

                    <div class="mt-3">
                        <h2 class="sr-only">Produkt information</h2>
                        <p class="text-3xl text-gray-900">{{ productInfo.price_currency[0].price }} {{ productInfo.price_currency[0].currency }}</p>
                    </div>

                    <div class="justify-center items-center">
                        <h3 class="sr-only">info</h3>

                        <div class="text-base text-gray-700 space-y-6">
                        <p>{{ productInfo.description.information }}</p>
                        </div>
                    </div>

                    <div class="mt-6 justify-start">
                        <div class="mt-10">
                            <button @click="addToShoppingCart(productInfo)" type="button"  class="w-full bg-gradient-to-tr from-indigo-500 to-pink-500 rounded-md shadow-md py-2 px-5 text-sm font-medium text-white transform duration-500 hover:scale-110 sm:order-last sm:w-auto">
                                Lägg till produkt
                            </button>
                        </div>
                    </div>
                    </div>
                </div>
            </div> 
        </div> 
    </homepage-layout> 
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
import Icon from '@/Components/Icon.vue'
import HomepageLayout from './HomepageLayout.vue';

    export default {
        props: ['product-info', 'cart'],
        components:{
            Link,
            Icon,
            HomepageLayout,
        },
        data() {
            return {
                hasAddedProduct: false,
            }
        },
    
        methods: {
        addToShoppingCart(product) {
            axios.post('/add-to-shopping-cart', product)
            this.$inertia.reload();

        }
        },
    }

</script>