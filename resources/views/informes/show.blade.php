@extends('dashboard')


@section('css')

@endsection

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $informe->user->name }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
            <table id="informe" class="table-auto w-full table table-striped table-bordered shadow-lg mt-4">
                <thead>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Fecha</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ date('d/m/Y',strtotime("$informe->fecha")) }}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Ubicacion:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->ubicacion}}</td>
                    </tr>
                    <tr class="container" >
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center text-xl" colspan="2">Datos de asistencia reunion semanal</th>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Adultos:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->total_adultos}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Nuevos adultos:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->adultos_nuevos}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Asistieron a la iglesia:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->adultos_asistentes}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Discipulos:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->discipulos}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Escuelas:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->escuelas}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Visitas:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->visitas}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Niños:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->total_ninos}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Niños nuevos:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->ninos_nuevos}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Hermanos planeando:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->hermanos_planeando}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Ofrenda:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">$ {{$informe->ofrenda}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Actividad esspecial de la semana:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->actividad}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Actividad que proyectan:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->actividad_proyectada}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Fecha de la actividad proyectada:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->fecha_actividad_proyectada}}</td>
                    </tr>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Solicitud al area de altares:</th>
                        <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{$informe->solicitud}}</td>
                    </tr>
                </thead>
            </table>
            <div>
            <a href="{{route('informes.index')}}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800 my-2">Volver</a>
            </div>
        </div>

    </div>
</div>
</x-app-layout>

@endsection

@section('js')

@endsection
