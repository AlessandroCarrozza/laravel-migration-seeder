<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1 class="text-center p-4">Treni in partenza</h1>
    @foreach($trains as $train)
    <div class="container text-center">
        La compagnia {{$train->company}} offre la corsa: {{$train->departure_station}} - {{$train->arrival_station}}
    </div>
    @endforeach
</body>
</html>
