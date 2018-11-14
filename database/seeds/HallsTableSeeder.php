<?php

use Illuminate\Database\Seeder;

class HallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('halls')->insert([
        [
          'name' => "Hall Tony Garnier",
        ],
        [
          'name' => "Olympia",
        ],
        [
          'name' => "Zenith de Lille",
        ],
        [
          'name' => "Groupama Stadium",
        ],
        [
          'name' => "Bercy",
        ],
        [
          'name' => "Stade de France",
        ],
        [
          'name' => "Zenith de Toulouse",
        ]
      ]);
    }
}
