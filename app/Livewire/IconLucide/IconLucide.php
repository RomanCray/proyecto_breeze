<?php

namespace App\Livewire\IconLucide;

use Livewire\Component;

class IconLucide extends Component
{
    public $width;
    public $height;
    public $color;
    public $svg64;
    public function mount(
        $width = 24,
        $height = 24,
        $color = 'black',
        $svg64 = 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIGNsYXNzPSJsdWNpZGUgbHVjaWRlLXgiPjxwYXRoIGQ9Ik0xOCA2IDYgMTgiLz48cGF0aCBkPSJtNiA2IDEyIDEyIi8+PC9zdmc+'
    ) {
        $this->width = $width;
        $this->height = $height;
        $this->color = $color;

        $arr = explode(';base64,', $svg64);
        $this->svg64 = $arr[1];
    }
    public function render()
    {
        // Decodificar el string base64
        $svgData = base64_decode($this->svg64);

        $svgData = str_replace('<svg', '<svg width="' . $this->width . '" height="' . $this->height . '"stroke="' . $this->color . '"', $svgData);

        // dd($svgData);
        return view('livewire.icon-lucide.icon-lucide', ['svgData' => $svgData,]);
    }
}

