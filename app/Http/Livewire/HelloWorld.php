<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class HelloWorld extends Component
{
    public $contacts;

    protected $listeners = ['foo' => '$refresh'];

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.hello-world');
    }

    public function removeContact($name)
    {
        Contact::whereName($name)->first()->delete();
        $this->contacts = Contact::all();
    }

    public function refreshChildren()
    {
        $this->emit('refreshChildren');
    }
}
