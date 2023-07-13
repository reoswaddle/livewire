<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class SayHi extends Component
{
    public $contact;

    public function render()
    {
        return view('livewire.say-hi');
    }

    //same as construct but not
    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }
}
