<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
              
            }
            

           
        </style>
    </head>
    <body>
        <div class="col-6"  >
            @if (Route::has('login'))
                <div >
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"> <button type="button" class="btn btn-dark"> Login </button></a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"><button type="button" class="btn btn-light"> Register </button></a>
                        @endif
                    @endauth
                </div>
            @endif
</div>
<div id = "titol" class="d-flex justify-content-center">
<h1>Digital++</h1>
</div>
          
    </body>
</html>
