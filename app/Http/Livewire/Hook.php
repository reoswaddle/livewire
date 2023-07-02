<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Hook extends Component
{

    public string $name;
    public string $foo = 'nah';
    public string $bar = 'Apples';

    public function render()
    {
        return view('livewire.hook');
    }

    public function mount(Request $request, $name)
    {
        $this->name = $request->input('name', $name);
    }

    public function hydrate()
    {
        $this->foo = 'Hydrated@';
    }

    public function updatedName()
    {
        $this->bar = strtoupper($this->bar);
    }





}
