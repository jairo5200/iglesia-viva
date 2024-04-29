@extends('dashboard')


@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Iglesia') }}
        </h2>
    </x-slot>

        @if (auth()->user()->rol == 'admin')



        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">



                        <form method="POST" action="{{ route('iglesias.update', $iglesia->id)}}" class="formulario-actualizar max-w-sm mx-auto">
                            @csrf
                            @method('PUT')
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Nombre</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $iglesia->name ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <label for="pais_id" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">País</label>
                                <select id="pais_id" class="bg-white-50 border border-gray-300 text-black text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  name="pais_id" onchange="loadDepartamentos(this)">
                                    <option >Selecciona un país</option>
                                    @foreach ($paises as $pais)
                                    <option value="{{$pais->id}}">{{ $pais->name }}</option>
                                    @endforeach
                                </select>
                                <label for="departamento_id" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Departamento</label>
                                <select id="departamento_id" class="bg-white-50 border border-gray-300 text-black text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="departamento_id" onchange="loadMunicipios(this)">
                                    <option>Selecciona un Departamento</option>
                                </select>
                                <label for="municipio_id" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Municipio</label>
                                <select id="municipio_id" class="bg-white-50 border border-gray-300 text-black text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="municipio_id">
                                    <option>Selecciona un Municipio</option>
                                </select>
                            </div>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-2">Guardar</button>
                            <a href="{{ route('iglesias.index')}}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800 mb-2">Cancelar</a>
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

    /**
     * se buscan los Departamentos del País seleccionado.
     */
    function loadDepartamentos(paisSelect){
        let departamentoSelect = document.getElementById('departamento_id');
        let municipioSelect = document.getElementById('municipio_id');
        clearSelect(departamentoSelect);
        clearSelect(municipioSelect);
        let paisId = paisSelect.value;
        fetch(`/paises/${paisId}/departamentos`)
            .then(function(response){
                return response.json();
            })
            .then(function (jsonData) {
                buildDepartamentos(jsonData);
            })

    }

    /**
     * se buscan los Municipios del Departamento seleccionado.
     */
    function loadMunicipios(departamentoSelect){
        let municipioSelect = document.getElementById('municipio_id');
        clearSelect(municipioSelect);
        let departamentoId = departamentoSelect.value;
        fetch(`/departamentos/${departamentoId}/municipios`)
            .then(function(response){
                return response.json();
            })
            .then(function (jsonData) {
                buildMunicipios(jsonData);
            })

    }

    /**
     *  se carga los Departamentos del País seleccionado en el select
     */
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

    /**
     *  se carga los Municipios del Departamento seleccionado en el select
     */
    function buildMunicipios(jsonData) {
        let municipioSelect = document.getElementById('municipio_id');
        clearSelect(municipioSelect);
        jsonData.forEach(function(municipio){
            let optionTag = document.createElement('option');
            optionTag.value = municipio.id;
            optionTag.innerHTML = municipio.name;
            municipioSelect.append(optionTag);
        });
    }

    /**
     * se limpia el select que se envia como parametro
     */
    function clearSelect(select){
        while (select.options.length >1) {
            select.remove(1);
        }
    }

    /**
     * se valida que se selecciono un País, Departamento y Municipio validos.
     */
    $('.formulario-actualizar').submit(function(e){
            e.preventDefault()
            let selectPais = document.getElementById('pais_id');
            let selectDepartamento = document.getElementById('departamento_id');
            let selectMunicipio = document.getElementById('municipio_id');
            if (selectPais.value == 'Selecciona un País' || selectDepartamento.value == 'Selecciona un Departamento' || selectMunicipio.value == 'Selecciona un Municipio') {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Por favor ingresa un País, Departamento y Municipio valido",
                });
            }
            else{
                this.submit();
            }
    });


</script>


@endsection
