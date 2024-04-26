@extends('dashboard')


@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Fiel') }}
        </h2>
    </x-slot>


        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">



                        <form method="POST" action="{{route('fiels.update', $fiel)}}" class="formulario-actualizar" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-5 row">
                                <div class="col-sm">
                                <label for="id_documento" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Documento de identidad</label>
                                <input type="text" name="id_documento" id="id_documento" value="{{ old('id_documento', $fiel->id_documento ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <label for="name" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Nombre</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $fiel->name ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <label for="fecha_de_nacimiento" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Fecha de nacimiento</label>
                                <input type="date" name="fecha_de_nacimiento" value="{{ old('fecha_de_nacimiento', $fiel->fecha_de_nacimiento ) }}" id="fecha_de_nacimiento" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <label for="telefono" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Telefono</label>
                                <input type="text" name="telefono" id="telefono" value="{{ old('telefono', $fiel->telefono ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <label for="direccion" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Direccion</label>
                                <input type="text" name="direccion" id="direccion" value="{{ old('direccion', $fiel->direccion ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <label for="fecha_de_ingreso" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Fecha de ingreso</label>
                                <input type="date" name="fecha_de_ingreso" id="fecha_de_ingreso" value="{{ old('fecha_de_ingreso', $fiel->fecha_de_ingreso ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <label for="cargo" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Cargo</label>
                                <input type="text" name="cargo" id="cargo" value="{{ old('cargo', $fiel->cargo ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                <label for="escuela_actual" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Escuela actual</label>
                                <input type="text" name="escuela_actual" id="escuela_actual" value="{{ old('escuela_actual', $fiel->escuela_actual ) }}" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                </div>
                                <div class="col-sm">
                                <div class="grid grid-cols-1  mx-7">
                                    <label class="uppercase md:text-m text-m text-black text-black font-semibold mb-1">Subir Imagen</label>
                                        <div class='flex items-center justify-center w-full'>
                                            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                                <div class='flex flex-col items-center justify-center pt-7'>
                                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                                <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Seleccione la imagen</p>
                                                </div>
                                            <input name="imagen" id="imagen" type='file' class="hidden" />
                                            </label>
                                        </div>
                                </div>
                                    <div class="grid grid-cols-1 mt-5 mx-7">
                                        <img src="/imagen/{{$fiel->imagen}}" id="imagenSeleccionada" style="max-height: 400px; max-width: 500px;">

                                    </div>
                                </div>
                                <div class="row">
                                    <label for="pais_id" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">País</label>
                                    <select id="pais_id" class="bg-white-50 border border-gray-300 text-black text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  name="pais_id" onchange="loadDepartamentos(this)">
                                        <option >Selecciona un país</option>
                                        @foreach ($paises as $pais)
                                        <option value="{{$pais->id}}"> {{ $pais->name }} </option>
                                        @endforeach
                                    </select>
                                    <label for="departamento_id" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Departamento</label>
                                    <select id="departamento_id" class="bg-white-50 border border-gray-300 text-black text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="departamento_id" onchange="loadMunicipios(this)">
                                        <option>Selecciona un Departamento</option>
                                    </select>
                                    <label for="municipio_id" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Municipio</label>
                                    <select id="municipio_id" class="bg-white-50 border border-gray-300 text-black text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="municipio_id" onchange="loadIglesias(this)">
                                        <option>Selecciona un Municipio</option>
                                    </select>
                                    <label for="iglesia_id" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Iglesia</label>
                                    <select id="iglesia_id" class="bg-white-50 border border-gray-300 text-black text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="iglesia_id">
                                        <option>Selecciona una Iglesia</option>
                                    </select>
                                    <div class="col mt-4">
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-2">Guardar</button>
                                        <a href="{{route('fiels.index')}}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800 mb-2">Cancelar</a>
                                </div>

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

<script>

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

    function loadIglesias(municipioSelect){
        let iglesiaSelect = document.getElementById('iglesia_id');
        clearSelect(iglesiaSelect);
        let municipiooId = municipioSelect.value;
        fetch(`/municipios/${municipiooId}/iglesias`)
            .then(function(response){
                return response.json();
            })
            .then(function (jsonData) {
                buildIglesias(jsonData);
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

    function buildIglesias(jsonData) {
        let iglesiaSelect = document.getElementById('iglesia_id');
        clearSelect(iglesiaSelect);
        jsonData.forEach(function(iglesia){
            let optionTag = document.createElement('option');
            optionTag.value = iglesia.id;
            optionTag.innerHTML = iglesia.name;
            iglesiaSelect.append(optionTag);
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
            let selectMunicipio = document.getElementById('municipio_id');
            let selectIglesia = document.getElementById('iglesia_id');
            if (selectPais.value == 'Selecciona un País' || selectDepartamento.value == 'Selecciona un Departamento' || selectMunicipio.value == 'Selecciona un Municipio' || selectIglesia.value == 'Selecciona una Iglesia') {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Por favor ingresa un País, Departamento, Municipio e Iglesia valido",
                });
            }
            else{
                this.submit();
            }
    });


</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
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


@endsection
