<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Style -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

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
                    <p class="lead">Here, you can add products or articles according to the form below</p>
                </div>
            </div>
        </div>
        <div class="form">
            <form method="POST">
            @csrf
                    
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="enter your article name" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="enter your article description" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="image">Image :</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="enter the exact name of your article image" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="price">Price :</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="enter your article price" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">Add the article</button>
            </form>    
        </div>
    </body>
</html>