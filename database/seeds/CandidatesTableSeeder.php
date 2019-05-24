<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('candidates')->insert([
        [
          'name' => 'Abu Bakar Muhammad',
          'parties_id' => '3',
          'created_at' => '1976-08-19 11:20:12',
          'updated_at' => '1976-08-19 11:20:12'
        ],
        [
          'name' => 'Ng Pei Li ',
          'parties_id' => '3',
          'created_at' => '1977-07-15 15:30:26',
          'updated_at' => '1999-12-31 11:22:42'
        ],
        [
          'name' => 'Ranjit Singh Deo',
          'parties_id' => '3',
          'created_at' => '1986-06-20 11:30:55',
          'updated_at' => '1986-06-20 11:30:55'
        ],
        [
          'name' => 'Foo Yoke Wai ',
          'parties_id' => '1',
          'created_at' => '1986-06-20 11:30:55',
          'updated_at' => '1986-06-20 11:30:55'
        ],
        [
          'name' => 'Chia Kim Hooi',
          'party_id' => '2',
          'created_at' => '1986-06-20 11:30:55',
          'updated_at' => '1986-06-20 11:30:55'
        ],
      ]);
    }
}
