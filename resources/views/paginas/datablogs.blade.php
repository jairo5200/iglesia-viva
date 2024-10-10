@foreach ( $blogs as $blog )
<div class="card my-4 mx-2 relative flex flex-col min-w-0 break-words bg-white shadow-lg">
    <a href="{{route('blog', $blog->id)}}">
  <div class="card-details  w-full object-contain bg-center rounded overflow-hidden">
  <img src="/imagen/{{$blog->imagen}}" class="object-cover h-60" alt="imagen-blog"/>
    <p class="text-title px-2">{{$blog->titulo}}</p>
    <p class=" text-body mb-3 text-sm font-normal text-gray-500 px-2">
        <a href="{{route('blog', $blog->id)}}" class="font-medium text-gray-900">{{$blog->user->name}}</a>
        • {{date('d/m/Y',strtotime($blog->updated_at))}}
      </p>
  </div>
  <a href="{{route('blog', $blog->id)}}"><button class="card-button">Leer mas...</button></a>
  </a>
</div>


    @endforeach

