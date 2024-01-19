<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\books;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        books::create([
            'idbuku' => 'IDN244',
            'NamaBuku'=> 'Kancil Mencuri Beras Cianjur',
            'NamaPengarang' => 'Agus Gobang',
            'Kategori'=> 'Fiksi',
            'qty'=> 4 ,
            'Image'=> '1.png'
        ]);
        books::create([
            'idbuku' => 'IDN245',
            'NamaBuku'=> 'Kancil Yang Nakal',
            'NamaPengarang' => 'Agus Gotik',
            'Kategori'=> 'Horor',
            'qty'=> 2 ,
            'Image'=> '2.png'
        ]);
        books::create([
            'idbuku' => 'IDN254',
            'NamaBuku'=> 'Kancil Belum Mandi',
            'NamaPengarang' => 'Agus Goting',
            'Kategori'=> 'Ilmiah',
            'qty'=> 3 ,
            'Image'=> '3.png'
        ]);
        books::create([
            'idbuku' => 'IDN247',
            'NamaBuku'=> 'Buaya Baik Hati',
            'NamaPengarang' => 'Agus Golang',
            'Kategori'=> 'Saintek',
            'qty'=> 5 ,
            'Image'=> '1.png'
        ]);
        books::create([
            'idbuku' => 'IDN274',
            'NamaBuku'=> 'Lentera Hitam',
            'NamaPengarang' => 'Agus Doang',
            'Kategori'=> 'Horor',
            'qty'=> 4 ,
            'Image'=> '3.png'
        ]);
        books::create([
            'idbuku' => 'IDN249',
            'NamaBuku'=> 'Malika',
            'NamaPengarang' => 'Agus Jono',
            'Kategori'=> 'Saintek',
            'qty'=> 1 ,
            'Image'=> '2.png'
        ]);
    }
}
