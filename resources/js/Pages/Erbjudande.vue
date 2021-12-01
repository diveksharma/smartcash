<template>
        <product-layout :cart="cart">
    <div class="bg-white">
            <div class="max-w-7xl mx-auto grid grid-cols-2 gap-y-10 sm:grid-cols-4 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 bg-white">
            <Icon name="background4" class="absolute items-center justify-center mx-auto -left-32 p-24 sm:block hidden"></Icon>
                <Link
                    v-for="product in productsPackage"
                    :key="product.id"
                    :href="'/erbjudande/' + product.slug"
                    class="relative bg-white"
                >
                    <div class="rounded-md relative" />
                    <div class="mt-0 w-full relative aspect-w-1 aspect-h-1 rounded-lg transform duration-500 ease-in-out hover:shadow-xl shadow-md overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                        <div
                            v-if="product.recommendation"
                            class="
                                absolute
                                flex
                                items-center
                                justify-end
                                -top-12
                                -left-12
                                smartcash-bg-color-banner
                                rounded-full
                                shadow-md
                                h-32
                                w-32
                            "
                        >
                            <span class="text-white mt-8 mr-3 text-xs font-medium"
                                >{{ product.recommendation }}
                            </span>
                        </div>
                        <div
                            v-if="product.tag"
                            class="
                                absolute
                                flex
                                items-center
                                justify-center
                                top-3
                                right-2
                                smartcash-bg-color-banner
                                rounded-full
                                shadow-md
                                px-4
                                py-1
                            "
                        >
                            <span class="text-white text-xs"
                                >{{ product.tag }}
                            </span>
                        </div>
                        <div class="mt-6">
                            <img
                                :src="product.image"
                                alt="Product"
                                class="w-full h-full object-center object-cover transition duration-500 group-hover:opacity-80"/>
                        </div>
                        <div class="rounded-md shadow-lg px-2 py-2 space-y-0">
                            <div class="flex justify-center py-1">
                                <div
                                    class="
                                        text-sm text-center
                                        break-words
                                        font-bold
                                    "
                                >
                                    {{ product.name }}
                                </div>
                            </div>
                            <h3
                                class="
                                    text-center text-xs
                                    sm:text-sm
                                    py-4
                                    text-gray-700
                                "
                            >
                                {{ product.name }}
                            </h3>
                            <div
                                class="
                                    flex
                                    items-center
                                    justify-between
                                    -gap-x-7
                                    bottom-0
                                    mb-6
                                "
                            >
                        <!--    <div
                                @click="addToShoppingCart(product)"
                                class="rounded-full shadow-md h-8 w-8 flex items-center justify-center transform duration-500 ease-in-out hover:scale-110 hover:shadow-lg"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"
                                    />
                                </svg>
                            </div>-->
                                <div class="h-11 w-28 flex items-center justify-center">
                                    <p
                                        class="
                                            text-right text-lg
                                            sm:text-md
                                            font-medium
                                            smartcash-text-color-pink
                                        "
                                    >
                                        {{ product.price_currency[0].price }}
                                        {{ product.price_currency[0].currency }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </Link>
            </div>
    </div>    
    </product-layout>
</template>

<script>
import ProductLayout from "@/Pages/Produkter/ProductLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Icon from '@/Components/Icon.vue'

export default {
    props: ['products-package', 'cart'],
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
