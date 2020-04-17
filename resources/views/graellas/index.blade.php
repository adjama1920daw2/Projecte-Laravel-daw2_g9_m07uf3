<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <div class="row justify-content-center h-100">

<div class="col-sm-8 align-self-center text-center">
<div class="form-group" >
<table class="table">
        <thead class="thead-dark">
        
            <tr>
                <th>Codi</th>
                <th>Canal</th>
                <th>Programa</td>
                <th>Dia</th>
                <th>Hora</th>

            </tr>
        </thead>
        <tbody>
        @foreach($graellas as $graella)
        <tr>
        <th>    {{$graella -> id}}</th>
        <th>@foreach($graella->programes as $programa) 
        @foreach ($canals as $canal)
                @if($programa->idC == $canal->id)
                {{$canal->nomC}}
                @endif
        @endforeach
        @endforeach
        </th>
        <th>
        @foreach($graella->programes as $programa) 
            {{$programa->nomP}}
    @endforeach
        </th>
        <th> {{$graella -> diaG}}</th>
        <th> {{$graella -> horaG}}</th>
        </tr>
        @endforeach
        </tbody>
</table>
<a href="{{route('home')}}"><button type="button" class="btn btn-dark">Home</button></a>
</div>

</div>
</div>