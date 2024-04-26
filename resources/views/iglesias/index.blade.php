@extends('dashboard')


@section('css')
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Iglesias') }}
        </h2>
    </x-slot>

        @if (auth()->user()->rol == 'admin')

        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

        <div class="flex items-center justify-start mt-4" >
        <a href="{{ route('iglesias.create') }}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-800 dark:hover:bg-slate-700 dark:focus:ring-slate-800">{{ __('Crear Iglesia') }}</a>
        </div>


            <div class="mt-10">
                <table id="iglesias" class="table-auto w-full table table-striped table-bordered shadow-lg mt-4">
                    <thead>
                        <tr class="container ">
                            <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Nombre</th>
                            <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Municipio</th>
                            <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $iglesias as $iglesia )

                        <tr>
                            <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $iglesia->name }}</td>
                            <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $iglesia->municipio->name }}</td>
                            <td class="border px-4 py-2 text-center">
                                <form method="POST" action="{{ route('iglesias.destroy', $iglesia->id) }}" class="formulario-eliminar">
                                @csrf
                                @method('DELETE')
                                    <a href="{{ route('iglesias.edit', $iglesia->id) }}" class="bg-blue-500 dark:bg-blue-700 hover:bg-blue-600 dark:hover:bg-blue-800 uppercase text-white font-bold  py-2.5 px-6 rounded mr-2 ">Editar</a>
                                    <button class="inline-block rounded mt-3 bg-danger px-6 pb-2 pt-2.5 text-white text-s font-bold uppercase leading-normal text-white shadow-danger-3 transition duration-150 ease-in-out hover:bg-danger-accent-300 hover:shadow-danger-2 focus:bg-danger-accent-300 focus:shadow-danger-2 focus:outline-none focus:ring-0 active:bg-danger-600 active:shadow-danger-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong rounded-full"
                                    type="submit" >Eliminar</button></td>
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
        new DataTable('#iglesias');
    </script>

    <script>

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

    </script>

@endsection
