<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_name' => 'Главное меню',
                'title' => 'Специалисты',
                'order' => 1,
                'lnk' => '/specialists',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Услуги',
                'order' => 1,
                'lnk' => '/services',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Цены',
                'order' => 1,
                'lnk' => '/prices',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 1,
                'lnk' => '/contacts',
            ],
        ];

        DB::table('menus')->insert($data);

        $footer_menu = [
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Специалисты',
                'order' => 1,
                'lnk' => '/specialists',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Услуги',
                'order' => 1,
                'lnk' => '/services',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Цены',
                'order' => 1,
                'lnk' => '/prices',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Контролирующие организации',
                'order' => 1,
                'lnk' => '/control_organization',
            ],
            [
                'menu_name' => 'Меню в подвале',
                'title' => 'Контакты',
                'order' => 1,
                'lnk' => '/contacts',
            ],
        ];

        DB::table('menus')->insert($footer_menu);

        $footer_menu_2 = [

            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Терапефтическая стоматология',
                'order' => 1,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Хирургическая стоматология',
                'order' => 2,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Гигиена и профилактика',
                'order' => 3,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Услуги в подвале',
                'title' => 'Ортопедическая стоматология',
                'order' => 4,
                'lnk' => '#',
            ],

        ];

        DB::table('menus')->insert($footer_menu_2);
    }
}
