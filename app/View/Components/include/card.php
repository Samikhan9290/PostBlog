<?php

namespace App\View\Components\include;

use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     
     */
    public $name;
    public $subTitle;
    public $description;

    // public $title;
    // public $name;
    public function __construct($name,$subTitle,$description)
    {
        $this->name = $name;
        $this->subTitle = $subTitle;
        $this->description = $description;


        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.include.card');
    }
    public function addNumber($a,$b){
        return $a+$b;
    }
}
