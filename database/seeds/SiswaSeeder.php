<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['nama' => 'Hafsha', 'nis' => '221404', 'jk' => 'P',
                'tgl_lahir' => '2005-11-14', 'alamat' => 'Bandung'],

            ['nama' => 'Ramdani', 'nis' => '101105', 'jk' => 'L',
                'tgl_lahir' => '2004-10-22', 'alamat' => 'Bandung'],
        ];

        DB::table('siswas')->insert($sample);
    }

}
