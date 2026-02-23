<?php

namespace App\View\Components\Main;

use App\Models\Service as ServiceModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Services extends Component
{
    public $services;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->services = Cache::rememberForever('main_services', function () {
            return ServiceModel::select()->orderBy('order')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.services');
    }
}
