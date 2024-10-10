@extends('welcome')

@section('contenido')

<div class="flex flex-col items-center justify-between px-4 py-3 mx-auto max-w-7xl md:flex-row bg-white">
    <section class="px-4 py-12 mx-auto max-w-7xl">
        <h1 class="mb-3 text-4xl font-bold text-center text-gray-900 md:leading-tight md:text-5xl" itemprop="headline">Blogs</h1>
        <p class="mb-2 text-lg text-gray-500">acontinuacion se presentan los Blogs!</p>
        <div id="blogs-container" class="grid flex justify-between sm:grid-cols-2  md:grid-cols-4 ">
            @include('paginas.datablogs')
        </div>
    </section>
</div>
<div class="ajax-load text-center bg-white" style="display: none">
    <p class="font-bold pb-3 "><img class="mx-auto h-48 w-48" src="{{asset('imagen/loader.gif')}}" /> Cargando mas Blogs......</p>
</div>





<script>
$(document).ready(function () {
    let nextPageUrl = '{{ $blogs->nextPageUrl() }}';
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
            if (nextPageUrl) {
                loadMoreBlogs();
            }
        }
    });
    function loadMoreBlogs() {
        $.ajax({
            url: nextPageUrl,
            type: 'get',
            beforeSend: function () {
                nextPageUrl = '';
                $('.ajax-load').show();
            },
            success: function (data) {
                nextPageUrl = data.nextPageUrl;
                $('#blogs-container').append(data.view);
                $('.ajax-load').hide();
            },
            error: function (xhr, status, error) {
                console.error("Error al cargar mas blogs", error);
            }
        });
    }
});
</script>

@endsection
