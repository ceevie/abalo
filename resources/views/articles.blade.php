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
    <div class="row" style="margin-top:20px">
        <div class="col-sm-8">
        </div>
        <div class="col-sm-4">
            <h4>Warenkorb: </h4>
            <div id="addArtikel"></div>
        </div>
    </div>

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
                    <div class="article_name">{{$article->ab_name}} <span class="btn-primary" style="cursor: pointer;" onclick="addWarenkorb('{{$article->id}}', '{{$article->ab_name}}')">&nbsp; + &nbsp; </span></div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    function addWarenkorb(id, name) {
        let warenkorb = document.getElementById("addArtikel").innerHTML;

        if ((warenkorb.indexOf(name)) != -1) {
            alert("schon im Warenkorb vorhanden");
        } else {
            var artikel = document.createElement('p');
            artikel.setAttribute('id', id);
            artikel.innerHTML = name + "&nbsp;";
            var btndelete = document.createElement('span');
            btndelete.setAttribute('class', "btn-primary");
            btndelete.setAttribute('style', "cursor: pointer");
            btndelete.setAttribute('onclick', "deleteWarenkorb(" + id + ")");
            btndelete.innerHTML = "&nbsp; - &nbsp;";

            artikel.appendChild(btndelete);

            document.getElementById("addArtikel").appendChild(artikel);

        }
    }

    function deleteWarenkorb(id) {
        let remove = document.getElementById(id);
        document.getElementById("addArtikel").removeChild(remove);
    }

</script>
</body>
</html>
