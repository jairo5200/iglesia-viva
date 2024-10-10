@extends('welcome')

@section('contenido')

<div id="fondo_soy_nuevo" class="flex flex-col items-center justify-between px-4 py-20 md:flex-row">
    <div id="formulario_soy_nuevo" class="mx-auto my-3 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8 border-2 border-white">
        <form method="POST" action="{{ route('contactanos')}}" class="formulario-crear" id="formulario-crear">
            @csrf
            @method('POST')
            <div class=" row">
                <div class="container">
                    <h1 class="font-bold text-white text-center text-3xl py-3">Contactanos</h1>
                    <hr class=" text-white pb-2">
                    <p class="text-gray-300">los campos con (*) son obligatorios</p>
                    <label for="nombre" class="block mb-2 text-l font-medium text-white dark:text-black">Nombre *:</label>
                    <input type="text" placeholder="nombre" name="nombre" id="nombre" class=" border-2 border-gray-300 rounded-full text-white text-m rounded-lg  block w-full p-2.5  dark:border-gray-600 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-transparent placeholder-white" required>
                    <label for="apellido" class="block mb-2 text-l font-medium text-white dark:text-black">Apellido *:</label>
                    <input type="text" placeholder="apellido" name="apellido" id="apellido" class=" border-2 border-gray-300 rounded-full text-white text-m rounded-lg  block w-full p-2.5  dark:border-gray-600 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-transparent placeholder-white" required>
                    <label for="numero" class="block mb-2 text-l font-medium text-white dark:text-black">Numero celular *:</label>
                    <input type="text" placeholder="3124567890" name="numero" id="numero" class=" border-2 border-gray-300 rounded-full text-white text-m rounded-lg  block w-full p-2.5  dark:border-gray-600 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-transparent placeholder-white" required>
                    <label for="email" class="block mb-2 text-l font-medium text-white dark:text-black">Correo *:</label>
                    <input type="email" placeholder="* example@mail.com" name="email" id="email" class="border-2 border-gray-300 rounded-full text-white text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-transparent placeholder-white" required>
                    <label for="info" class="block mb-2 text-l font-medium text-white dark:text-black">¿Quieres contarnos algo adicional? (Maximo 200 caracteres):</label>
                    <textarea name="info" id="info" class= "border-2 border-gray-300 text-white text-m rounded-l  block w-full p-2.5  dark:border-gray-600 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-transparent placeholder-white"></textarea>
                    <p class="block mb-2 text-l font-medium text-white dark:text-black">¿Actualmente asistes a otra iglesia?</p>
                    <input type="radio" name="otra_iglesia" value="si">
                    <label for="otra_iglesia" class="mb-2 text-l font-medium text-white dark:text-black">Si</label><br>
                    <input type="radio" name="otra_iglesia" value="no">
                    <label for="otra_iglesia" class=" mb-2 text-l font-medium text-white dark:text-black">No</label><br>
                    <p class="block mb-2 text-l font-medium text-white dark:text-black">¿Deseas que te llamemos para oración??</p>
                    <input type="radio" name="oracion" value="si">
                    <label for="oracion" class=" mb-2 text-l font-medium text-white dark:text-black">Si</label><br>
                    <input type="radio" name="oracion" value="no">
                    <label for="oracion" class=" mb-2 text-l font-medium text-white dark:text-black">No</label><br>
                    <button type="submit" class="text-black bg-white hover:bg-black font-medium rounded-full text-m px-5 py-2.5 text-center w-full mt-2">solicitar informacion</button>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection
