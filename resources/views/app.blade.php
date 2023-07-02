<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
@livewireStyles
</head>
<body>
<div>
    @livewire('hook', ['name' => 'Leo'])
</div>
@livewireScripts
</body>
</html>
