<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <body>
   
    <div class="container h-100">

    <div class="row justify-content-center h-100">
  
    <div class="col-sm-8 align-self-center text-center">
    <h2>Editar un canal</h3>
    <div class="form-group" >

   
    @if(count($errors) > 0)
        <div>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="get" action="{{action('CanalController@update')}}">
        {{csrf_field()}}
        <label >Nom canal a editar</label>
        <select name="id"> 
            @foreach($idCanal1 as $idC)
                <option value="{{$idC-> id}}">{{$idC-> nomC}}</option>
            @endforeach
        </select>
        <label >Nom canal</label>
        <input type="text" class="form-control" name="nomC" placeholder="Escribe el nombre..." /><br><br>
  
        <button type="submit" class="btn btn-dark">Editar canal</button>

    </form>


    <a href="{{route('home')}}"><button type="button" class="btn btn-dark">Home</button></a>


<div>
   

</div>
</div>
</div>
</div>
</body>