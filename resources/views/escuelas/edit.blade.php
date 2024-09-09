@extends('dashboard')


@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Escuela') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form method="POST" action="{{ route('escuelas.update', $escuela->id)}}" class="formulario-actualizar">
                    @csrf
                    @method('PUT')
                    <div class="mb-5 row">
                        <div class="col-sm">
                            <label for="nombre" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Escuela a q ingresa</label>
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $escuela->nombre ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <label for="horario" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Horario</label>
                            <input type="text" name="horario" id="horario" value="{{ old('horario', $escuela->horario ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            <label for="fecha_inicio" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Fecha de inicio</label>
                            <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio', $escuela->fecha_inicio ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <label for="fecha_fin" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Fecha de terminacion</label>
                            <input type="date" name="fecha_fin" id="fecha_fin" value="{{ old('fecha_fin', $escuela->fecha_fin ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <label for="paga_inscripcion" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Paga inscripcion</label>
                            <input type="text" name="paga_inscripcion" id="paga_inscripcion" value="{{ old('paga_inscripcion', $escuela->paga_inscripcion ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <label for="paga_grado" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Paga D/grado</label>
                            <input type="text" name="paga_grado" id="paga_grado" value="{{ old('paga_grado', $escuela->paga_grado ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <label for="nota_final" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Nota final</label>
                            <input type="text" name="nota_final" id="nota_final" value="{{ old('nota_final', $escuela->nota_final ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <label for="diploma" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Diploma</label>
                            <input type="text" name="diploma" id="diploma" value="{{ old('diploma', $escuela->diploma ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <input type="hidden" name="fiel_id" id="fiel_id" value="{{$escuela->fiel_id}}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-2 mt-3">Guardar Escuela</button>
                            <a href="{{ route('fiels.show', $escuela->fiel_id)}}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800 mb-2">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


@endsection
