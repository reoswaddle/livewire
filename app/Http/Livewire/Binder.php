<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Binder extends Component
{
    public string $title = "World";
    public bool $loud = false;
    public string $greeting = "Hello";
    public array $foods = ["Apple"];

    public function resetTitle($title = 'world')
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.binder');
    }
}
