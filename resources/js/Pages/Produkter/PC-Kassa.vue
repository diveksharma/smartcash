<template>
    <Head title="Produkter - PC-kassa" />
    <product-layout :cart="cart">
        <div class="grid grid-cols-2 gap-y-10 sm:grid-cols-4 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
          <Icon name="background2" class="absolute py-28 items-center justify-center hidden sm:block"></Icon>
            <Link v-for="product in productsPcKassa" :key="product.id" :href="'/produkter/pc-kassa/' + product.slug" class="relative bg-white">
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
