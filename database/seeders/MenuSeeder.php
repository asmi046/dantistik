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
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Услуги',
                'order' => 1,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Цены',
                'order' => 1,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 1,
                'lnk' => '#',
            ],
        ];

        DB::table('menus')->insert($data);

        // $footer_menu = [
        //     [
        //         'menu_name' => 'Меню в подвале',
        //         'title' => 'О компании',
        //         'order' => 1,
        //         'lnk' => "#",
        //     ],
        //     [
        //         'menu_name' => 'Меню в подвале',
        //         'title' => 'Цены',
        //         'order' => 2,
        //         'lnk' => "/price",
        //     ],
        //     [
        //         'menu_name' => 'Меню в подвале',
        //         'title' => 'Сваи',
        //         'order' => 3,
        //         'lnk' => "'/products",
        //     ],
        //     [
        //         'menu_name' => 'Меню в подвале',
        //         'title' => 'Галерея',
        //         'order' => 4,
        //         'lnk' => "#",
        //     ],
        //     [
        //         'menu_name' => 'Меню в подвале',
        //         'title' => 'FAQ',
        //         'order' => 7,
        //         'lnk' => "/faq",
        //     ],
        // ];

        // DB::table("menus")->insert($footer_menu);

        // $footer_menu_2 = [

        //     [
        //         'menu_name' => 'Полезная информация',
        //         'title' => 'Акции',
        //         'order' => 5,
        //         'lnk' => "/sales",
        //     ],
        //     [
        //         'menu_name' => 'Полезная информация',
        //         'title' => 'Отзывы',
        //         'order' => 6,
        //         'lnk' => "/review",
        //     ],
        //     [
        //         'menu_name' => 'Полезная информация',
        //         'title' => 'Оплата и доставка',
        //         'order' => 8,
        //         'lnk' => "#",
        //     ],
        //     [
        //         'menu_name' => 'Полезная информация',
        //         'title' => 'Сертификаты',
        //         'order' => 9,
        //         'lnk' => "/certificat",
        //     ],
        //     [
        //         'menu_name' => 'Полезная информация',
        //         'title' => 'Контакты',
        //         'order' => 10,
        //         'lnk' => "/contacts",
        //     ],
        // ];

        // DB::table("menus")->insert($footer_menu_2);
    }
}
