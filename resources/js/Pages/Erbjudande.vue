<template>
    <homepage-layout :cart="cart">>
<!--         <product-layout :cart="cart"> -->
<!--     <div class="bg-white">
            <div class="max-w-7xl mx-auto grid grid-cols-2 gap-y-10 sm:grid-cols-4 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 bg-white"> -->
<!--             <Icon name="background4" class="absolute items-center justify-center mx-auto -left-32 p-24 sm:block hidden"></Icon> -->
<!--                 <Link v-for="product in productsPackage" :key="product.id" :href="'/erbjudande/' + product.slug" class="relative bg-white">
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
                            > -->
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
<!--                                 <div class="h-11 w-28 flex items-center justify-center">
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
                </Link> -->

            <div class="relative overflow-hidden">
                <!-- Decorative background image and gradient -->
                <div aria-hidden="true" class="absolute inset-0">
                    <div class="absolute inset-0 max-w-7xl mx-auto overflow-hidden xl:px-8">
                    <img src="bg-2.svg" alt="" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="absolute inset-0 bg-white bg-opacity-75"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-white"></div>
                </div>

                <!-- Callout -->
                <section aria-labelledby="sale-heading" class="relative max-w-7xl mx-auto pt-32 px-4 flex flex-col items-center text-center sm:px-6 lg:px-8">
                    <div class="max-w-2xl mx-auto lg:max-w-none">
                    <h2 id="sale-heading" class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">
                        VI ERBJUDER
                    </h2>
                    <p class="mt-4 max-w-xl mx-auto text-xl text-gray-600">In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra..</p>
                    </div>
                </section>
            </div>  

                <div class="">
                <div class="max-w-2xl mx-auto py-16 px-4 sm:py-12 sm:px-6 lg:max-w-7xl lg:px-8">
                    <h2 class="sr-only">Products</h2>

                    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                        <a v-for="product in productsPackage" :key="product.id" :href="'/erbjudande/' + product.slug" class="group">
                            <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 shadow rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                            <img :src="product.image" alt="Pack" class="w-full h-full object-center object-cover group-hover:opacity-75">
                            </div>
                            <h3 class="mt-4 text-sm text-gray-700">
                            {{ product.name }}
                            </h3>
                            <p class="mt-1 text-lg font-medium text-gray-900">
                                {{ product.price_currency[0].price }}
                                {{ product.price_currency[0].currency }}
                            </p>
                        </a>
                    </div>
                </div>
                </div>


<!-- Alternating Feature Sections -->
    <div class="relative pt-16 pb-32 overflow-hidden">
      <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48"></div>
      <div class="relative bg-gray-100">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
          <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
            <div>
              <div>
              </div>
              <div class="mt-6">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                    Paket 1
                </h2>
                    <p class="mt-4 text-lg text-gray-500 list-disc">
                        <li>Kassaregister Sam4s ER-260</li>
                        <li>Kontrollenhet</li>
                        <li>Kassalåda</li>
                    </p>
                <h3 class="text-2xl font-bold tracking-tight text-gray-900">
                    249:-
                </h3>
                <div class="mt-6">
                  <a href="#" class="inline-flex bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white hover:from-purple-700 hover:to-indigo-700">
                    Lägg till   
                  </a>
                </div>
              </div>
            </div>
            <div class="mt-8 border-t border-gray-200 pt-6">
              <blockquote>
                <div>

                </div>

              </blockquote>
            </div>
          </div>
          <div class="mt-12 sm:mt-16 lg:mt-0">
            <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
              <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="paket1.png" alt="Paket 1">
            </div>
          </div>
        </div>
      </div>
      <div class="mt-24">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
          <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
            <div>
              <div>
              </div>
              <div class="mt-6">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                  Paket 2
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    <li>Kassaregister Sam4s ER-260</li>
                    <li>Kortterminal Smart c-10</li>
                    <li>Kontrollenhet</li>
                    <li>Kassalåda</li>
                </p>
                <h3 class="text-2xl font-bold tracking-tight text-gray-900">
                    579:-
                </h3>
                <div class="mt-6">
                  <a href="#" class="inline-flex bg-gradient-to-r from-purple-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white hover:from-purple-700 hover:to-indigo-700">
                    Lägg till
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
            <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
              <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="paket2.png" alt="Paket 2">
            </div>
          </div>
        </div>
      </div>
    </div>
<!--     </product-layout> -->
    </homepage-layout>
</template>

<script>
import ProductLayout from "@/Pages/Produkter/ProductLayout.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Icon from '@/Components/Icon.vue'
import HomepageLayout from './HomepageLayout.vue';




export default {
    props: ['products-package', 'cart'],
    components: {
        ProductLayout,
        Head,
        Link,
        Icon,
        HomepageLayout,
    },


    methods: {
        addToShoppingCart(product) {
            axios.post("/add-to-shopping-cart", product);
        },
    },
};
</script>
