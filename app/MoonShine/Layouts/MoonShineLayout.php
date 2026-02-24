<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\ControlOrganizationResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\ParametrResource;
use App\MoonShine\Resources\PriceResource;
use App\MoonShine\Resources\SeoDataResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\SpecialistResource;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;
use MoonShine\UI\Components\Layout\Layout;

final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make('Контент', [
                MenuItem::make('Параметры сайта', ParametrResource::class),
                MenuItem::make('Меню', MenuResource::class),
                MenuItem::make('Цены', PriceResource::class),
                MenuItem::make('Страницы', PageResource::class),
                MenuItem::make('Услуги', ServiceResource::class),
                MenuItem::make('Специалисты', SpecialistResource::class),
            ])->icon('folder-open'),

            MenuGroup::make('Юридическая информация', [
                MenuItem::make('Контрольные организации', ControlOrganizationResource::class),
                // MenuItem::make('Юридические документы', LegalDocumentResource::class),
                MenuItem::make('Контакты', ContactResource::class),

            ])->icon('building-library'),

            MenuItem::make(
                static fn () => __('SEO'),
                SeoDataResource::class,
            )->icon('chart-bar-square'),
            ...parent::menu(),
        ];
    }

    /**
     * @param  ColorManager  $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    public function build(): Layout
    {
        return parent::build();
    }
}
