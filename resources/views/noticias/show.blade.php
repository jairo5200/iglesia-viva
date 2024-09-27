@extends('dashboard')


@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $noticia->titulo }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="mb-5 row">
                    <div class="col-sm">
                        <label  class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Activa</label>
                        <label  class="block mb-4 text-l font-medium text-gray-800 dark:text-black">{{ ($noticia->activo == 1) ? "Si" : "no" }}</label>
                        <div class="col-sm">
                            <div class="grid grid-cols-1 mt-5">
                            <label class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Imagen</label>
                                <img src="/imagen/{{$noticia->imagen}}" id="imagenSeleccionada" style="max-height: 400px; max-width: 500px;">
                            </div>
                        </div>
                        <label  class="block mb-4 text-xl font-medium text-gray-900 dark:text-black mt-5">descripcion</label>
                        <label  class="block mb-4 text-l font-medium text-gray-800 dark:text-black">{!! $noticia->descripcion !!}</label>
                        <a href="{{route('noticias.index')}}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800 mb-2">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>


@endsection

@section('js')



@endsection
