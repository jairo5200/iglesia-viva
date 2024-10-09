@foreach ( $noticias as $noticia )
    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
    <a class="text-gray-900 hover:text-amber-400" href="{{route('noticia', $noticia->id)}}">
    <img src="/imagen/{{$noticia->imagen}}" class="w-full object-contain bg-center rounded" alt="imagen-noticia"/>
        <div class="px-4 pb-2 flex-auto">
            <h6 class="text-xl font-semibold mb-2">{{$noticia->titulo}}</h6>
            <p class="mb-4 text-sm font-normal text-gray-500">
                <a href="{{route('noticia', $noticia->id)}}" class="font-medium text-gray-900 hover:text-amber-400 my-4">{{$noticia->user->name}}</a>
                • {{date('d/m/Y',strtotime($noticia->updated_at))}}
            </p>
        </div>
    </a>
    </div>
    @endforeach

    </div>
    <div class="d-none">
        {{ $noticias->links() }}
    </div>
