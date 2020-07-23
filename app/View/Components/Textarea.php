<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $rows;
    public $help;
    public $id;
    private $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name = null, string $rows = null, string $help = null, string $id, string $label = null )
    {
        //
        $this->name = $name;
        $this->rows = $rows;
        $this->help = $help;
        $this->id = $id;
        $this->label = $label;
    }

    public function label(){
        if ($this->label != null){
            return $this->label;
        }
        return null;
    }

    public function placeholder(){
        return ucfirst(str_replace('_', ' ', $this->id));
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.textarea');
    }
}
