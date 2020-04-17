  
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      

       <!-- Styles -->

    </head>
<form method="GET" action="{{route('canalStore')}}">
<div class="container h-100">

<div class="row justify-content-center h-100">

<div class="col-sm-8 align-self-center text-center">
<div class="form-group" >

    <label >Nom canal</label>
    <input type="text" name="nomC" class="form-control"></input>

  </div>
 

  <button type="submit" class="btn btn-dark">Crear canal</button>
  <a href="{{route('home')}}"><button type="button" class="btn btn-dark">Home</button></a>

  </div>  </div>  </div>

</form>