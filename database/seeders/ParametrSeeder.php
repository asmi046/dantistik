<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ParametrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Storage::disk('public')->put('adv/adv_1.svg', file_get_contents(public_path('tmp_data/adv/adv_1.svg')), 'public');
        Storage::disk('public')->put('adv/adv_2.svg', file_get_contents(public_path('tmp_data/adv/adv_2.svg')), 'public');
        Storage::disk('public')->put('adv/adv_3.svg', file_get_contents(public_path('tmp_data/adv/adv_3.svg')), 'public');

        // Storage::disk('public')->put("parametr/adv_1.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_1.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_2.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_2.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_3.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_3.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_4.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_4.svg')), 'public');
        // Storage::disk('public')->put("parametr/adv_5.svg", file_get_contents(public_path('tmp_data/adv_icon/adv_5.svg')), 'public');

        // Storage::disk('public')->put("parametr/pay_1.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_1.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_2.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_2.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_3.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_3.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_4.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_4.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_5.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_5.svg')), 'public');
        // Storage::disk('public')->put("parametr/pay_6.svg", file_get_contents(public_path('tmp_data/pay_icon/pay_6.svg')), 'public');

        $data = [
            [
                'str_id' => 'main_1',
                'section' => 'Главный баннер',
                'title' => 'Современная <strong>стоматология в Курске</strong>',
                'value' => 'Новейшее оборудование, передовые технологии, опытные врачи.',
                'img' => null,
            ],
            [
                'str_id' => 'main_2',
                'section' => 'О клинике',
                'title' => 'Стоматологическая клиника<br/><strong>ДАНТИСТиК</strong>',
                'value' => file_get_contents(public_path('tmp_data/about.html')),
                'img' => null,
            ],
            [
                'str_id' => 'main_3',
                'section' => 'Цифры',
                'title' => '15+',
                'value' => 'Лет дарим здоровую улыбку нашим пациентам',
                'img' => null,
            ],
            [
                'str_id' => 'main_4',
                'section' => 'Цифры',
                'title' => '3578',
                'value' => 'Давольных пациентов за время работы клиники',
                'img' => null,
            ],
            [
                'str_id' => 'main_5',
                'section' => 'Цифры',
                'title' => '95',
                'value' => 'Дипломов и сертификатов у наших специалистов',
                'img' => null,
            ],

            [
                'str_id' => 'main_6',
                'section' => 'Преимущества',
                'title' => 'Индивидуальный подход',
                'value' => 'Составляем план лечение с учетом ваших пожеланий и особенностей здоровья.',
                'img' => 'adv/adv_1.svg',
            ],

            [
                'str_id' => 'main_7',
                'section' => 'Преимущества',
                'title' => 'Опытные специалисты',
                'value' => 'Наши команда – квалифицированные врачи, которые постоянно совершенствуют свои навыки и применяют современные протоколы лечения.',
                'img' => 'adv/adv_2.svg',
            ],

            [
                'str_id' => 'main_8',
                'section' => 'Преимущества',
                'title' => 'Комфорт и безопасность',
                'value' => 'ютная атмосфера, продуманный интерьер и доброжелательный персонал. Мы соблюдаем все санитарные нормы и стандарты, используем одноразовые материалы, а инструменты проходят тщательную многоступенчатую обработку.',
                'img' => 'adv/adv_3.svg',
            ],

        ];

        DB::table('parametrs')->insert($data);

    }
}
