<?php

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
        DB::table('pproduct')->insert([
            array('name'=>"sản phẩm 1", 'price'=>'10000', 'quantity'=>'10', 'description'=> 'sản phẩm 1'),
            array('name'=>"sản phẩm 2", 'price'=>'10000', 'quantity'=>'10', 'description'=> 'sản phẩm 2'),
            array('name'=>"sản phẩm 3", 'price'=>'10000', 'quantity'=>'10', 'description'=> 'sản phẩm 3')
        ])
        // $this->call(UsersTableSeeder::class);
    }
}
