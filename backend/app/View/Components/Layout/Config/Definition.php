<?php

namespace App\View\Components\Layout\Config;

use Illuminate\View\Component;

class Definition extends Component
{
    public array $layout=[];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->layout = [
            'keyword' => '',
            'description' => '',
            'title' => config('app.name'),
            'favicon' => '',
            'bodyClass' => '',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $layout = $this->layout;

        return view('layout._layout',$layout);
    }
}
