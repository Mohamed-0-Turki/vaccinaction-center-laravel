<?php

namespace App\View\Components\Inputs;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $label;
    public string $id;
    public string $type;
    public string $name;
    public string $value;
    public string $placeholder;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $id,
        string $type,
        string $name,
        string $label = '',
        string $value = '',
        string $placeholder = '',
    ) {
        $this->label = $label;
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.inputs.input');
    }
}