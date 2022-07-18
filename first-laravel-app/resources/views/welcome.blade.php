<!doctype html>
<html lang="EN">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laravel</title>
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- W3 -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 </head>

    <body>
        <div class="scene">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Welcome to our root page</h1>
                    <p class="lead">Below, the products currently available</p>
                    <a href="/add">Add Article</a>
                </div>
            </div>
        </div>
        <main>
            <div class="content">
                @foreach($articles as $article)
                <div class="card" style="width: 25rem; border: 2px solid #222831;">
                    <img class="card-img-top" src="/images/{{$article->image}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->name}}</h5>
                        <p class="card-text">{{$article->description}}</p>
                        <p class="card-text"><small class="text-muted">${{$article->price}}</small></p>
                        <nav>
                            <a href="/display/{{$article->id}}" id="active">Display </a> |
                            <a href="/modify/{{$article->id}}" id="active">Modify </a> |
                            <a href="/delete/{{$article->id}}">Delete </a>
                        </nav>
                    </div>
                </div> 
                @endforeach 
            </div>
        </main>

        <footer>
            <div class="w3-container w3-center" style="padding: 1rem 1rem;">
                <h1>Laravel Application Tutorial</h1>
                <p>Copyright &copy; 2022 - Laravel</p>
                <p class="legal-mentions"><a href="">General terms and conditions of use</a> | <a href="">Confidentiality policy</a> | <a href="">Legal notices</a></p>
            </div>
        </footer>
    </body>
    
</html>