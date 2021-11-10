<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $products = [
            /* PC-kassor */
            [
                'category' => 'PC-kassa',
                'name' => 'Smart Enox 1 utan kunddisplay',
                'price_currency' => [
                    [
                        'price' => '1 500', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/pc1.png',
                'tag' => 'Populär',
                'recommendation' => null,
            ],
            [
                'category' => 'PC-kassa',
                'name' => 'Smart Enox 2, liten kunddisplay',
                'price_currency' => [
                    [
                        'price' => '1 800', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/pc2.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'PC-kassa',
                'name' => 'Smart Enox 3, stor kunddisplay',
                'price_currency' => [
                    [
                        'price' => '1500', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/pc3.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kortterminal',
                'name' => 'ICT250',
                'price_currency' => [
                    [
                        'price' => '1000', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kortterminal1.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kortterminal',
                'name' => 'IWL250',
                'price_currency' => [
                    [
                        'price' => '1000', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kortterminal2.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kortterminal',
                'name' => 'T103p',
                'price_currency' => [
                    [
                        'price' => '1000', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kortterminal3.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kortterminal',
                'name' => 'Verifone V4000m',
                'price_currency' => [
                    [
                        'price' => '1000', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kortterminal4.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kortterminal',
                'name' => 'West Int 8006',
                'price_currency' => [
                    [
                        'price' => '1000', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kortterminal5.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kortterminal',
                'name' => 'West Intt103',
                'price_currency' => [
                    [
                        'price' => '1 000', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kortterminal6.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kortterminal',
                'name' => 'Westpay C-10',
                'price_currency' => [
                    [
                        'price' => '1 000', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kortterminal7.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kortterminal',
                'name' => 'Westpay C-100',
                'price_currency' => [
                    [
                        'price' => '1 000', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kortterminal8.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kassaregister',
                'name' => 'Smart 230',
                'price_currency' => [
                    [
                        'price' => '1 500', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kassaregister1.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kassaregister',
                'name' => 'Smart 260',
                'price_currency' => [
                    [
                        'price' => '1 500', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kassaregister2.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kassaregister',
                'name' => 'Smart 510',
                'price_currency' => [
                    [
                        'price' => '1 500', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kassaregister3.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'EnoxKassa',
                'name' => 'Smart Enox Kassa',
                'price_currency' => [
                    [
                        'price' => '1 500', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/enoxkassa.jpg',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Orderplatta',
                'name' => 'Orderplatta(Handy)',
                'price_currency' => [
                    [
                        'price' => '1 500', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/orderplatta.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Skanner',
                'name' => 'Skanner',
                'price_currency' => [
                    [
                        'price' => '1 500', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/skanner.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Våg',
                'name' => 'Våg',
                'price_currency' => [
                    [
                        'price' => '1 500', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/våg1.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Våg',
                'name' => 'Kassa våg',
                'price_currency' => [
                    [
                        'price' => '1 500', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/våg2.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Skrivare',
                'name' => 'Skrivare',
                'price_currency' => [
                    [
                        'price' => '1 500', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/skrivare.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kontrollenheter',
                'name' => 'CleanCash Type-A',
                'price_currency' => [
                    [
                        'price' => '1 250', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kontrollenheter1.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kontrollenheter',
                'name' => 'Kontrollenhet PosPLus 2',
                'price_currency' => [
                    [
                        'price' => '1 245', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kontrollenheter2.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kontrollenheter',
                'name' => 'Kontrollenheten Boxen',
                'price_currency' => [
                    [
                        'price' => '1 250', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kontrollenheter3.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kontrollenheter',
                'name' => 'Kontrollenheten.se',
                'price_currency' => [
                    [
                        'price' => '1 250', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kontrollenheter4.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kvittorullar',
                'name' => '1',
                'price_currency' => [
                    [
                        'price' => '100', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kvittorullar1.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kvittorullar',
                'name' => '149141202-origpic-5c6f59',
                'price_currency' => [
                    [
                        'price' => '100', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kvittorullar2.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kvittorullar',
                'name' => '23800583-origpic-b535f5',
                'price_currency' => [
                    [
                        'price' => '100', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kvittorullar3.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kvittorullar',
                'name' => '2550423',
                'price_currency' => [
                    [
                        'price' => '100', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kvittorullar4.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kvittorullar',
                'name' => '57mmx50m kassa',
                'price_currency' => [
                    [
                        'price' => '100', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kvittorullar5.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kvittorullar',
                'name' => '80mm',
                'price_currency' => [
                    [
                        'price' => '100', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kvittorullar6.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kvittorullar',
                'name' => 'Ej kvitto på köp 18m',
                'price_currency' => [
                    [
                        'price' => '100', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kvittorullar7.png', 
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Kvittorullar',
                'name' => 'Thermorulle-57-50-12-25-m',
                'price_currency' => [
                    [
                        'price' => '100', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/kvittorullar8.png',
                'tag' => null,
                'recommendation' => null,
            ],
            [
                'category' => 'Tillbehör',
                'name' => 'Tillbehör',
                'price_currency' => [
                    [
                        'price' => '100', 
                        'currency' => 'SEK'
                    ]
                ],
                'image' => '/tillbehör1.png',
                'tag' => null,
                'recommendation' => null,
            ],
        ];

        foreach ($products as $product) {
            Product::create([
                'category' => $product['category'],
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                'description' => $this->createFakeDescription(),
                'price_currency' => $product['price_currency'],
                'image' => $product['image'],
                'tag' => $product['tag'],
                'recommendation' => $product['recommendation'], 
            ]);
        }
    }

    public function createFakeDescription()
    {
        $this->faker = Faker::create();
        $information = $this->faker->paragraph();

        $description = [
            'information' => $information,
            'details' => null,
        ];

        return $description;
    }
}
