<?php

use Illuminate\Database\Seeder;

class PartiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('parties')->insert([
        [
          'name' => 'Parti Ayam',
          'created_at' => '1976-08-19 11:20:12',
          'updated_at' => '1976-08-19 11:20:12'
        ],
        [
          'name' => 'Parti Itik',
          'created_at' => '1977-07-15 15:30:26',
          'updated_at' => '1999-12-31 11:22:42'
        ],
        [
          'name' => 'Parti Kucing',
          'created_at' => '1986-06-20 11:30:55',
          'updated_at' => '1986-06-20 11:30:55'
        ],
      ]);
    }
}
