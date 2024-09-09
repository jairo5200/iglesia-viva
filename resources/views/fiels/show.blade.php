@extends('dashboard')


@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $fiel->name }}
        </h2>
    </x-slot>


        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">

                            <div class="mb-5 row">
                                <div class="col-sm">
                                <label  class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Documento de identidad</label>
                                <label  class="block mb-4 text-l font-medium text-gray-800 dark:text-black">{{$fiel->id_documento}}</label>
                                <label  class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Nombre</label>
                                <label  class="block mb-4 text-l font-medium text-gray-800 dark:text-black">{{$fiel->name}}</label>
                                <label  class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Fecha de nacimiento</label>
                                <label  class="block mb-4 text-l font-medium text-gray-800 dark:text-black">{{$fiel->fecha_de_nacimiento}}</label>
                                <label  class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Telefono</label>
                                <label  class="block mb-4 text-l font-medium text-gray-800 dark:text-black">{{$fiel->telefono}}</label>
                                <label  class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Direccion</label>
                                <label  class="block mb-4 text-l font-medium text-gray-800 dark:text-black">{{$fiel->direccion}}</label>
                                <label  class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Fecha de ingreso</label>
                                <label  class="block mb-4 text-l font-medium text-gray-800 dark:text-black">{{$fiel->fecha_de_ingreso}}</label>
                                <label  class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Cargo</label>
                                <label  class="block mb-4 text-l font-medium text-gray-800 dark:text-black">{{$fiel->cargo}}</label>
                                <label  class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Escuela actual</label>
                                <label  class="block mb-4 text-l font-medium text-gray-800 dark:text-black">{{$fiel->escuela_actual}}</label>
                                <label  class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Sede o altar</label>
                                <label  class="block mb-4 text-l font-medium text-gray-800 dark:text-black">{{$fiel->Iglesia->name}}</label>
                                </div>
                                <div class="col-sm">
                                    <div class="grid grid-cols-1 mt-5 mx-7">
                                    <label class="block mb-4 text-xl font-medium text-gray-900 dark:text-black">Imagen</label>
                                        <img src="/imagen/{{$fiel->imagen}}" id="imagenSeleccionada" style="max-height: 400px; max-width: 500px;">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="flex items-center justify-start mt-4" >
                                    <a href="{{route('escuelas.create',['id'=>$fiel->id])}}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-800 dark:hover:bg-slate-700 dark:focus:ring-slate-800">{{ __('Crear Escuela') }}</a>
                                </div>
                                    <div class="mt-3">
                                        <table id="escuelas" class="table-auto w-full table table-striped table-bordered shadow-lg mt-4">
                                            <thead>
                                                <tr class="container ">
                                                    <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Escuela a q ingresa</th>
                                                    <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Horario</th>
                                                    <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Fecha de inicio</th>
                                                    <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Fecha de terminacion</th>
                                                    <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Paga inscripcion</th>
                                                    <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Paga grado</th>
                                                    <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Nota final</th>
                                                    <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Diploma</th>
                                                    <th class="px-4 py-2 text-gray-900 dark:text-black text-center">Opciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $escuelas as $escuela )
                                                <tr>
                                                    <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $escuela->nombre }}</td>
                                                    <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $escuela->horario }}</td>
                                                    <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $escuela->fecha_inicio }}</td>
                                                    <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $escuela->fecha_fin }}</td>
                                                    <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $escuela->paga_inscripcion }}</td>
                                                    <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $escuela->paga_grado }}</td>
                                                    <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $escuela->nota_final }}</td>
                                                    <td class="border px-4 py-2 text-gray-900 dark:text-black text-center">{{ $escuela->diploma }}</td>
                                                    <td class="border px-4 py-2 text-center flex">
                                                        <form method="POST" action="{{route('escuelas.destroy', $escuela->id)}}" class="formulario-eliminar mt-4">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="row">
                                                            <a href="{{route('escuelas.edit',$escuela->id)}}" class="bg-blue-500 dark:bg-blue-700 hover:bg-blue-600 dark:hover:bg-blue-800 uppercase text-white font-bold  py-2.5 px-6 rounded ">Editar</a>
                                                            <button class="inline-block rounded mt-3 bg-danger px-6 pb-2 pt-2.5 text-white text-s font-bold uppercase leading-normal text-white shadow-danger-3 transition duration-150 ease-in-out hover:bg-danger-accent-300 hover:shadow-danger-2 focus:bg-danger-accent-300 focus:shadow-danger-2 focus:outline-none focus:ring-0 active:bg-danger-600 active:shadow-danger-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong rounded-full"
                                                            type="submit" >Eliminar</button></td>
                                                        </div>

                                                        </form>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                <a href="{{route('fiels.index')}}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800 mb-2">Volver</a>

                                </div>


                            </div>

            </div>
        </div>
    </div>


</x-app-layout>


@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    /**
     * Script para previsualizar la imagen a cargar
     */
    $(document).ready(function (e) {
        $('#imagen').change(function(){
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>


<script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        /**
         * Se crea la tabla de datos escuelas
         */
        $('#escuelas').dataTable( {
        "lengthChange": false
        });

    </script>

    <script>
        /**
         * Alerta de confirmacion de eliminación
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

    </script>


@endsection
