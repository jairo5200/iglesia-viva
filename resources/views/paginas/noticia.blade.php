@extends('welcome')

@section('contenido')


<div class="flex flex-col items-center justify-center px-4 py-12 mx-auto max-w-7xl md:flex-row bg-white">
    <div class="container">
        <h1 class="text-4xl font-bold text-gray-600 text-center pb-4">{{$noticia->titulo}}</h1>

     {!!$noticia->descripcion!!}
    </div>

</div>

@endsection
