<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewContactForm extends Component
{

    public string $name;
    public string $email;
    public string $phone;
    public string $addressLine1;
    public ?string $addressLine2;
    public string $city;
    public string $postcode;
    public string $county = 'Dorset';
    public bool $marketingOptIn = true;
    public array $contactPreferences = ['email'];
    public function render()
    {
        return view('livewire.new-contact-form');
    }
}
