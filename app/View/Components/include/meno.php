<?php

namespace App\View\Components\include;

use Illuminate\View\Component;

class meno extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $link1;
    public $about;
    public $contactUs;

    public function __construct($link1, $about ,$contactUs)
    {
        //
        $this->link1=$link1;
        $this->about=$about;
        $this->contactUs=$contactUs;


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.include.meno');
    }
}
