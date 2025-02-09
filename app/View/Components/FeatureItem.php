<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FeatureItem extends Component
{
    public $icon;
    public $title;
    public $description;
    public $routeName;

    /**
     * Create a new component instance.
     *
     * @param string $icon Path to the icon image
     * @param string $title Title of the feature
     * @param string $description Description of the feature
     * @param string $routeName Route name for the feature link
     * @return void
     */
    public function __construct($icon, $title, $description, $routeName)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->description = $description;
        $this->routeName = $routeName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.feature-item');
    }
}
