<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    public function hallo()
    {
        $f = 1;
        $total = $f * 100;
        if ($total >= 1000) {
            return 'Diatas Seribu';
        } else {
            return 'Dibawah Seribu';
        }
    }

    public function profile()
    {
        return view('profile');

    }

    public function facebook($perkalian, $nama)
    {
        $calculator = 1 + 5;
        $hasilperkalian = $calculator * $perkalian;
        $jk = 10;
        return view('about', compact('nama', 'hasilperkalian', 'jk'));
    }

    public function siswa()
    {
        $a = [
            array('id' => 1, 'name' => 'Putri', 'age' => 17, 'hobi' => ['Membaca', 'Menonton', 'Mendengar Musik']),
            array('id' => 2, 'name' => 'Hafsha', 'age' => 18, 'hobi' => ['Menonton', 'Menulis', 'Tidur', 'Masak']),
        ];
        // dump data
        // dd($a);
        return view('pages.siswa', ['siswa' => $a]);
    }

    public function beratbadan($berat, $tinggi)
    {
        $bmi = $berat / (($tinggi / 100) * ($tinggi / 100));
        if ($bmi < 17.0) {
            $status = "Kurus, Kekurangan Berat Badan";
        } elseif ($bmi >= 17.0 && $bmi <= 18.4) {
            $status = "Kurus, Kekurangan berat badan ringan";
        } else if ($bmi >= 18.5 && $bmi <= 25.0) {
            $status = "Normal";
        } elseif ($bmi >= 25.1 && $bmi <= 27.0) {
            $status = "Gemuk Kelebihan berat badan tingkat ringan";
        } elseif ($bmi > 27.1) {
            $status = "Gemuk, Kelebihan berat badan tingkat berat";
        } else {
            $status = "Keterangan tidak ada";
        }
        return view('pages.beratbadan', compact('berat', 'tinggi', 'bmi', 'status'));
    }

    // public function kampus()
    // {
    //     $a = [
    //         array('id' => 1, 'dosen' => 'Gunawan', 'induk1' => 0001,
    //             'mahasiswa' => ['Hafsha', 'induk' => '0011', 'jurusan' => 'Informatika', 'matakuliah' => 'Biologi']),

    //         // array('id' => 3, 'name' => 'Hafsha', 'age' => 18, 'hobi' => ['Menonton', 'Menulis', 'Tidur', 'Masak']),
    //     ];
    //     // dump data
    //     // dd($a);
    //     return view('pages.kampus', ['kampus' => $a]);
    // }

    public function kampus()
    {
        $a =
            [
            ['dosen' => 'Gunawan',
                'induk' => '001',
                'mahasiswa' => [

                    ['nama' => 'Hafsha', 'noinduk' => 111, 'jurusan' => 'Informatika', 'matakuliah' => ['Biologi', 'Kimia', 'Fisika']],
                    ['nama' => 'Ramdani', 'noinduk' => 112, 'jurusan' => 'Hukum', 'matakuliah' => ['Matematika', 'B.Indonesia', 'Pkn']],
                    ['nama' => 'Novita', 'noinduk' => 113, 'jurusan' => 'Pendidikan', 'matakuliah' => ['Geofisika', 'Sosiologi', 'Matematika']],
                    ['nama' => 'Aulia', 'noinduk' => 114, 'jurusan' => 'Informatika', 'matakuliah' => ['Pkn', 'Biologi', 'Aastronomi']],
                    ['nama' => 'Faiza', 'noinduk' => 115, 'jurusan' => 'Otomotif', 'matakuliah' => ['Sosiologi', 'Ppkn', 'Kimia']],

                ],
            ],

            ['dosen' => 'Syahrul',
                'induk' => '001',
                'mahasiswa' => [

                    ['nama' => 'Putri', 'noinduk' => 116, 'jurusan' => 'Multimedia', 'matakuliah' => ['Biologi', 'Astronomi', 'Matematika']],
                    ['nama' => 'Asti', 'noinduk' => 117, 'jurusan' => 'Pendidikan', 'matakuliah' => ['Ppkn', 'B.Indonesia', 'Kimia']],
                    ['nama' => 'Suci', 'noinduk' => 118, 'jurusan' => 'Informatika', 'matakuliah' => ['Geofisika', 'Sosiologi', 'Biologi']],
                    ['nama' => 'Novy', 'noinduk' => 119, 'jurusan' => 'Hukum', 'matakuliah' => ['Pkn', 'Matematika', 'Astronomi']],
                    ['nama' => 'Sumiati', 'noinduk' => 120, 'jurusan' => 'Otomotif', 'matakuliah' => ['Sosiologi', 'Ppkn', 'Kimia']],

                ],
            ],

            ['dosen' => 'Zaenal',
                'induk' => '001',
                'mahasiswa' => [

                    ['nama' => 'Rey', 'noinduk' => 121, 'jurusan' => 'Multimedia', 'matakuliah' => ['Geofisika', 'Sosiologi', 'Biologi']],
                    ['nama' => 'Dikha', 'noinduk' => 122, 'jurusan' => 'Pendidikan', 'matakuliah' => ['Pkn', '', 'Astronomi']],
                    ['nama' => 'Dinar', 'noinduk' => 123, 'jurusan' => 'Informatika', 'matakuliah' => ['Statistika', 'B.Indonesia', 'Kimia']],
                    ['nama' => 'Dimas', 'noinduk' => 124, 'jurusan' => 'Hukum', 'matakuliah' => ['Pkn', 'Matematika', 'Astronomi']],
                    ['nama' => 'Haddad', 'noinduk' => 125, 'jurusan' => 'Otomotif', 'matakuliah' => ['Sosiologi', 'Ppkn', 'Kimia']],

                ],
            ],

        ];
        return view('pages.kampus', ['kampus' => $a]);

    }

    public function mahasiswa()
    {
        $b = [

            ['dosen' => 'Yusuf Bachtiar',
                'matakuliah' => 'Pemrograman Mobile',
                'mahasiswa' => [
                    ['nama' => 'Muhammad Soleh', 'nilai' => 78],
                    ['nama' => 'Jujun Junaedi', 'nilai' => 85],
                    ['nama' => 'Mamat Alkatiri', 'nilai' => 90],
                ],
            ],

            ['dosen' => 'Yaris Riyadi',
                'matakuliah' => 'Pemrograman Web',
                'mahasiswa' => [
                    ['nama' => 'Alfred McTomminay', 'nilai' => 67],
                    ['nama' => 'Bruno Kasmir', 'nilai' => 90],
                ],
            ],

        ];
        return view('pages.mahasiswa', ['mahasiswa' => $b]);
    }

    public function nilai()
    {
        $b = [

            ['nama' => 'Agus',
                'jurusan' => 'TKR',
                'matapelajaran' =>
                [

                    ['matpel' => 'Indonesia', 'Nilai' => 80],
                    ['matpel' => 'Inggris', 'Nilai' => 97],
                    ['matpel' => 'Produktif', 'Nilai' => 67],
                    ['matpel' => "Matematika", 'Nilai' => 100],

                ],
            ],

            ['nama' => 'Mahmud',
                'jurusan' => 'TKR',
                'matapelajaran' =>
                [

                    ['matpel' => 'Indonesia', 'Nilai' => 78],
                    ['matpel' => 'Inggris', 'Nilai' => 86],
                    ['matpel' => 'Produktif', 'Nilai' => 90],
                    ['matpel' => "Matematika", 'Nilai' => 67],

                ],
            ],

            ['nama' => 'Rendi',
                'jurusan' => 'TSM',
                'matapelajaran' =>
                [

                    ['matpel' => 'Indonesia', 'Nilai' => 90],
                    ['matpel' => 'Inggris', 'Nilai' => 50],
                    ['matpel' => 'Produktif', 'Nilai' => 65],
                    ['matpel' => "Matematika", 'Nilai' => 78],

                ],
            ],

            ['nama' => 'Firman',
                'jurusan' => 'RPL',
                'matapelajaran' =>
                [

                    ['matpel' => 'Indonesia', 'Nilai' => 78],
                    ['matpel' => 'Inggris', 'Nilai' => 90],
                    ['matpel' => 'Produktif', 'Nilai' => 56],
                    ['matpel' => "Matematika", 'Nilai' => 78],

                ],
            ],

            ['nama' => 'Abdul',
                'jurusan' => 'RPL',
                'matapelajaran' =>
                [

                    ['matpel' => 'Indonesia', 'Nilai' => 89],
                    ['matpel' => 'Inggris', 'Nilai' => 67],
                    ['matpel' => 'Produktif', 'Nilai' => 80],
                    ['matpel' => "Matematika", 'Nilai' => 90],

                ],
            ],

        ];
        return view('pages.nilai', ['nilai' => $b]);
    }

    public function belanja()
    {
        $b = [

            ['nama' => 'Alfian',
                'belanja' => [

                    ['jenis' => 'Sepatu', 'harga' => 250000],
                    ['jenis' => 'Baju', 'harga' => 100000],
                    ['jenis' => 'Celana', 'harga' => 150000],
                    ['jenis' => 'Kupluk', 'harga' => 100000],
                ],
            ],

            ['nama' => 'Dida',
                'belanja' =>
                [
                    ['jenis' => 'Topi', 'harga' => 100000],
                    ['jenis' => 'Baju', 'harga' => 75000],
                    ['jenis' => 'Celana', 'harga' => 125000],
                ],
            ],

        ];
        return view('pages.belanja', ['belanja' => $b]);
    }

}
