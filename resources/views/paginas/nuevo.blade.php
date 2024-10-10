@extends('welcome')

@section('contenido')

<div id="fondo_soy_nuevo" class="flex flex-col items-center justify-between px-4 py-20 md:flex-row">
    <div id="formulario_soy_nuevo" class="mx-auto my-3 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8 border-2 border-white">
        <form method="POST" action="{{ route('informes.store')}}" class="formulario-crear" id="formulario-crear">
            @csrf
            @method('POST')
            <div class=" row">
                <div class="container">
                    <h1 class="font-bold text-white text-center text-3xl py-3">Datos de asistencia reunion semanal</h1>
                    <hr class=" text-white pb-2">
                    <label for="correo" class="block mb-2 text-l font-medium text-white dark:text-black">Correo:</label>
                    <input type="text" placeholder="example@mail.com" name="correo" id="correo" class="border-2 border-gray-300 rounded-full text-white text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-transparent placeholder-white" required>
                    <label for="nombre" class="block mb-2 text-l font-medium text-white dark:text-black">Nombre:</label>
                    <input type="text" placeholder="nombre" name="nombre" id="nombre" class=" border-2 border-gray-300 rounded-full text-white text-m rounded-lg  block w-full p-2.5  dark:border-gray-600 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-transparent placeholder-white" required>
                    <button type="submit" class="text-black bg-white hover:bg-black font-medium rounded-full text-m px-5 py-2.5 text-center w-full mt-2">solicitar informacion</button>
                </div>
            </div>
        </form>
    </div>
</div>





@endsection
