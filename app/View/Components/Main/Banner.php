<?php

namespace App\View\Components\Main;

use App\Models\Parametr;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Banner extends Component
{
    public $banners;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->banners = Cache::rememberForever('main_cta', function () {
            return Parametr::where('section', 'Главный баннер')->get()->keyBy('str_id');
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.banner');
    }
}
