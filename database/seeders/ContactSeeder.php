<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert(
            [
                [
                    'name' => 'site_name',
                    'title' => 'Имя сайта',
                    'value' => 'Стоматологическая клиника «ДАНТИСТиК»',
                ],

                [
                    'name' => 'phone',
                    'title' => 'Телефон',
                    'value' => '+7 (4712)310-810',
                ],

                [
                    'name' => 'tg_lnk',
                    'title' => 'Ссылка  на Телеграм',
                    'value' => '#',
                ],

                [
                    'name' => 'ws_lnk',
                    'title' => 'Ссылка  на WhatsApp',
                    'value' => '#',
                ],

                [
                    'name' => 'adress',
                    'title' => 'Адрес компании',
                    'value' => 'г. Курск, пр-т Вячеслава Клыкова, д. 16',
                ],

                [
                    'name' => 'work_time',
                    'title' => 'Время работы',
                    'value' => 'пн-пт: 8:30- 18:30<br>Сб: 8:30-15:00<br>воскресенье - выходной',
                ],

                [
                    'name' => 'email',
                    'title' => 'E-mail',
                    'value' => 'dantistik46@yandex.ru',
                ],

                [
                    'name' => 'company_name',
                    'title' => 'Имя компании',
                    'value' => 'Общество с ограниченной ответственностью «ДАНТИСТиК»',
                ],

                [
                    'name' => 'inn',
                    'title' => 'ИНН',
                    'value' => '4632084877',
                ],

                [
                    'name' => 'ogrn',
                    'title' => 'ОГРН',
                    'value' => '1074632016359',
                ],

                [
                    'name' => 'geo',
                    'title' => 'Кординаты',
                    'value' => '51.723762, 36.138110',
                ],

            ]
        );
    }
}
