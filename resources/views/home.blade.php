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
    <h1>Itinerari Treni</h1>
    @foreach ($trains as $train)

        <h2>{{ $train->azienda }}</h2>
        <h3>{{ $train->stazione_di_partenza }}</h3>
        <h3>{{ $train->staizone_di_arrivo }}</h3>
        <div>{{ $train->orario_di_partenza }}</div>
        <div>{{ $train->orario_di_arrivo }}</div>
        <div>{{ $train->codice_treno }}</div>
        <div>{{ $train->numero_carrozze }}</div>
        <div>{{ $train->in_orario }}</div>
        <div>{{ $train->cancellato }}</div>
    @endforeach
</body>

</html>