@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Opcions</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('canalCreate')}}"> <button type="button" class="btn btn-outline-dark">Crear canal</button></a>
                    <a href="{{route('programaCreate')}}"><button type="button" class="btn btn-outline-dark">Crear programa</button></a>
                    <a href="{{route('graellaCreate')}}"><button type="button" class="btn btn-outline-dark">Crear graella</button></a>
                    <a href="{{route('canalEdit')}}"><button type="button" class="btn btn-outline-dark">Editar canal</button></a> 
                    <a href="{{route('graellaI')}}"><button type="button" class="btn btn-outline-dark">Veure graella</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
