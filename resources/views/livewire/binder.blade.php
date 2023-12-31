<div>

    <select wire:model="greeting">
        <option> Hello </option>
        <option> Howdy </option>
        <option> Morning </option>
    </select>

    <input wire:model="title" type="text"/>

    <input wire:model="loud" type="checkbox">

    <select wire:model="foods" multiple>
        <option> Eggs </option>
        <option> Bacon </option>
        <option> Apple </option>
        <option> Toast </option>
        <option> Pie </option>
    </select>

    <h1> {{ $greeting }} {{$title}} @if($loud) ! @endif</h1>
    <p>
        My favourite foods are: {{ implode(', ', $foods) }}
    </p>

    <form action="#" wire:submit.prevent="resetTitle($event.target.innerText)">
        <button> Pluto </button>
    </form>
    <br>
    <button wire:click="$set('greeting', 'Howdy')"> Reset greeting shortcut example </button>

</div>
