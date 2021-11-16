{{-- <x-slot name="header">
   <h2 class="font-semibold text-xl text-gray-800 leading-tight">
       {{ __('Dashboard') }}
   </h2>
</x-slot> --}}

<div>
   <div class="flex justify-center">
      <input type="text" wire:model="search" class="w-1/8 rounded-full">
      <button wire:click="create()" type="submit" class="bg-blue-600 mx-4 rounded-full"><pre>  +  </pre></button>
   </div>
   

   <div class="my-6 flex mx-12">
      <table class="w-full">
         <thead class="bg-gray-50">
            <tr>
               <th class="text-sm px-4 py-3 lowercase w-1">#</th>
               <th class="text-sm px-4 py-3 lowercase w-2/8">name</th>
               <th class="text-sm px-4 py-3 lowercase w-2/8">cname</th>
               <th class="text-sm px-4 py-3 lowercase w-1/2">url</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($links as $item)
            <tr class="hover:bg-green-50">
               <td class="text-sm px-4 py-3 lowercase w-1">{{ $item->id }}</td>
               <td class="text-sm px-4 py-3 lowercase w-2/8">{{ $item->name }}</td>
               <td class="text-sm px-4 py-3 lowercase w-2/8">{{ $item->cname }}</td>
               <td class="text-sm px-4 py-3 lowercase w-1/2">{{ $item->url }}</td>
            </tr>
                
            @endforeach
         </tbody>
      </table>
   </div>
</div>

