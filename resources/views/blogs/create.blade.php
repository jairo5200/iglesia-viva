@extends('dashboard')


@section('content')
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Blog') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form method="POST" action="{{ route('blogs.store')}}" class="formulario-crear" id="formulario-crear" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-5 row">
                        <div class="col-sm">
                        <label for="titulo" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Titulo</label>
                        <input type="text" name="titulo" id="titulo" oninput="convertToSlug()" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <label for="slug" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Slug</label>
                        <input type="text" readonly name="slug" id="slug" class=" border border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-Black dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <div class="row mt-2 ml-2">
                        <label class="mr-3 mt-1" >Activo</label>
                            <label class="switch">
                                <input type="checkbox" id="falso_activo" >
                                <span class="slider"></span>
                            </label>
                        </div>
                        <input type="hidden" name="activo" id="activo" value="0">
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
                                <img id="imagenSeleccionada" style="max-height: 400px; max-width: 500px;">
                            </div>
                    </div>

                    </div>
                        <label for="descripcion" class="block mb-2 text-l font-medium text-gray-900 dark:text-black">Descripcion</label>
                        <textarea id=descripcion name="descripcion"></textarea>
                        <div class="col mt-4">
                            <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-2">Crear Blog</button>
                            <a href="{{ route('blogs.index')}}" class="text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-slate-600 dark:hover:bg-slate-700 dark:focus:ring-slate-800 mb-2">Cancelar</a>
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

    function convertToSlug() {
        const inputText = document.getElementById('titulo').value;
        const slug = inputText
            .toLowerCase()                       // Convertir a minúsculas
            .trim()                              // Eliminar espacios en blanco al inicio y al final
            .replace(/[^a-z0-9 -]/g, '')        // Eliminar caracteres no permitidos
            .replace(/\s+/g, '-')                // Reemplazar espacios por guiones
            .replace(/-+/g, '-');                // Reemplazar múltiples guiones por uno solo

        document.getElementById('slug').value = slug; // Mostrar el slug en el campo de salida
    }
    $("#falso_activo").change(function() {
        if (this.checked) {
        document.getElementById('activo').value = 1;
    }else{
        document.getElementById('activo').value=0;
    }

    });

    tinymce.init({
    selector: 'textarea#descripcion', // Replace this CSS selector to match the placeholder element for TinyMCE
    height: 800,
    plugins: 'code table lists image link',
    toolbar: 'undo redo | forecolor fontfamily | bold italic underline | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image | link'

  });

</script>


@endsection
