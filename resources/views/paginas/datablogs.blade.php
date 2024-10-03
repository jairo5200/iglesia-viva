@foreach ( $blogs as $blog )
    <div class="">
      <a href="{{route('blog', $blog->id)}}">
        <h2 class="mb-2 text-lg font-semibold text-gray-900 hover:text-purple-700">
            {{$blog->titulo}}
        </h2>
        <img src="/imagen/{{$blog->imagen}}" class="w-full object-contain mb-1 bg-center rounded" alt="imagen-blog"/>
      </a>
      <p class="mb-3 text-sm font-normal text-gray-500">
        <a href="{{route('blog', $blog->id)}}" class="font-medium text-gray-900 hover:text-purple-700">{{$blog->user->name}}</a>
        • {{date('d/m/Y',strtotime($blog->updated_at))}}
      </p>
    </div>
    @endforeach

