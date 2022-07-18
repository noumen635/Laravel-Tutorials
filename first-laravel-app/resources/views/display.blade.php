<!doctype html>
<html lang="EN">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laravel</title>
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/display.css')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <!-- W3 -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

 <body>
        <div class="scene">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Welcome to the admin space</h1>
                    <p class="lead">Here, you can have a detailed overview of the article you chose</p>
                </div>
            </div>
        </div>
        <main>
            <div class="content">
                <div class="card mb-3">
                    <img class="card-img-top" src="/images/{{$article->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->name}}</h5>
                        <p class="card-text">{{$article->description}}</p>
                        <p class="card-text"><small class="text-muted">${{$article->price}}</small></p>
                    </div>
            </div>
        </main>
 </body>

</html>