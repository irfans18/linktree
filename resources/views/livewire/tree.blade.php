<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>Info</title>

   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

   <!-- Styles -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
   @livewireStyles
</head>
{{-- // TODO : configure database migration--}}
<body class="font-sans antialiased">
   <div class="min-h-screen bg-gray-100">
      <div class="pt-12">
         <h1 class="text-center">Tree</h1>
         <div class="">
            @foreach ($tree as $item)
               <div class="w-full flex justify-center">
                  {{-- <button class="bg-green-500">{{ $item->url }}</button> --}}
                  <a class="text-center rounded-full bg-green-400 w-1/2 my-1 py-2" href="{{ $item->url }}">
                     {{ $item->url }} </a>
               </div>
            @endforeach
         </div>
      </div>

   </div>
   @livewireScripts
</body>

</html>
