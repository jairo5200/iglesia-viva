@extends('dashboard')


@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Municipio') }}
        </h2>
    </x-slot>

        @if (auth()->user()->rol == 'admin')



        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">



                        <form method="POST" action="{{ route('municipios.update', $municipio->id)}}" class="formulario-actualizar max-w-sm mx-auto">
                            @csrf
                            @method('PUT')
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Nombre</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $municipio->name ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <label for="pais_id" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">País</label>
                                <select id="pais_id" class="bg-white-50 border border-gray-300 text-black text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  name="pais_id" onchange="loadDepartamentos(this)">
                                    <option >Selecciona un país</option>
                                    @foreach ($paises as $pais)
                                    <option value="{{$pais->id}}"> {{ $pais->name }} </option>
                                    @endforeach
                                </select>
                                <label for="departamento_id" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Departamento</label>
                                <select id="departamento_id" class="bg-white-50 border border-gray-300 text-black text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="departamento_id">
                                    <option>Selecciona un Departamento</option>
                                </select>
                            </div>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-2">Guardar</button>
                            <a href="{{ route('municipios.index')}}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800 mb-2">Cancelar</a>
                        </form>

            </div>
        </div>
    </div>


        @endif

</x-app-layout>


@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    function loadDepartamentos(paisSelect){
        let departamentoSelect = document.getElementById('departamento_id');
        clearSelect(departamentoSelect);
        let paisId = paisSelect.value;
        fetch(`/paises/${paisId}/departamentos`)
            .then(function(response){
                return response.json();
            })
            .then(function (jsonData) {
                buildDepartamentos(jsonData);
            })

    }

    function buildDepartamentos(jsonData) {
        let departamentoSelect = document.getElementById('departamento_id');
        clearSelect(departamentoSelect);
        jsonData.forEach(function(departamento){
            let optionTag = document.createElement('option');
            optionTag.value = departamento.id;
            optionTag.innerHTML = departamento.name;
            departamentoSelect.append(optionTag);
        });
    }


    function clearSelect(select){
        while (select.options.length >1) {
            select.remove(1);
        }
    }

    $('.formulario-actualizar').submit(function(e){
            e.preventDefault()
            let selectPais = document.getElementById('pais_id');
            let selectDepartamento = document.getElementById('departamento_id');
            if (selectPais.value == 'Selecciona un País' || selectDepartamento.value == 'Selecciona un Departamento') {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Por favor ingresa un País y Departamento valido",
                });
            }
            else{
                this.submit();
            }
    });


</script>


@endsection
