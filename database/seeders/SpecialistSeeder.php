<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sp_data = [
            [
                'fio' => 'Сергиенко Александр Михайлович',
                'photo' => null,
                'slug' => Str::slug('Сергиенко Александр Михайлович'),
                'position' => 'Главный врач, врач стоматолог-хирург, врач стоматолог-ортопед, врач стоматолог-терапевт.',
                'description' => file_get_contents(public_path('tmp_data/specialists/sergienko_am.html')),
                'sort_order' => 10,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'fio' => 'Сергиенко Егор Александрович',
                'photo' => null,
                'slug' => Str::slug('Сергиенко Егор Александрович'),
                'position' => 'Врач стоматолог-терапевт, врач стоматолог-ортопед.',
                'description' => file_get_contents(public_path('tmp_data/specialists/sergienko_ea.html')),
                'sort_order' => 20,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'fio' => 'Сергиенко Ирина Андреевна',
                'photo' => null,
                'slug' => Str::slug('Сергиенко Ирина Андреевна'),
                'position' => 'врач стоматолог-терапевт, врач-гигиенист.',
                'description' => file_get_contents(public_path('tmp_data/specialists/sergienko_ia.html')),
                'sort_order' => 30,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'fio' => 'Гордеева Оксана Викторовна',
                'photo' => null,
                'slug' => Str::slug('Гордеева Оксана Викторовна'),
                'position' => 'Старшая медицинская сестра.',
                'description' => file_get_contents(public_path('tmp_data/specialists/gordeeva_ov.html')),
                'sort_order' => 40,
                'certificates' => json_encode([]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($sp_data as $data) {
            $pageId = DB::table('specialists')->insertGetId($data);

            DB::table('seo_data')->insert(
                [
                    'url' => 'specialists/'.$data['slug'],
                    'seo_title' => $data['fio'].', записаться на прием в Курске',
                    'seo_description' => $data['fio'].', записаться на прием в Курске в клинике  Эстедент плюс',
                    'seoable_id' => $pageId,
                    'seoable_type' => "App\Models\Specialist",
                ]
            );
        }
    }
}
