<?php

namespace App\Livewire;

use Livewire\Component;

class PrincipalIcon extends Component
{
    public $width;
    public $height;
    public $color;
    public function mount($width, $height, $color)
    {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;
    }
    public function render()
    {
        return view('livewire.principal-icon');
    }
}
