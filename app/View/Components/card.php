<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    public $img;
    public $alt;
    public $titulo;
    public $descripcion;

    /**
     * Create a new component instance.
     */
    public function __construct($img, $alt = '', $titulo, $descripcion)
    {
        //
        $this->img = $img;
        $this->alt = $alt;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
