<div>

    @foreach($contacts as $contact)
        @livewire('say-hi', ['contact' => $contact], key($contact->name))
        <button wire:click="removeContact('{{$contact->name}}')"> Remove Contact</button>
    @endforeach

    <hr>

    {{ now() }}

        {{--does round trip to update its self--}}
        {{--only emits to the children--}}
        <button wire:click="refreshChildren"> refresh children</button>

        {{--//js just makes single load of requests to refreshChildren method--}}
        <button wire:click="$emit('refreshChildren')"> refresh children only</button>


</div>

