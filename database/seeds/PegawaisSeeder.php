<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;


class PegawaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('pegawais')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $faker = Faker::create('id_ID');


        $array = ['ASN', 'Honor', 'Kontrak'];


        for($i = 1; $i <= 100; $i++){
            $random = Arr::random($array);


          DB::table('pegawais')->insert([
              'nip' =>  $faker->ean13,
              'nama_lengkap' => $faker->name,
              'tempat_lahir' => $faker->state,
              'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),

              'jenis_kelamin' => 'L',
              'agama' => 'islam',
              'golongan_darah' => 'O',
              'pernikahan' => 'menikah',
              'kepegawaian' => $random,

              'tgl_naik_pangkat' => $faker->date($format = 'Y-m-d', $max = 'now'),
              'tgl_naik_gaji' => $faker->date($format = 'Y-m-d', $max = 'now'),

              'telfon' => $faker->PhoneNumber,
              'email' => $faker->email,
              'unit_id' => 1,
              'alamat' => $faker->address
          ]);

      }
    }
}
