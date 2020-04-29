<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/app.css">


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col p-3">
            @if(isset($_SERVER['QUERY_STRING']))

                <h1>Alle Artikel mit dem Suchbegriff: {{$_SERVER['QUERY_STRING']}} </h1>
            @else
                <h1>Alle Artikel:</h1>
            @endif
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col d-inline-flex flex-wrap">
            @foreach($articles as $article)
                <div class="article p-3 flex-fill d-flex flex-column align-items-center">
                    @if(\Illuminate\Support\Facades\Storage::disk('local')->exists("/public/{$article->id}.jpg"))
                        <div class="article_picture" style="height:200px;width:200px;background:url({{\Illuminate\Support\Facades\Storage::url("public/{$article->id}.jpg")}}); background-position:center;background-size:cover;"></div>

                    @elseif(\Illuminate\Support\Facades\Storage::disk('local')->exists("/public/{$article->id}.png"))
                        <div class="article_picture" style="height:200px;width:200px;background:url({{\Illuminate\Support\Facades\Storage::url("public/{$article->id}.png")}}); background-position:center;background-size:cover;"></div>
                    @endif
                    <div class="article_name">{{$article->ab_name}}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>
