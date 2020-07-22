<?php

namespace App\View\Components;

use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\Boolean;

class Field extends Component
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $help;
    /**
     * @var string
     */
    private $label;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, string $type = 'text', string $help = null, string $label = null, string $value=null)
    {
        //
        $this->name = $name;
        $this->type = $type;
        $this->help = $help;
        $this->label = $label;
        $this->value = $value;
    }

    public function label(){
        if ($this->label != null){
            return $this->label;
        }
        return null;
    }

    public function placeholder(){
        return ucfirst(str_replace('_', ' ', $this->name));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.field');
    }
}
