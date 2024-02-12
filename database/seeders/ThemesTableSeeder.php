<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $themes = [
            'Maternity' => 'Celebrate the journey of motherhood with our Maternity photography sessions. Capture the glow and beauty of expecting mothers in timeless photographs that tell a story of anticipation and love. Let us help you immortalize this special moment with elegance and grace.',
            'Baby' => 'Our Baby photography sessions are designed to capture the pure essence and tender innocence of your newborn. With a gentle touch and a keen eye for moments, we create heartwarming portraits that cherish the fleeting moments of early childhood. Let\'s create memories together that you\'ll treasure for a lifetime.',
            'Family' => 'Family is where life begins and love never ends. Our Family photography sessions aim to capture the unique bond and warmth of your family. From candid moments to posed portraits, we bring out the joy and connection that ties your family together, creating cherished memories for years to come.',
            'Wedding' => 'Your wedding day is a story waiting to be told. Our Wedding photography captures every smile, tear, and tender touch of your special day. With a blend of candid moments and orchestrated portraits, we create a visual narrative that encapsulates the romance, joy, and essence of your celebration.',
            'Business' => 'Elevate your brand with our Business photography services. From professional headshots to corporate events, we provide sleek and sophisticated images that convey your brand\'s message and ethos. Let us help you make a lasting impression in your industry with powerful visual content.',
            'Products' => 'In the world of marketing, presentation is everything. Our Product photography services are designed to showcase your products in their best light, highlighting features and appealing to your customers\' desires. Enhance your online presence and drive sales with stunning, high-quality product images.',
            'Nature' => 'Embark on a visual journey through the beauty of the natural world with our Nature photography. From breathtaking landscapes to intimate wildlife portraits, we capture the essence of Earth\'s diverse ecosystems. Allow us to bring the wonder of nature to your space through compelling and beautiful imagery.',
            'Animals' => 'Celebrate the beauty and diversity of the animal kingdom with our Animal photography. From pets to wildlife, we capture the spirit and personality of each creature we photograph. Let us bring the story of the animal world into your home with vibrant, soulful images that inspire and delight.',
        ];

        foreach ($themes as $name => $description) {
            DB::table('themes')->insert([
                'name' => $name,
                'description' => $description,
            ]);
        }
    }
}
