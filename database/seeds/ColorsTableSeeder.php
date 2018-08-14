<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            ['color' => 'White',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['color' => 'Black',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['color' => 'Gray',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['color' => 'Red',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['color' => 'Green',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['color' => 'Blue',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],

            ['color' => 'Yellow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
        ]);
    }
}
