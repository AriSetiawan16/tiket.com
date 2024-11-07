<?php

// database/seeders/EventSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run()
    {
        Event::create([
            'title' => 'Estungkara 2024',
            'location' => 'Jakarta Barat',
            'date' => '2024-11-09',
            'price' => 50000,
            'image_path' => 'images/estungkara.png'
        ]);

        // Tambahkan event lainnya
    }
}

