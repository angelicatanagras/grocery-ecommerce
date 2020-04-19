<?php

use App\ProductType;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //for user
        factory(App\User::class)->create([
            'name' => 'Angelica',
            'email' => 'admin@gmail.com',
        ]);

        $product_types = ['Food', 'Beverage', 'Essential'];
        foreach ($product_types as $type) {
            $product_type = new ProductType();
            $product_type->type = $type;
            $product_type->save();
        }

        factory(App\Product::class, 5)->create(); //for seeding of products



    }


}
