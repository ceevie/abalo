<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/app.css">

        <script type="text/javascript" src="js/cookiecheck.js"></script>

    </head>
    <body>
    <?php include ('../resources/views/cookie.php'); ?>

    <div class="container">

        <div class="row" style="margin-top:20px">
            <h1>Abalo</h1>
        </div>
        <div class="row" style="margin-top:20px">
            <div id="nav"></div>
        </div>
        <div class="row" style="margin-top:20px">
            <div id="ajax"></div>
        </div>
        <div class="row" style="top:20px">
                <h5>Deine Plattform um gebrauchte Produkte zu kaufen und verkaufen.</h5>
        </div>
        <div class="row" style="margin-top:20px">
            <div id="artikeleingabe"> </div>
        </div>
        <div class="row" style="margin-top:20px;">
            <h5>Abalo ist eine Plattform bei der Sie ihre gebrauchten Produkte verkaufen können. Alternativ können Sie gebrauchte Produkte kaufen</h5>

        </div>
        <div class="row" style="position:absolute; bottom:10px;">
            Copyright by Toni Kevo, Mona Eden
        </div>
    </div>

    <script>
        "use strict";

        //Aufgabe7- 6 Ajax
        function loadJSON() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "static/message.json");
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let obj = JSON.parse(this.responseText);
                    document.getElementById("ajax").innerHTML = "Ausgabe aus JSON: " + obj['message'];
                }
            };
            xhr.send();
        }
        loadJSON();

        //Navigation
        var navigation = [
            ['Home'],
            ['Kategorien'],
            ['Verkaufen'],
            ['Unternehmen', "Philosophie", "Karriere"],
        ];

        var nav = document.createElement('ul');

        for(let key in navigation) {
            var node = document.createElement("li");

            for (let i= 0; i < navigation[key].length; i++) {
                if(i == 0) {
                    var textnode = document.createTextNode(navigation[key][i]);
                    node.appendChild(textnode);
                }
                else {
                    var nav2 = document.createElement("ul");
                    var node2 = document.createElement("li");
                    var textnode2 = document.createTextNode(navigation[key][i]);
                    node2.appendChild(textnode2);
                    nav2.appendChild(node2);
                    node.appendChild(nav2);
                }
            }
            nav.appendChild(node);
        }
        document.getElementById("nav").appendChild(nav);

        //Artikeleingabe
        var artikeleingabeForm = document.createElement('form');
        artikeleingabeForm.setAttribute('id', 'artikeleingabeForm');
        artikeleingabeForm.setAttribute('action', '/articles');
        artikeleingabeForm.setAttribute('method', 'POST');

        //Inputfeld (+label) für Artikelname
        var inputName = document.createElement('input');
        inputName.innerText = "Name";
        inputName.setAttribute('id','aname');
        inputName.setAttribute('type','text');
        inputName.setAttribute('name', 'aname');
        inputName.setAttribute('required', 'true');
        var labelName = document.createElement('label');
        labelName.setAttribute('for','aname');
        labelName.innerHTML="Artikelname:";

        //Inputfeld (+label) für Preis
        var inputPreis = document.createElement('input');
        inputPreis.setAttribute('id','apreis');
        inputPreis.setAttribute('type','number');
        inputPreis.setAttribute('name', 'apreis');
        inputPreis.setAttribute('step', '0.01');
        inputPreis.setAttribute('required', 'true');
        var labelPreis = document.createElement('label');
        labelPreis.setAttribute('for','apreis');
        labelPreis.innerHTML="Preis:";

        //Inputfeld (+label) für Beschreibung
        var inputDescription = document.createElement('textarea');
        inputDescription.setAttribute('id','adescription');
        inputDescription.setAttribute('required', 'true');
        inputDescription.setAttribute('row','3');
        inputDescription.setAttribute('type','text');
        inputDescription.setAttribute('name', 'adescription');
        var labelDescription = document.createElement('label');
        labelDescription.setAttribute('for','adescription');
        labelDescription.innerHTML="Beschreibung:";

        var btn = document.createElement("button");
        btn.setAttribute('type', 'submit');
        //btn.setAttribute('onClick', 'btnClick()');
        btn.setAttribute('class', 'btn-primary');
        btn.innerHTML = "Senden";

        var fieldset = document.createElement("fieldset");
        var legend = document.createElement("legend");
        legend.innerHTML = "Artikeleingabe ";
        fieldset.appendChild(legend);

        fieldset.appendChild(artikeleingabeForm);

        document.getElementById("artikeleingabe").appendChild(fieldset);

        var test = '@csrf';
        artikeleingabeForm.innerHTML += test;
        artikeleingabeForm.appendChild(labelName);
        artikeleingabeForm.appendChild(inputName);
        artikeleingabeForm.appendChild(labelPreis);
        artikeleingabeForm.appendChild(inputPreis);
        artikeleingabeForm.innerHTML += '<br>';
        artikeleingabeForm.appendChild(labelDescription);
        artikeleingabeForm.appendChild(inputDescription);
        artikeleingabeForm.innerHTML += '<br>';
        artikeleingabeForm.appendChild(btn);

    </script>

    </body>
</html>
