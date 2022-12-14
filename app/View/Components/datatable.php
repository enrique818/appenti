<?php

namespace App\View\Components;

use Illuminate\View\Component;

class datatable extends Component
{
    public $dbroute;
    public $id;
    public $name;
    public $multi;
    public $buttons;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $dbroute, string $id = 'datatable', string $name = 'table', $multi = false, $buttons = false)
    {
        $this->id = $id;
        $this->buttons = $buttons;
        $this->dbroute = $dbroute;
        $this->name = $name;
        $this->multi = $multi;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.datatable');
    }
}
