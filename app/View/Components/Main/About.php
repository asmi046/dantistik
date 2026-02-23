<?php

namespace App\View\Components\Main;

use App\Models\Parametr;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class About extends Component
{
    public $about;

    public $numbers;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->about = Cache::rememberForever('main_about', function () {
            return Parametr::where('section', 'О клинике')->get()->keyBy('str_id');
        });

        $this->numbers = Cache::rememberForever('main_numbers', function () {
            return Parametr::where('section', 'Цифры')->get()->keyBy('str_id');
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.about');
    }
}
