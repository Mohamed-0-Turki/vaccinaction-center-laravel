<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InlineFormButton extends Component
{
    public string $action;
    public string $method;
    public string $actualMethod;
    public string $backgroundColor;
    public string $icon;
    /**
     * Create a new component instance.
     */
    public function __construct(
        string $action = '#',
        string $method = 'post',
        string $actualMethod = '',
        string $backgroundColor = '#000000',
        string $icon = ''
    ) {
        $this->action = $action;
        $this->method = $method;
        $this->actualMethod = $actualMethod;
        $this->backgroundColor = $backgroundColor;
        $this->icon = $icon;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons.inline-form-button');
    }
}