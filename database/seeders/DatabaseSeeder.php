<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('information')->insert([
            ['cpu_traffic' => '25', 'likes' => '42500', 'sales' => '125400', 'new_members' => '2000']
        ]);

        DB::table('orders')->insert([
            [
                'item' => 'first Item',
                'status' => 'Delivered',
                'Popularity' => '122460',
                'color'=>'primary'
            ],
            [
                'item' => 'second Item',
                'status' => 'processing',
                'Popularity' => '1254820',
                'color'=>'danger'
            ],
            [
                'item' => 'third Item',
                'status' => 'Pending',
                'Popularity' => '987456321',
                'color'=>'warning'
            ],
            [
                'item' => 'forth Item',
                'status' => 'Shipped',
                'Popularity' => '1245784511',
                'color'=>'success'
            ],
            [
                'item' => 'fifth Item',
                'status' => 'Delivered',
                'Popularity' => '987412541',
                'color'=>'info'
            ],
        ]);


    }
}
