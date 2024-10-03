@foreach ( $noticias as $noticia )
    <div class="">
      <a href="{{route('noticia', $noticia->id)}}">
        <h2 class="mb-2 text-lg font-semibold text-gray-900 hover:text-purple-700">
            {{$noticia->titulo}}
        </h2>
        <img src="/imagen/{{$noticia->imagen}}" class="w-full object-contain mb-1 bg-center rounded" alt="imagen-noticia"/>
      </a>
      <p class="mb-3 text-sm font-normal text-gray-500">
        <a href="{{route('noticia', $noticia->id)}}" class="font-medium text-gray-900 hover:text-purple-700">{{$noticia->user->name}}</a>
        • {{date('d/m/Y',strtotime($noticia->updated_at))}}
      </p>
    </div>
    @endforeach

    </div>
    <div class="d-none">
        {{ $noticias->links() }}
    </div>
