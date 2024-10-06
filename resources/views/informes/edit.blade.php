@extends('dashboard')


@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Informe') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form method="POST" action="{{ route('informes.update', $informe->id)}}" class="formulario-actualizar" id="formulario-actualizar">
                    @csrf
                    @method('PUT')
                    <div class="mb-5 row">
                        <div class="col-sm">
                        <label for="fecha" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Fecha Reunion</label>
                        <input type="date" name="fecha" id="fecha" value="{{ old('fecha', $informe->fecha ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="ubicacion" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Ubicación</label>
                        <input type="text" name="ubicacion" id="ubicacion" value="{{ old('ubicacion', $informe->ubicacion ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <h1 class="font-bold text-center text-3xl py-3">Datos de asistencia reunion semanal</h1>
                        <hr class="pb-3">
                        <label for="total_adultos" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Adultos</label>
                        <input type="text" name="total_adultos" id="total_adultos" value="{{ old('total_adultos', $informe->total_adultos ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="adultos_nuevos" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Nuevos adultos</label>
                        <input type="text" name="adultos_nuevos" id="adultos_nuevos" value="{{ old('adultos_nuevos', $informe->adultos_nuevos ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="adultos_asistentes" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Asistieron a la iglesia</label>
                        <input type="text" name="adultos_asistentes" id="adultos_asistentes" value="{{ old('adultos_asistentes', $informe->adultos_asistentes ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="discipulos" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Discipulos</label>
                        <input type="text" name="discipulos" id="discipulos" value="{{ old('discipulos', $informe->discipulos ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="escuelas" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Escuelas</label>
                        <input type="text" name="escuelas" id="escuelas" value="{{ old('escuelas', $informe->escuelas ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="visitas" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Visitas</label>
                        <input type="text" name="visitas" id="visitas" value="{{ old('visitas', $informe->visitas ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="total_ninos" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Niños</label>
                        <input type="text" name="total_ninos" id="total_ninos" value="{{ old('total_ninos', $informe->total_ninos ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="ninos_nuevos" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Niños nuevos</label>
                        <input type="text" name="ninos_nuevos" id="ninos_nuevos" value="{{ old('ninos_nuevos', $informe->ninos_nuevos ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="hermanos_planeando" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Hermanos planeando</label>
                        <input type="text" name="hermanos_planeando" id="hermanos_planeando" value="{{ old('hermanos_planeando', $informe->hermanos_planeando ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="ofrenda" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Valor ofrenda semanal</label>
                        <input type="text" name="ofrenda" id="ofrenda" value="{{ old('ofrenda', $informe->ofrenda ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="actividad" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Actividad especial de esta semana</label>
                        <input type="text" name="actividad" id="actividad" value="{{ old('actividad', $informe->actividad ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        <label for="actividad_proyectada" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Actividad que proyectan</label>
                        <input type="text" name="actividad_proyectada" id="actividad_proyectada" value="{{ old('actividad_proyectada', $informe->actividad_proyectada ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        <label for="fecha_actividad_proyectada" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Fecha de la actividad</label>
                        <input type="text" name="fecha_actividad_proyectada" id="fecha_actividad_proyectada" value="{{ old('fecha_actividad_proyectada', $informe->fecha_actividad_proyectada ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        <label for="solicitud" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Solicitud al area de Altares</label>
                        <input type="text" name="solicitud" id="solicitud" value="{{ old('solicitud', $informe->solicitud ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </div>
                    </div>
                        <div class="col mt-4">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-2">Guardar</button>
                            <a href="{{ route('informes.index')}}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800 mb-2">Cancelar</a>
                        </div>
                </form>
            </div>

        </div>
    </div>
</div>


</x-app-layout>


@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="{{ asset('js\tinymce\tinymce.min.js') }}" referrerpolicy="origin"></script>

<script>



</script>


@endsection
