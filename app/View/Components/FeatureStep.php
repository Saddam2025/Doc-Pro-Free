<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeatureStep extends Component
{
    public $icon;
    public $title;
    public $description;

    /**
     * Create a new component instance.
     *
     * @param  string  $icon
     * @param  string  $title
     * @param  string  $description
     * @return void
     */
    public function __construct($icon, $title, $description)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.feature-step');
    }
}
