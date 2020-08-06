<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){

          DB::table('pegawais')->insert([
              'nama_lengkap' => $faker->name,
              'tempat_lahir' => $faker->citySuffix,
              'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
              'agama' => 7,
              'phone' => $faker->e164PhoneNumber,
              'alamat' => $faker->address
          ]);

      }
    }
}