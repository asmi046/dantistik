<?php

namespace App\View\Components\Main;

use App\Models\Parametr;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Adv extends Component
{
    public $adv;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->adv = Cache::rememberForever('main_adv', function () {
            return Parametr::where('section', 'Преимущества')->get()->keyBy('str_id');
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.adv');
    }
}
