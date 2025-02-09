<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HighlightItem extends Component
{
    public $icon;
    public $title;
    public $description;

    /**
     * Create a new component instance.
     *
     * @param string $icon Path to the icon image
     * @param string $title Title of the highlight
     * @param string $description Description of the highlight
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
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.highlight-item');
    }
}
