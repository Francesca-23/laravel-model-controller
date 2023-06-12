<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-body-tertiary">

    <h1 class="text-center py-4">Movies</h1>

    <div class="container w-75 bg-body-secondary py-4 px-5 rounded-3">
        <div class="row gap-4 justify-content-between">
            @foreach($movies as $elem)
                <div class="card shadow" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$elem['title']}}</h5>
                        <h6 class="card-subtitle mb-4 text-body-secondary">{{$elem['original_title']}}</h6>
                        <p class="card-text mb-2">Nationality: {{$elem['nationality']}}</p>
                        <p class="card-text mb-2">Date: {{$elem['date']}}</p>
                        <p class="card-text mb-2">Vote: {{$elem['vote']}}</p>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
    
</body>
</html>