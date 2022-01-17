<template>
    <Head title="Produkter - PC-kassa" />
    <product-layout :cart="cart">
        
            <div class="relative overflow-hidden">
                <!-- Decorative background image and gradient -->
                <div aria-hidden="true" class="absolute inset-0">
                    <div class="absolute inset-0 max-w-7xl mx-auto overflow-hidden xl:px-8">
                    <img src="/bg-2.svg" alt="" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="absolute inset-0 bg-white bg-opacity-75"></div>
                    <div class="absolute inset-0 bg-gradient-to-t  via-white"></div>
                </div>

                <!-- Callout -->
                <section aria-labelledby="sale-heading" class="relative max-w-7xl mx-auto pt-32 px-4 flex flex-col items-center text-center sm:px-6 lg:px-8">
                    <div class="max-w-2xl mx-auto lg:max-w-none">
                    <h2 id="sale-heading" class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">
                        PC-Kassor
                    </h2>
                    <p class="mt-4 max-w-xl mx-auto text-xl text-gray-600">In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra..</p>
                    </div>
                </section>
            </div>  

        <div class="grid grid-cols-2 gap-y-10 sm:grid-cols-4 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 sm:pt-36">
<!--           <Icon name="background2" class="absolute py-28 items-center justify-center hidden sm:block"></Icon> -->
            <Link v-for="product in productsPcKassa" :key="product.id" :href="'/produkter/pc-kassa/' + product.slug" class="relative">
                <!--         <div class="rounded-md relative left-0 h-10" /> -->
                <div class="mt-0 w-full relative aspect-w-1 aspect-h-1 rounded-lg transform duration-500 ease-in-out hover:shadow-xl shadow-md overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                    <div v-if="product.tag" class="absolute flex items-center justify-center top-3 right-2 bg-pink-400 rounded-full shadow-md px-4 py-1">
                        <span class="text-white text-xs"
                            >{{ product.tag }}
                        </span>
                    </div>
                    <div class="p-8">
                        <img :src="product.image" alt="Product" class="w-full h-full object-center object-cover transition duration-500 group-hover:opacity-80"/>
                    </div>
                    <hr>
                    <div class="mt-2">
                        <div class="flex p-3 flex-col justify-center py-1">
                            <div class="text-sm text-center break-words font-bold">
                                {{ product.name }}
                            </div>
                            <h3 class="py-2 text-center text-xs sm:text-sm text-gray-700 truncate">
                                {{ product.description.information }}
                            </h3>
                        </div>
                        <div class="flex p-2 lg:items-center justify-between bottom-0">
                            <div class="rounded-lg h-7 w-24 flex items-center justify-center">
                                <p class="text-right text-sm sm:text-md font-bold text-black">
                                    {{ product.price_currency[0].price }}
                                    {{ product.price_currency[0].currency }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </Link>
        </div>


<!--         <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Products</h2>

            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8">
                <div v-for="product in productsPcKassa" :key="product.id" :href="'/produkter/pc-kassa/' + product.slug" class="group relative bg-white border border-gray-200 shadow-md rounded-lg transform duration-500 ease-in-out hover:shadow-xl flex flex-col overflow-hidden">
                    <div class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-96">
                        <img :src="product.image" alt="PC-Kassa" class="w-full h-full object-center object-cover sm:w-full sm:h-full">
                    </div>
                    <div class="flex-1 p-4 space-y-2 flex flex-col">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ product.name }}
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500 truncate">{{ product.description.information }}</p>
                        <div class="flex-1 flex flex-col justify-end"> -->
                            <!-- <p class="text-sm italic text-gray-500">8 colors</p> -->
<!--                             <p class="text-base font-medium text-gray-900">                                    
                                {{ product.price_currency[0].price }}
                                {{ product.price_currency[0].currency }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
 -->

<!--         <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 overflow-hidden sm:py-24 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-8">
                <a v-for="product in productsPcKassa" :key="product.id" :href="'/produkter/pc-kassa/' + product.slug" class="group text-sm">
                    <div class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden bg-gray-100 shadow-md transform duration-500 ease-in-out hover:shadow  group-hover:opacity-75">
                        <img :src="product.image" alt="PC-Kassa" class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="mt-4 font-medium text-gray-900">
                        {{ product.name }}
                    </h3>
                    <p class="text-gray-500 italic truncate">
                        {{ product.description.information }}
                    </p>
                    <p class="mt-2 font-medium text-gray-900">
                        {{ product.price_currency[0].price }}
                        {{ product.price_currency[0].currency }}
                    </p>
                </a>
            </div>
        </div>
        </div> -->
    </product-layout>
</template>

<script>
import ProductLayout from "./ProductLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Icon from '@/Components/Icon.vue'

export default {
    props: ["products-pc-kassa","cart"], 
    components: {
        ProductLayout,
        Head,
        Link,
        Icon,
    },

    methods: {
        addToShoppingCart(product) {
            axios.post("/add-to-shopping-cart", product);
        },
    },
};
</script>
