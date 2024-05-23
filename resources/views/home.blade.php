<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <h1 class="text-center">Itinerari Treni</h1>
        @foreach ($trains as $train)
        <h2>Azienda: {{ $train->azienda }}</h2>
        <h3>Stazione di partenza: {{ $train->stazione_di_partenza }}</h3>
        <h3>Stazione di arrivo: {{ $train->stazione_di_arrivo }}</h3>
        <div>Orario di partenza: {{ $train->orario_di_partenza }}</div>
        <div>Orario di arrivo: {{ $train->orario_di_arrivo }}</div>
        <div>Codice treno: {{ $train->codice_treno }}</div>
        <div>Numero carrozze: {{ $train->numero_carrozze }}</div>
        <div>{{ $train->in_orario }}</div>
        <div>{{ $train->cancellato }}</div>
        @endforeach
    </div>
</body>

</html>