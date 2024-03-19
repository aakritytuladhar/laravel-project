<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
                [
                        'name'=>'Teddy Bear',
                        'price'=>'4000',
                        'category'=>'Valentine Day',
                        'description'=>'🐻Fashionable and durable gifts for your memory 🐻Perfect gift for your special ones 🐻Dimension : 4feet 🐻we will sent same color and size',
                        'gallery'=>'v5.png',
                        'home_id'=>'1'
                ],
                [
                        'name'=>'Flower',
                        'price'=>'1000',
                        'category'=>'Valentine Day',
                        'description'=>'🌹Elegant Design 🌹Real Like 🌹 Use of the product: gifts to valentine, corporate gifts 🌹The eternal classic rose',
                        'gallery'=>'flower.jpg',
                        'home_id'=>'1'
                ],
                [
                        'name'=>'Chocolate',
                        'price'=>'500',
                        'category'=>'Valentine Day',
                        'description'=>'🍫Homemade 🍫Local Product 🍫Flavour : Darkmilk, white, Strawberry. 🍫No artificial colours and preservatives are used',
                        'gallery'=>'chocolate.jpg',
                        'home_id'=>'1'
                ],
                [
                        'name'=>'Ring',
                        'price'=>'5000',
                        'category'=>'Valentine Day',
                        'description'=>'💍Color:Gold,No. of Diamonds:30,Shape:Round 💍Gift it to you Valentine,the sign of love 💍ring size include.',
                        'gallery'=>'ring.jpg',
                        'home_id'=>'1'
                ],
                [
                    'name'=>'Pinata',
                    'price'=>'10000',
                    'category'=>'Valentine Day',
                    'description'=>'💗Shape :Heart💗Homemade Chocolates,Handmade Product 💗Premium Quality💗Healthy Chocolates 💗Can be Customized as per Your Requirement.',
                    'gallery'=>'v4.png',
                    'home_id'=>'1'
                ],
                [
                    'name'=>'His & Her Mug',
                    'price'=>'500',
                    'category'=>'Valentine Day',
                    'description'=>'💖This strong, ceramic mug is the perfect gift idea for your loved ones.💖Made with high quality ceramic by the best artisans💖drinking your morning coffee at work',
                    'gallery'=>'hisher.jpg',
                    'home_id'=>'1'
                ],
                [
                    'name'=>'Lights Heart Shape Photo Clip String',
                    'price'=>'1000',
                    'category'=>'Decoration',
                    'description'=>'💡Safe to touch without risk of burns.💡Perfect for any occasions💡PORTABLE💡Waterproof Design LED',
                    'gallery'=>'d2.jpg',
                    'home_id'=>'5'
        ],
                [
                    'name'=>'ANNIVERSARY SET WITH LIGHTS',
                    'price'=>'1000',
                    'category'=>'Decoration',
                    'description'=>'🥂Great finishing touch 🥂Suitable for Indoor🥂Perfect for special events🥂Easy at home assembly and set up.',
                    'gallery'=>'d3.jpg',
                    'home_id '=>'5'
               ],
                [
                    'name'=>'JURSUE Soft Silicone Couple Cute Phone Case',
                    'price'=>'1000',
                    'category'=>'Decoration',
                    'description'=>'♡Function:✔Shockproof + Anti-knock ✔Resistant to dirt + Anti-Oil stains✔ Soft to the Touch, Good Touch ✔Scratch resistant ✔Light weight Design LED',
                    'gallery'=>'d4.jpg',
                    'home_id '=>'5'
              ],
                [
                    'name'=>'Father Day Set With Lights',
                    'price'=>'1000',
                    'category'=>'Decoration',
                    'description'=>'🥂Great finishing touch🥂Suitable for Indoor🥂Perfect for special events🥂Easy at home assembly and set up.',
                    'gallery'=>'d5.jpg',
                    'home_id'=>'5'
                ],
                [
                    'name'=>'Boao Happy Mothers Day',
                    'price'=>'1000',
                    'category'=>'Decoration',
                    'description'=>' 🥂Great finishing touch 🥂Suitable for Indoor🥂Perfect for special events🥂Easy at home assembly and set up.',
                    'gallery'=>'d6.jpg',
                    'home_id'=>'5 '
                ],
                [
                    'name'=>'Friends Birthday Banner',
                    'price'=>'9000',
                    'category'=>'Decoration',
                    'description'=>'🥂Great finishing touch 🥂Suitable for Indoor🥂Perfect for special events🥂Easy at home assembly and set up.',
                    'gallery'=>'d7.jpg',
                    'home_id'=>'5'
               ],
               [
                    'name'=>'BFF Sprinkles Magic Ceramic Mug',
                    'price'=>'900 ',
                    'category'=>'friendship day',
                    'description'=>'🍺ceramic mugs for couple
                                🍺gift your loved ones
                                🍺reasonable price
                                🍺comes inside the box',
                    'gallery'=>'fb1.jpg',
                    'home_id'=>'4'
            ],
            [
                    'name'=>'Customized Keychain with  Mobile Stand',
                    'price'=>'500 ',
                    'category'=>'friendship day',
                    'description'=>'👭Same as picture
                                    👭1 pair
                                    👭couple keyring - key chain
                                    👭best for gift to friendship day',
                    'gallery'=>'fb2.jpg',
                    'home_id'=>'4'
            ],
            [
                    'name'=>'Personalized Wooden Dreamcatcher',
                    'price'=>'500 ',
                    'category'=>'friendship day',
                    'description'=>'
                            🧿Catches good dreams
                            🧿Dimension(L): 8"
                            🧿Decorated with feathers and beads',
                    'gallery'=>'fb3.jpg',
                    'home_id'=>'4'
            ],
            [
                    'name'=>'LED Fluffy Fur Cushion For Friend',
                    'price'=>'900 ',
                    'category'=>'friendship day',
                    'description'=>'✔️Decorative Cushion Cover
                            ✔️Twill Fur Cushion Cover
                            ✔️Solid Design
                            ✔️Materials: 100% fur',
                    'gallery'=>'fb4.jpg',
                    'home_id'=>'4'
            ],
            [
                    'name'=>'BFF  Bracelets Friendship Bracelet Wind Wav',
                    'price'=>'900 ',
                    'category'=>'friendship day',
                    'description'=>'✔💜Wind Wave Bracelets
                                💜Bff bracelets
                                💜Couple Bracelets
                                💜Color: Black',
                    'gallery'=>'fb4.jpg',
                    'home_id'=>'4'
            ],
            [
                    'name'=>'WOODGEEK  Bamboo Wooden Notebook',
                    'price'=>'1000',
                    'category'=>'friendship day',
                    'description'=>'📙🖊️Real bamboo hardcover
                                        📙🖊️Measures 18 x 13.5 cms
                                        📙🖊️Its 80 unlined brown pages
                                        📙🖊️Comes with bamboo pen',
                    'gallery'=>'fb6.jpg',
                    'home_id'=>'4'
            ],
            [
                'name'=>'Mixed Roses Bunch',
                'price'=>'599',
                'category'=>'Anniversary Gifts',
                'description'=>' 🥂Great finishing touch 🥂Suitable for Indoor🥂Perfect for special events🥂Easy at home assembly and set up.',
                'gallery'=>'a1.jpg',
                'home_id'=>'3'
           ],
        [
                'name'=>'Money Plant In Lucky To Have You Glass Pot',
                'price'=>'699',
                'category'=>'Anniversary Gifts',
                'description'=>' 🥂Suitable for Indoor 🥂Great finishing touch 🥂Perfect for special events🥂Easy at home assembly and set up.',
                'gallery'=>'a2.jpg',
                'home_id '=>'3'
         ],
        [
                'name'=>'Happy Anniversary Heart Shaped Cake- Half Kg',
                'price'=>'799',
                'category'=>'Anniversary Gifts',
                'description'=>'🥂Cake Flavour- Chocolate 🥂Cake Shape- Heart Shaped 🥂Serves- 4-6 People 🥂 Size- 6 Inches in Diameter ',
                'gallery'=>'a3.webp',
                'home_id'=>'3'
        ],
        [
                'name'=>'Loving Couple Mug Set',
                'price'=>'499',
                'category'=>'Anniversary Gifts',
                'description'=>' 🥂Great finishing touch 🥂Suitable for Indoor🥂Perfect for special events🥂Easy at home assembly and set up.',
                'gallery'=>'a4.webp',
                'home_id'=>'3'
        ],
        [
                'name'=>'Anniversary Balloon Bouquet',
                'price'=>'699',
                'category'=>'Anniversary Gifts',
                'description'=>' 🥂Great finishing touch 🥂Suitable for Indoor🥂Perfect for special events🥂Easy at home assembly and set up.',
                'gallery'=>'a5.jpg',
                'home_id'=>'3'
          ],
        [
                'name'=>'Personalised LED Temperature Bottles',
                'price'=>'1599',
                'category'=>'Anniversary Gifts',
                'description'=>' 🥂Great finishing touch 🥂Suitable for Indoor🥂Perfect for special events🥂Easy at home assembly and set up.',
                'gallery'=>'a6.webp',
                'home_id'=>'3'
        ],
        ['name'=>'Blue De Chanel Perfume',
            'price'=>'5000',
            'category'=>'FathersDayMothersDay',
            'description'=>'✨Modern, fresh and a unique fragrance ✨Perfect for special events ✨Long lasting(at least 9hrs).',
            'gallery'=>'FM1.png',
		'home_id'=>'2'
        ],

	['name'=>'Ben Nevis Watch',
            'price'=>'8000',
            'category'=>'FathersDayMothersDay',
            'description'=>'⌚High quality stainless steel strap ⌚waterproof and scratch resistant ⌚Multiple dislay.',
            'gallery'=>'FM2.png',
		'home_id'=>'2'],

           [ 'name'=>'Parker Pen Set',
            'price'=>'2500',
            'category'=>'FathersDayMothersDay',
            'description'=>'🖋️Ballpoint and Fountain pen set 🖋️Smooth and reliable writing 🖋️Elegant look 🖋️Re-usable with cartridges.',
            'gallery'=>'FM3.png',
		'home_id'=>'2'],

           [ 'name'=>'Benson Cardinal Pink Rose Watch For Women',
            'price'=>'10000',
            'category'=>'FathersDayMothersDay',
            'description'=>'🕰️Swiss Quartz Movement 🕰️Stainless Steel body 🕰️Elegant and beautiful look.',
            'gallery'=>'FM4.png',
		'home_id'=>'2'],

           [ 'name'=>'Louis Vuitton Handbag',
            'price'=>'20000',
            'category'=>'FathersDayMothersDay',
            'description'=>'👜High quality material 👜Spacious with multiple compartments 👜Perfect for special events.',
            'gallery'=>'FM5.png',
		'home_id'=>'2'],

            ['name'=>'Women Bracelet',
            'price'=>'5000',
            'category'=>'FathersDayMothersDay',
            'description'=>'📿High quality material 📿Elegant and beautiful 📿Re-adjustable.',
            'gallery'=>'FM6.png',
		'home_id'=>'2'],
                ['name'=>'Lovearoundme Bracelet ',
                'price'=>'3000',
                'category'=>'Special Gift',
                'description'=>'🎐Great finishing touch 🎐Suitable for Outdoor 🎐Perfect for special events 🎐Trendy design .',
                'gallery'=>'sg1.jpg',
                    'home_id'=>'6'],
    
                ['name'=>'Combo Collection Gift For Mom',
                'price'=>'15000',
                'category'=>'Special Gift',
                'description'=>'🎐Great finishing touch 🎐Suitable for Outdoor & Indoor 🎐Perfect for special events 🎐Trendy design .',
                'gallery'=>'sg2.jpg',
                    'home_id'=>'6'],
    
                ['name'=>'Luxury Wow Collection ',
                'price'=>'35000',
                'category'=>'Special Gift',
                'description'=>'🎐Great finishing touch 🎐Suitable for Outdoor & Indoor 🎐Perfect for special events 🎐Trendy design .',
                'gallery'=>'sg3.webp',
                    'home_id'=>'6'],
    
               [ 'name'=>'Mens Bucket Drink Collection',
                'price'=>'15000',
                'category'=>'Special Gift',
                'description'=>'🎐Great Quality 🎐Suitable for Indoor & Outdoor  🎐Perfect for special events 🎐Trendy design .',
                'gallery'=>'sg4.jpg',
                    'home_id'=>'6'],
    
                ['name'=>'Women Bucket Cosmetic Collection',
                'price'=>'25000',
                'category'=>'Special Gift',
                'description'=>'🎐Great Quality & finishing touch 🎐Suitable for Indoor & Outdoor  🎐Perfect for special events 🎐Trendy design .',
                'gallery'=>'sg5.jpg',
                    'home_id'=>'6'],
    
                ['name'=>'Flower & Chocolate Bucket  Collection',
                'price'=>'10000',
                'category'=>'Special Gift',
                'description'=>'🎐Great Quality & finishing touch 🎐Suitable for Indoor & Outdoor  🎐Perfect for special events 🎐Trendy design .',
                'gallery'=>'sg6.jpg',
                    'home_id'=>'6']
    
        ]);
    }
}
