<x-guest-layout>
   @if (Route::has('login'))
      <div class=" fixed top-0 right-0 px-6 py-4 sm:block">
         @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
         @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
               <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
         @endauth
      </div>
   @endif
   <div class="w-full h-screen flex flex-col justify-center">
      <div class="flex justify-center items-center">
         <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
      </div>
      @livewire('guest-link')
   </div>
   {{-- <x-auth-card>
      <x-slot name="logo">
         <a href="/">
         </a>
      </x-slot>
   </x-auth-card> --}}
</x-guest-layout>
