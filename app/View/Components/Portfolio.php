<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Portfolio extends Component
{
   public $heading;
   public $items;

    /**
     * Portfolio constructor.
     * @param $heading
     * @param $items
     */
    public function __construct($heading = null, $items = [])
    {
        $this->heading = "نمونه کارها";
        $this->items = $items;
    }


    public function render()
    {
        return view('components.portfolio');
    }
}
