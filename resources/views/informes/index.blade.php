@extends('dashboard')


@section('css')
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informes') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="flex items-center justify-start mt-4" >
            <a href="{{ route('informes.create') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-800 dark:hover:bg-slate-700 dark:focus:ring-slate-800">{{ __('Crear informe') }}</a>
        </div>

        @if (auth()->user()->rol == 'admin')
        <div class="mt-10">
            <table id="informes" class="table-auto w-full table table-striped table-bordered shadow-lg mt-4">
                <thead>
                    <tr class="container ">
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Fecha</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Ubicacion</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Lider</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Total adultos</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Total niños</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">solicitud</th>
                        <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $informes as $informe )
                        <tr>
                            <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ date('d/m/Y',strtotime("$informe->fecha")) }}</td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $informe->ubicacion }}</td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $informe->user->name }}</td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $informe->total_adultos }}</td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $informe->total_ninos }}</td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $informe->solicitud }}</td>
                            <td class="border px-4 py-2 text-center">
                                <form method="POST" action="{{ route('informes.destroy', $informe->id) }}" class="formulario-eliminar">
                                @csrf
                                @method('DELETE')
                                    <div class="mx-auto inline-block">
                                        <a href="{{ route('informes.show', $informe->id) }}" class="bg-green-500 dark:bg-green-700 hover:bg-green-600 dark:hover:bg-green-800 uppercase text-white font-bold  py-2.5 px-6 rounded my-5 ">Ver</a>
                                        <a href="{{ route('informes.edit', $informe->id) }}" class="bg-blue-500 dark:bg-blue-700 hover:bg-blue-600 dark:hover:bg-blue-800 uppercase text-white font-bold  py-2.5 px-6 rounded mr-2 my-5 ">Editar</a>
                                        <button class="inline-block rounded mt-3 bg-danger px-6 pb-2 pt-2.5 text-white text-s font-bold uppercase leading-normal text-white shadow-danger-3 transition duration-150 ease-in-out hover:bg-danger-accent-300 hover:shadow-danger-2 focus:bg-danger-accent-300 focus:shadow-danger-2 focus:outline-none focus:ring-0 active:bg-danger-600 active:shadow-danger-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong rounded-full"
                                        type="submit" >Eliminar</button></td>
                                    </div>
                                </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        @endif
</x-app-layout>


@endsection

@section('js')

    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        /**
         * se crea la tabla de datos informes
         */
        new DataTable('#informes');
    </script>

    <script>
        /**
         * alerta de confirmacion de eliminación
         */
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault()

            Swal.fire({
            title: "Esta seguro?",
            text: "Esta accion no se podra revertir!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, eliminalo",
            cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });


        // Verifica si hay un mensaje de éxito
        if (window.Laravel.flash.success) {
        // Muestra la alerta con SweetAlert
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: window.Laravel.flash.success,
            });
        }

    </script>

@endsection
