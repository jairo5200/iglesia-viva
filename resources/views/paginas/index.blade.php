@extends('welcome')

@section('contenido')
<div id="carouselExampleCaptions"  class="carousel slide mx-auto max-w-7xl" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="max-height: 600px;">
    <div class="carousel-item active">
      <img src="/imagen/perrito1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/imagen/perrito2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/imagen/perrito3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<a href="{{route('nuevo')}}">
<div id="banner" class="flex flex-col items-center justify-between px-4 py-10 mx-auto md:flex-row">
    <div class=" flex-col mx-auto max-w-7xl">
        <h2 class="text-4xl font-bold text-amber-950">eres nuevo?</h2>
        <h2 class="text-3xl font-bold text-amber-500">"alguna frase de muestra"</h2>
        <p class="text-lg text-zinc-900">¡Bienvenido a nuestra comunidad!</p>
    </div>
</div>
</a>


<div class="flex flex-col items-center justify-between px-4 mx-auto max-w-7xl md:flex-row bg-white">
    <section class="px-4 py-5 mx-auto max-w-7xl">
        <h1 class="mb-3 text-4xl font-bold text-center text-gray-900 md:leading-tight md:text-5xl" itemprop="headline">Noticias y Eventos</h1>
        <p class="mb-2 text-lg text-gray-500">acontinuacion se presentan las noticias y eventos mas relevantes!</p>
        <div id="noticias-container" class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
            @include('paginas.noticias')
        </div>
    </section>
</div>
<div class="ajax-load text-center bg-white" style="display: none">
    <p class="font-bold pb-3 "><img class="mx-auto h-48 w-48" src="{{asset('imagen/loader.gif')}}" /> Cargando mas Noticias......</p>
</div>





<script>
$(document).ready(function () {
    let nextPageUrl = '{{ $noticias->nextPageUrl() }}';
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
            if (nextPageUrl) {
                loadMoreNews();
            }
        }
    });
    function loadMoreNews() {
        $.ajax({
            url: nextPageUrl,
            type: 'get',
            beforeSend: function () {
                nextPageUrl = '';
                $('.ajax-load').show();
            },
            success: function (data) {
                nextPageUrl = data.nextPageUrl;
                $('#noticias-container').append(data.view);
                $('.ajax-load').hide();
            },
            error: function (xhr, status, error) {
                console.error("Error al cargar mas Noticias", error);
            }
        });
    }
});
</script>

@endsection
