<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use Carbon\Carbon; ///Generate  datetime base on current machine format.

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        $data = [[
            'name' => 'Samsung Galaxy 5S',
            'slug' => 'Samsung Galaxy 5S Premium Pro',
            'description' => 'Samsung Galaxy Premium Pro for new younger',
            'price' => '6500000.99',
            'image' => 'https://via.placeholder.com/800x600/0000FF/808080 ?Text=Samsung 5S',
            'userid' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]
        ];

        Product::insert($data);

        //Call product factory
        Product::factory(200)->create();
    }
}
