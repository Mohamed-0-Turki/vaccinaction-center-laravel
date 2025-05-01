<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public string $type;
    public string $backgroundColor;
    public string $icon;
    public string $textColor;

    /**
     * Create a new component instance.
     */
    public function __construct(string $type = 'submit', string $backgroundColor = '#000000', string $icon = '', string $textColor = '#ffffff')
    {
        $this->type = $type;
        $this->backgroundColor = $backgroundColor;
        $this->icon = $icon;
        $this->textColor = $textColor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons.action-button');
    }
}