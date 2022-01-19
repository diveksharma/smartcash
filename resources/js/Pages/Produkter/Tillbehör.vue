<template>
  <Head title="Produkter - Tillbehör" />
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
                        Tillbehör
                    </h2>
                    <p class="mt-4 max-w-xl mx-auto text-xl text-gray-600">In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra..</p>
                    </div>
                </section>
            </div>  
        <div class="grid grid-cols-2 gap-y-10 sm:grid-cols-4 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 sm:pt-36">
            <Link
                v-for="product in productsTillbehor"
                :key="product.id"
                :href="'/produkter/tillbehor/' + product.slug"
                class=""
            >
                <!--         <div class="rounded-md relative left-0 h-10" /> -->
                <div
                    class="
                        mt-0
                        w-full
                        relative
                        aspect-w-1 aspect-h-1
                        rounded-lg
                        transform
                        duration-500
                        ease-in-out
                        hover:shadow-xl
                        shadow-md
                        overflow-hidden
                        xl:aspect-w-7 xl:aspect-h-8
                    "
                >
                    <div
                        v-if="product.tag"
                        class="
                            absolute
                            flex
                            items-center
                            justify-center
                            top-3
                            right-2
                            bg-pink-400
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
                    <div class="p-8">
                        <img
                            :src="product.image"
                            alt="Product"
                            class="
                                w-full
                                h-full
                                object-center object-cover
                                transition
                                duration-500
                                group-hover:opacity-80
                            "
                        />
                    </div>
                    <div class="mt-2">
                        <div class="flex p-8 flex-col justify-center py-1">
                            <div class="text-sm text-center break-words font-bold">
                                {{ product.name }}
                            </div>
                            <h3 class="py-4 text-center text-xs sm:text-sm text-gray-700 truncate">
                                {{ product.description.information }}
                            </h3>
                        </div>
                        <div class="flex p-2 lg:items-center justify-between bottom-0">
<!--                             <div
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
                            </div> -->
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
import ProductLayout from './ProductLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

  export default {
    props: ['products-tillbehor','cart'],
    components: {
      ProductLayout,
      Head,
      Link
    },

    methods: {
      addToShoppingCart(product) {
        axios.post('/add-to-shopping-cart', product)
      }
    },
    
  }

</script>