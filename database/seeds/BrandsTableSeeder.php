<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['brand' => 'BMW',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['brand' => 'Mercedes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['brand' => 'Opel',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['brand' => 'Honda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
        ]);
    }
}
