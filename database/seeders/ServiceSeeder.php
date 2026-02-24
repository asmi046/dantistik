<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put('services/serv_1.webp', file_get_contents(public_path('tmp_data/services/service_1.jpg')), 'public');
        Storage::disk('public')->put('services/serv_2.webp', file_get_contents(public_path('tmp_data/services/service_2.jpg')), 'public');
        Storage::disk('public')->put('services/serv_3.webp', file_get_contents(public_path('tmp_data/services/service_3.jpg')), 'public');
        Storage::disk('public')->put('services/serv_4.webp', file_get_contents(public_path('tmp_data/services/service_4.jpg')), 'public');

        $services = [
            [
                'title' => 'Терапевтическая стоматология',
                'short_title' => 'Диагностика, лечение кариеса, лечение каналов,рестоврация зубов, профилактикаДиагностика, лечение кариеса, лечение каналов,рестоврация зубов, профилактика',
                'img' => 'services/serv_1.webp',
                'slug' => 'treatment',
                'template' => null,
                'price' => 'от 8 000 ₽',
                'time' => '1-2 часа',
                'order' => 0,
                'sections' => json_encode([]),
                // 'description' => file_get_contents(public_path('tmp_data/services/surgery.html')),
                'description' => '',
            ],

            [
                'title' => 'Хирургическая стоматология',
                'short_title' => 'Удаление зубов, имплантация, лечение воспалений',
                'img' => 'services/serv_2.webp',
                'slug' => 'surgery',
                'template' => null,
                'price' => 'от 8 000 ₽',
                'time' => '1-2 часа',
                'order' => 0,
                'sections' => json_encode([]),
                // 'description' => file_get_contents(public_path('tmp_data/services/surgery.html')),
                'description' => '',
            ],

            [
                'title' => 'Гигиена и профилактика',
                'short_title' => 'Снятие зубного камня, удаление налета, полировка зубов, вторирование',
                'img' => 'services/serv_3.webp',
                'slug' => 'hygiene',
                'template' => null,
                'price' => 'от 8 000 ₽',
                'time' => '1-2 часа',
                'order' => 0,
                'sections' => json_encode([]),
                // 'description' => file_get_contents(public_path('tmp_data/services/surgery.html')),
                'description' => '',
            ],

            [
                'title' => 'Ортопедическая стоматология',
                'short_title' => 'Микропротезирование, коронки, съемное протезирование, имплантаты',
                'img' => 'services/serv_4.webp',
                'slug' => 'orthopedic',
                'template' => null,
                'price' => 'от 8 000 ₽',
                'time' => '1-2 часа',
                'order' => 0,
                'sections' => json_encode([]),
                // 'description' => file_get_contents(public_path('tmp_data/services/surgery.html')),
                'description' => '',
            ],

        ];

        foreach ($services as $service) {
            $pageId = DB::table('services')->insertGetId($service);

            DB::table('seo_data')->insert(
                [
                    'url' => 'services/'.$service['slug'],
                    'seo_title' => $service['title'],
                    'seo_description' => $service['title'],
                    'seoable_id' => $pageId,
                    'seoable_type' => "App\Models\Service",
                ]
            );
        }
    }
}
