<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [];

        for ($i = 1; $i < 56; $i++ ){
            $categories[] = [
                'title' => "Товар".$i,
                'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae error eveniet hic ipsum minus odit tempora! A, accusantium, blanditiis consectetur deserunt enim, natus neque nisi nostrum officia reiciendis veniam voluptatem!",
                'availability' => ((rand(1,4) > 1 )? true : false),
                'price' => 0.99 + (rand(50,2000)),
                'img' => ((rand(1,2) > 1 )? 'images/phone_1.jpg' : 'images/phone_2.jpg')
            ];
        }

        DB::table('products')->insert($categories);
    }
}
