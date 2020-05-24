<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectInput extends Component
{
    public string $key;
    public string $label;
    public array $options;

    /**
     * Create a new component instance.
     *
     * @param string $key
     * @param string $label
     * @param string $type
     */
    public function __construct($key, $label, $options)
    {
        $this->key = $key;
        $this->label = $label;
        $this->options = $options;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.select-input');
    }
}
