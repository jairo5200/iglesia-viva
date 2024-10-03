<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Iglesia viva</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.cdnfonts.com/css/scriptina" rel="stylesheet">



        <!-- Scripts -->
        <script src="{{ asset('js/alertify.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <!-- Single component -->
        <!-- Include AlpineJS first -->
        <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/alpinejs.min.js"></script>
        <!-- And then the single component -->
        <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/dropdown.min.js"></script>




        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/alertify.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @vite('resources/css/app.css')

        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body>


    <header class="z-30 w-full px-2 py-4 bg-orange-800 sm:px-4 sticky top-0 shadow ">
  <div class="flex items-center justify-between mx-auto max-w-7xl">
    <a href="/" title="Kutty Home Page" class="flex items-center hover:text-orange-500">
        <img src="/imagen/principal.png" style="max-height: 150px; max-width: 150px;" alt="Iglesia Viva">
        <h1 class=" pb-3 ml-5 text-5xl font-extrabold " style="font-family: 'Scriptina', sans-serif;">Iglesia Viva</h1>
    </a>
    <div class="flex items-center space-x-1">
      <div class="hidden space-x-1 md:inline-flex">
        <a href="{{route('inicio')}}" class="px-2 lg:px-6 py-6 text-m border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Inicio</a>
        <a href="#" class="px-2 lg:px-6 py-6 text-m border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Nosotros</a>
        <a href="#" class="px-2 lg:px-6 py-6 text-m border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Ritos</a>
        <a href="#" class="px-2 lg:px-6 py-6 text-m border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Company</a>
        <a href="{{route('blogsPagina')}}" class="px-2 lg:px-6 py-6 text-m border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Blogs</a>
        <a href="#" class="px-2 lg:px-6 py-6 text-m border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Donde estamos ubicados</a>
      </div>
      @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-m btn-primary">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-m btn-primary">Ingresar</a>
            @endauth
        @endif
      <div class="inline-flex md:hidden" x-data="{ open: false }">
        <button class="flex-none px-2 btn btn-link btn-sm" @click="open = true">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            aria-hidden="true"
            class="w-5 h-5"
          >
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
          <span class="sr-only">Open Menu</span>
        </button>
        <div class="absolute top-0 left-0 right-0 z-50 flex flex-col p-2 pb-4 m-2 space-y-3 bg-white rounded shadow mx-auto" x-show.transition="open" @click.away="open = false" x-cloak>
          <button class="self-end flex-none px-2 ml-2 btn btn-link btn-icon text-orange-600" @click="open = false">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="orange"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              aria-hidden="true"
            >
              <line x1="18" y1="6" x2="6" y2="18" class="text-orange-600"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
            <span class="sr-only">Close Menu</span>
          </button>
          <a href="{{route('inicio')}}" class="px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Inicio</a>
          <a href="#" class="px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Nosotros</a>
          <a href="#" class="px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Ritos</a>
          <a href="#" class="px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Company</a>
          <a href="{{route('blogsPagina')}}" class="px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Blogs</a>
          <a href="#" class="px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent hover:border-orange-600 leading-[22px] md:px-3 text-gray-500 hover:text-orange-500">Donde estamos ubicados</a>
        </div>
      </div>
    </div>
  </div>
  <div class="flex mx-auto max-w-7xl sm:justify-end space-x-6">
        <a href="#" class="text-gray-500 hover:text-orange-500">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
        <a href="#" class="text-gray-500 hover:text-orange-500">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
        <a href="#" class="text-gray-500 hover:text-orange-500">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                </path>
            </svg>
        </a>
        <a href="#" class="text-gray-500 hover:text-orange-500">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
        <a href="#" class="text-gray-500 hover:text-orange-500">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
        <a class="text-gray-500 hover:text-orange-500" aria-label="Visit TrendyMinds YouTube" href="" target="_blank"><svg
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="h-5 w-5">
            <path fill="currentColor"
                d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
            </path>
            </svg>
        </a>
    </div>
</header>





@yield('contenido')




        <footer class="flex flex-col items-center justify-between px-4 py-12 mx-auto max-w-7xl md:flex-row">
  <p class="mb-8 text-sm text-center text-gray-700 md:text-left md:mb-0">© Copyright 2024 Iglesia Viva. Todos Los Derechos Reservados.</p>
  <div class="flex items-center space-x-6">
    <a href="#">
      <span class="sr-only">Twitter</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2031" viewBox="-0.25 -0.25 1109.5 901.5" class="w-5 h-5" aria-hidden="true">
        <path
          d="M741 .2V0h52l19 3.8c12.667 2.467 24.167 5.7 34.5 9.7 10.334 4 20.334 8.667 30 14 9.667 5.333 18.434 10.767 26.301 16.3 7.8 5.467 14.8 11.267 21 17.4C929.933 67.4 939.5 69 952.5 66s27-7.167 42-12.5 29.834-11.333 44.5-18c14.667-6.667 23.601-10.9 26.801-12.7 3.133-1.866 4.8-2.866 5-3l.199-.3 1-.5 1-.5 1-.5 1-.5.2-.3.3-.2.301-.2.199-.3 1-.3 1-.2-.199 1.5-.301 1.5-.5 1.5-.5 1.5-.5 1-.5 1-.5 1.5c-.333 1-.666 2.333-1 4-.333 1.667-3.5 8.333-9.5 20S1051 73 1042 85s-17.066 21.066-24.199 27.2c-7.2 6.2-11.967 10.533-14.301 13-2.333 2.533-5.166 4.866-8.5 7l-5 3.3-1 .5-1 .5-.199.3-.301.2-.3.2-.2.3-1 .5-1 .5-.199.3-.301.2-.3.2-.2.3-.199.3-.301.2-.3.2-.2.3h5l28-6c18.667-4 36.5-8.833 53.5-14.5l27-9 3-1 1.5-.5 1-.5 1-.5 1-.5 1-.5 2-.3 2-.2v2l-.5.2-.5.3-.199.3-.301.2-.3.2-.2.3-.199.3-.301.2-.3.2-.2.3-.199.3-.301.2-.5 1-.5 1-.3.2c-.133.2-4.366 5.866-12.7 17-8.333 11.2-12.833 16.866-13.5 17-.666.2-1.6 1.2-2.8 3-1.133 1.866-8.2 9.3-21.2 22.3s-25.732 24.566-38.199 34.7c-12.533 10.2-18.867 22.733-19 37.6-.2 14.8-.967 31.534-2.301 50.2-1.333 18.667-3.833 38.833-7.5 60.5-3.666 21.667-9.333 46.167-17 73.5-7.666 27.333-17 54-28 80s-22.5 49.333-34.5 70-23 38.167-33 52.5-20.166 27.833-30.5 40.5c-10.333 12.667-23.399 26.934-39.199 42.8-15.867 15.8-24.533 24.467-26 26-1.533 1.467-8.066 6.934-19.601 16.4-11.466 9.533-23.8 19.066-37 28.6-13.133 9.467-25.2 17.367-36.2 23.7s-24.266 13.566-39.8 21.7C630.734 840.4 614 848 596 855s-37 13.5-57 19.5-39.333 10.667-58 14c-18.666 3.333-39.833 6.167-63.5 8.5l-35.5 3.5v.5h-65v-.5l-8.5-.5c-5.666-.333-10.333-.667-14-1-3.666-.333-17.5-2.167-41.5-5.5s-42.833-6.667-56.5-10c-13.666-3.333-34-9.667-61-19s-50.1-18.767-69.3-28.3c-19.133-9.467-31.133-15.467-36-18-4.8-2.467-10.2-5.533-16.2-9.2l-9-5.5-.199-.3-.301-.2-.3-.2-.2-.3-1-.5-1-.5-.199-.3-.301-.2-.3-.2-.2-.3-.199-.3L.5 800H0v-2l1 .2 1 .3 4.5.5c3 .333 11.167.833 24.5 1.5 13.334.667 27.5.667 42.5 0s30.334-2.167 46-4.5c15.667-2.333 34.167-6.333 55.5-12 21.334-5.667 40.934-12.4 58.801-20.2 17.8-7.866 30.466-13.733 38-17.6 7.466-3.8 18.866-10.867 34.199-21.2l23-15.5.2-.3.3-.2.301-.2.199-.3.2-.3.3-.2.301-.2.199-.3 1-.3 1-.2.2-1 .3-1 .301-.2.199-.3-8-.5c-5.333-.333-10.5-.667-15.5-1s-12.833-1.833-23.5-4.5c-10.666-2.667-22.166-6.667-34.5-12-12.333-5.333-24.333-11.667-36-19-11.666-7.333-20.1-13.434-25.3-18.3-5.133-4.801-11.8-11.6-20-20.4-8.133-8.866-15.2-17.967-21.2-27.3s-11.733-20.101-17.199-32.3L124.5 551l-.5-1.5-.5-1.5-.3-1-.2-1 1.5.2 1.5.3 11 1.5c7.334 1 18.834 1.333 34.5 1 15.667-.333 26.5-1 32.5-2s9.667-1.667 11-2l2-.5 2.5-.5 2.5-.5.2-.3.3-.2.301-.2.199-.3-2-.5-2-.5-2-.5-2-.5-2-.5c-1.333-.333-3.666-1-7-2-3.333-1-12.333-4.667-27-11-14.666-6.333-26.333-12.5-35-18.5a241.7 241.7 0 0 1-24.8-19.7c-7.8-7.2-16.366-16.467-25.7-27.8-9.333-11.333-17.666-24.5-25-39.5-7.333-15-12.833-29.333-16.5-43a232.143 232.143 0 0 1-7.199-41.5L43 316l1 .2 1 .3 1 .5 1 .5 1 .5 1 .5 15.5 7c10.334 4.667 23.167 8.667 38.5 12 15.334 3.333 24.5 5.167 27.5 5.5l4.5.5h9l-.199-.3-.301-.2-.3-.2-.2-.3-.199-.3-.301-.2-.3-.2-.2-.3-1-.5-1-.5-.199-.3-.301-.2-.3-.2-.2-.3-1-.5-1-.5-.199-.3c-.2-.134-3.067-2.267-8.601-6.4-5.467-4.2-11.2-9.633-17.2-16.3s-12-13.667-18-21A162.158 162.158 0 0 1 77 271c-4.666-8.333-9.6-18.934-14.8-31.8-5.133-12.8-9.033-25.7-11.7-38.7-2.666-13-4.166-25.833-4.5-38.5-.333-12.667 0-23.5 1-32.5s3-19.167 6-30.5 7.334-23.333 13-36l8.5-19 .5-1.5.5-1.5.301-.2.199-.3.2-.3.3-.2.301.2.199.3.2.3.3.2.301.2.199.3.2.3.3.2.5 1 .5 1 .301.2.199.3 13.5 15c9 10 19.667 21.167 32 33.5 12.334 12.333 19.167 18.733 20.5 19.2 1.334.533 3 2.066 5 4.6 2 2.467 8.667 8.367 20 17.7 11.334 9.333 26.167 20.167 44.5 32.5 18.334 12.333 38.667 24.5 61 36.5 22.334 12 46.334 22.833 72 32.5 25.667 9.667 43.667 16 54 19 10.334 3 28 6.833 53 11.5s43.834 7.667 56.5 9c12.667 1.333 21.334 2.1 26 2.3l7 .2-.199-1.5-.301-1.5-2-12.5c-1.333-8.333-2-20-2-35s1.167-28.833 3.5-41.5c2.334-12.667 5.834-25.5 10.5-38.5 4.667-13 9.234-23.434 13.7-31.3 4.534-7.8 10.467-16.7 17.8-26.7 7.334-10 16.834-20.333 28.5-31 11.667-10.667 25-20.167 40-28.5s28.834-14.667 41.5-19c12.667-4.333 23.334-7.167 32-8.5 8.667-1.333 13-2.1 13-2.3z"
          fill="#5da8dc"
          stroke="#5da8dc"
          stroke-width=".5"
        />
        <path
          d="M0 399V0h741v.2c0 .2-4.333.966-13 2.3-8.666 1.333-19.333 4.167-32 8.5-12.666 4.333-26.5 10.667-41.5 19s-28.333 17.833-40 28.5c-11.666 10.667-21.166 21-28.5 31-7.333 10-13.266 18.9-17.8 26.7-4.466 7.866-9.033 18.3-13.7 31.3-4.666 13-8.166 25.833-10.5 38.5-2.333 12.667-3.5 26.5-3.5 41.5s.667 26.667 2 35l2 12.5.301 1.5.199 1.5-7-.2c-4.666-.2-13.333-.966-26-2.3-12.666-1.333-31.5-4.333-56.5-9s-42.666-8.5-53-11.5c-10.333-3-28.333-9.333-54-19-25.666-9.667-49.666-20.5-72-32.5-22.333-12-42.666-24.167-61-36.5-18.333-12.333-33.166-23.167-44.5-32.5-11.333-9.333-18-15.233-20-17.7-2-2.533-3.666-4.066-5-4.6-1.333-.467-8.166-6.867-20.5-19.2-12.333-12.333-23-23.5-32-33.5L80 44.5l-.199-.3-.301-.2-.5-1-.5-1-.3-.2-.2-.3-.199-.3-.301-.2-.3-.2-.2-.3-.199-.3-.301-.2-.3.2-.2.3-.199.3-.301.2-.5 1.5-.5 1.5L66 63c-5.666 12.667-10 24.667-13 36s-5 21.5-6 30.5-1.333 19.833-1 32.5c.334 12.667 1.834 25.5 4.5 38.5 2.667 13 6.567 25.9 11.7 38.7 5.2 12.866 10.134 23.466 14.8 31.8 4.667 8.333 10 16.167 16 23.5 6 7.333 12 14.333 18 21s11.733 12.1 17.2 16.3c5.533 4.134 8.4 6.267 8.601 6.4l.199.3 1 .5 1 .5.2.3.3.2.301.2.199.3 1 .5 1 .5.2.3.3.2.301.2.199.3.2.3.3.2.301.2.199.3h-9l-4.5-.5c-3-.333-12.166-2.167-27.5-5.5-15.333-3.333-28.166-7.333-38.5-12l-15.5-7-1-.5-1-.5-1-.5-1-.5-1-.3-1-.2 1.801 21c1.133 14 3.533 27.833 7.199 41.5 3.667 13.667 9.167 28 16.5 43 7.334 15 15.667 28.167 25 39.5 9.334 11.333 17.9 20.6 25.7 27.8a241.7 241.7 0 0 0 24.8 19.7c8.667 6 20.334 12.167 35 18.5 14.667 6.333 23.667 10 27 11 3.334 1 5.667 1.667 7 2l2 .5 2 .5 2 .5 2 .5 2 .5-.199.3-.301.2-.3.2-.2.3-2.5.5-2.5.5-2 .5c-1.333.333-5 1-11 2s-16.833 1.667-32.5 2c-15.666.333-27.166 0-34.5-1l-11-1.5-1.5-.3-1.5-.2.2 1 .3 1 .5 1.5.5 1.5 8.301 18.2C138.266 581.399 144 592.167 150 601.5s13.067 18.434 21.2 27.3c8.2 8.801 14.867 15.6 20 20.4 5.2 4.866 13.634 10.967 25.3 18.3 11.667 7.333 23.667 13.667 36 19 12.334 5.333 23.834 9.333 34.5 12 10.667 2.667 18.5 4.167 23.5 4.5s10.167.667 15.5 1l8 .5-.199.3-.301.2-.3 1-.2 1-1 .2-1 .3-.199.3-.301.2-.3.2-.2.3-.199.3-.301.2-.3.2-.2.3-23 15.5c-15.333 10.333-26.733 17.4-34.199 21.2-7.534 3.866-20.2 9.733-38 17.6-17.867 7.8-37.467 14.533-58.801 20.2-21.333 5.667-39.833 9.667-55.5 12-15.666 2.333-31 3.833-46 4.5s-29.166.667-42.5 0c-13.333-.667-21.5-1.167-24.5-1.5l-4.5-.5-1-.3-1-.2V399zM1107.801 109.8l.199-.3.5-.3.5-.2v792H382v-.5l35.5-3.5c23.667-2.333 44.834-5.167 63.5-8.5 18.667-3.333 38-8 58-14s39-12.5 57-19.5 34.734-14.6 50.2-22.8c15.534-8.134 28.8-15.367 39.8-21.7s23.067-14.233 36.2-23.7c13.2-9.533 25.534-19.066 37-28.6 11.534-9.467 18.067-14.934 19.601-16.4 1.467-1.533 10.133-10.2 26-26 15.8-15.866 28.866-30.133 39.199-42.8 10.334-12.667 20.5-26.167 30.5-40.5s21-31.833 33-52.5 23.5-44 34.5-70 20.334-52.667 28-80c7.667-27.333 13.334-51.833 17-73.5 3.667-21.667 6.167-41.833 7.5-60.5 1.334-18.667 2.101-35.4 2.301-50.2.133-14.866 6.467-27.4 19-37.6 12.467-10.134 25.199-21.7 38.199-34.7s20.067-20.434 21.2-22.3c1.2-1.8 2.134-2.8 2.8-3 .667-.134 5.167-5.8 13.5-17 8.334-11.134 12.567-16.8 12.7-17l.3-.2.5-1 .5-1 .301-.2.199-.3.2-.3.3-.2.301-.2.199-.3.2-.3.3-.2.301-.2zM812 3.8L793 0h316v107l-2 .2-2 .3-1 .5-1 .5-1 .5-1 .5-1.5.5-3 1-27 9c-17 5.667-34.833 10.5-53.5 14.5l-28 6h-5l.2-.3.3-.2.301-.2.199-.3.2-.3.3-.2.301-.2.199-.3 1-.5 1-.5.2-.3.3-.2.301-.2.199-.3 1-.5 1-.5 5-3.3c3.334-2.134 6.167-4.467 8.5-7 2.334-2.467 7.101-6.8 14.301-13C1024.933 106.066 1033 97 1042 85s16.5-23.833 22.5-35.5 9.167-18.333 9.5-20c.334-1.667.667-3 1-4l.5-1.5.5-1 .5-1 .5-1.5.5-1.5.301-1.5.199-1.5-1 .2-1 .3-.199.3-.301.2-.3.2-.2.3-1 .5-1 .5-1 .5-1 .5-.199.3c-.2.134-1.867 1.134-5 3-3.2 1.8-12.134 6.034-26.801 12.7-14.666 6.667-29.5 12.667-44.5 18s-29 9.5-42 12.5-22.566 1.4-28.699-4.8c-6.2-6.134-13.2-11.934-21-17.4-7.867-5.533-16.634-10.966-26.301-16.3a245.399 245.399 0 0 0-30-14c-10.333-4-21.833-7.233-34.5-9.7zM0 850.5V800h.5l.301.2.199.3.2.3.3.2.301.2.199.3 1 .5 1 .5.2.3.3.2.301.2.199.3 9 5.5c6 3.667 11.4 6.733 16.2 9.2 4.867 2.533 16.867 8.533 36 18 19.2 9.533 42.3 18.967 69.3 28.3s47.334 15.667 61 19c13.667 3.333 32.5 6.667 56.5 10s37.834 5.167 41.5 5.5c3.667.333 8.334.667 14 1l8.5.5v.5H0v-50.5z"
          fill="#fff"
          stroke="#fff"
          stroke-width=".5"
        />
      </svg>
    </a>
    <a href="#">
      <span class="sr-only">LinkedIn</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" viewBox="7.025 7.025 497.951 497.95" class="w-5 h-5" aria-hidden="true">
        <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="-974.482" y1="1306.773" x2="-622.378" y2="1658.877" gradientTransform="translate(1054.43 -1226.825)">
          <stop offset="0" stop-color="#2489be" />
          <stop offset="1" stop-color="#0575b3" />
        </linearGradient>
        <path
          d="M256 7.025C118.494 7.025 7.025 118.494 7.025 256S118.494 504.975 256 504.975 504.976 393.506 504.976 256C504.975 118.494 393.504 7.025 256 7.025zm-66.427 369.343h-54.665V199.761h54.665v176.607zM161.98 176.633c-17.853 0-32.326-14.591-32.326-32.587 0-17.998 14.475-32.588 32.326-32.588s32.324 14.59 32.324 32.588c.001 17.997-14.472 32.587-32.324 32.587zm232.45 199.735h-54.4v-92.704c0-25.426-9.658-39.619-29.763-39.619-21.881 0-33.312 14.782-33.312 39.619v92.704h-52.43V199.761h52.43v23.786s15.771-29.173 53.219-29.173c37.449 0 64.257 22.866 64.257 70.169l-.001 111.825z"
          fill="url(#a)"
        />
      </svg>
    </a>
    <a href="#">
      <span class="sr-only">Instagram</span>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2500 2500" width="2500" height="2500" class="w-5 h-5" aria-hidden="true">
        <defs>
          <radialGradient id="0" cx="332.14" cy="2511.81" r="3263.54" gradientUnits="userSpaceOnUse">
            <stop offset=".09" stop-color="#fa8f21" />
            <stop offset=".78" stop-color="#d82d7e" />
          </radialGradient>
          <radialGradient id="1" cx="1516.14" cy="2623.81" r="2572.12" gradientUnits="userSpaceOnUse">
            <stop offset=".64" stop-color="#8c3aaa" stop-opacity="0" />
            <stop offset="1" stop-color="#8c3aaa" />
          </radialGradient>
        </defs>
        <path
          d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57"
          fill="url(#0)"
        />
        <path
          d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57"
          fill="url(#1)"
        />
      </svg>
    </a>
    <a href="#">
      <span class="sr-only">Facebook</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="1298" height="2500" viewBox="88.428 12.828 107.543 207.085" class="w-5 h-5" aria-hidden="true">
        <path
          d="M158.232 219.912v-94.461h31.707l4.747-36.813h-36.454V65.134c0-10.658 2.96-17.922 18.245-17.922l19.494-.009V14.278c-3.373-.447-14.944-1.449-28.406-1.449-28.106 0-47.348 17.155-47.348 48.661v27.149H88.428v36.813h31.788v94.461l38.016-.001z"
          fill="#3c5a9a"
        />
      </svg>
    </a>
  </div>
</footer>

    </body>
</html>
