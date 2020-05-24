<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextInput extends Component
{
    public string $type;
    public string $key;
    public string $label;

    /**
     * Create a new component instance.
     *
     * @param string $key
     * @param string $label
     * @param string $type
     */
    public function __construct($key, $label, $type = 'text')
    {
        $this->type = $type;
        $this->key = $key;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.text-input');
    }
}
