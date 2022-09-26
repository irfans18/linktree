<div>
   <div class="flex justify-center">
      <input type="text" wire:model.live="search" wire:keydown.enter="create" class="w-1/2 rounded-full"
         placeholder="search or add new">
      <button wire:click="create()" type="submit" class="bg-blue-600 mx-2 px-4 text-white text-2xl font-bold rounded-full">
         +
      </button>
   </div>

   {{-- @include('livewire.modal-warning'); --}}
   @if ($isOpen)
      <p class="text-center text-red-500">This link has taken by another user</p>
   @else
   @endif

   <div class="mx-12"><span>use alphanumeric character!</span></div>

   {{-- add new --}}
   {{-- <div>
      @include('livewire.create-link')
   </div> --}}


   {{-- big screen --}}
   <div class="my-3 hidden md:flex mx-12">
      <table class="w-full ">
         <thead class="bg-gray-50">
            <tr>
               <th class="text-sm px-4 py-3 lowercase w-1">#</th>
               <th class="text-sm px-4 py-3 lowercase w-2/8">name</th>
               <th class="text-sm px-4 py-3 lowercase w-2/8">cname</th>
               <th class="text-sm px-4 py-3 lowercase w-1/2">url</th>
               <th class="text-sm text-left px-4 py-3 lowercase w-1/12">hit</th>
               <th class="text-sm px-4 py-3 lowercase w-1">/</th>
            </tr>
         </thead>
         <tbody>
            @php
               $i = 0;
            @endphp
            @foreach ($links as $item)
               @php
                  $i++;
               @endphp
               <tr class="hover:bg-green-50">
                  <td class="text-sm px-4 py-3 lowercase w-1">
                     <button wire:click="editModal({{ $item }})" class=" underline hover:cursor-pointer">
                        {{ $i }}
                  </td>
                  <td class="text-sm px-4 py-3 lowercase w-2/8">{{ $item->name }}</td>
                  <td class="text-sm px-4 py-3 lowercase w-2/8">{{ $item->cname }}</td>
                  <td class="text-sm px-4 py-3 lowercase w-1/2">
                     <span>real :</span><a class="underline italic text-purple-500" href=" {{ $item->url }} "
                        target="_blank">{{ $item->url }}</a>
                     <hr>
                     <span>pretty : </span><a class="underline italic text-purple-500"
                        href=" {{ env('APP_URL') . '/' . $item->name }} "
                        target="_blank">{{ env('APP_URL') . '/' . $item->name }}</a>
                  </td>
                  <td class="text-sm px-4 py-3 lowercase w-1/112">{{ $item->hit }}</td>


                  {{-- Action button --}}
                  <td class="py-4 text-left text-sm text-gray-500 flex">
                     <div class="opacity-100">
                        <button class="px-2" wire:click.prevent="delete({{ $item->id }})">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="rgb(239, 68, 68)" height="24"
                              viewBox="0 0 24 24">
                              <path
                                 d="M20 4h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711v2zm-7 15.5c0-1.267.37-2.447 1-3.448v-6.052c0-.552.447-1 1-1s1 .448 1 1v4.032c.879-.565 1.901-.922 3-1.006v-7.026h-18v18h13.82c-1.124-1.169-1.82-2.753-1.82-4.5zm-7 .5c0 .552-.447 1-1 1s-1-.448-1-1v-10c0-.552.447-1 1-1s1 .448 1 1v10zm5 0c0 .552-.447 1-1 1s-1-.448-1-1v-10c0-.552.447-1 1-1s1 .448 1 1v10zm13-.5c0 2.485-2.017 4.5-4.5 4.5s-4.5-2.015-4.5-4.5 2.017-4.5 4.5-4.5 4.5 2.015 4.5 4.5zm-3.086-2.122l-1.414 1.414-1.414-1.414-.707.708 1.414 1.414-1.414 1.414.707.708 1.414-1.414 1.414 1.414.708-.708-1.414-1.414 1.414-1.414-.708-.708z" />
                           </svg>
                        </button>

                     </div>
                  </td>

               </tr>

               @if ($isEdit && $rowId == $item->id)
                  <tr>
                     <td colspan="5">
                        <hr>
                        @include('livewire.edit-link')
                        <hr>
                     </td>
                  </tr>
               @endif
            @endforeach
         </tbody>
      </table>
   </div>

   {{-- small screen --}}
   <div class="my-6 flex justify-center md:hidden">
      <table class="w-sc">
         <thead class="bg-gray-50">
            <tr>
               <th class="text-sm px-4 py-3 lowercase w-1">#</th>
               <th class="text-sm px-4 py-3 lowercase w-max">name</th>
               <th class="text-sm px-4 py-3 lowercase w-max">cname</th>
               <th class="text-sm px-4 py-3 lowercase w-max">hit</th>
            </tr>
         </thead>
         <tbody>
            @php
               $i = 0;
            @endphp
            @foreach ($links as $item)
               @php
                  $i++;
               @endphp
               <tr class="hover:bg-green-50">
                  <td rowspan="3" class="text-sm px-4 py-3 lowercase w-1 border">
                     {{ $i }}
                  </td>
                  <td class="text-sm px-4 py-3 lowercase w-max border">{{ $item->name }}</td>
                  <td class="text-sm px-4 py-3 lowercase w-max border">{{ $item->cname }}</td>
                  <td class="text-sm px-4 py-3 lowercase w-max border">{{ $item->hit }}</td>
               </tr>
               <tr>
                  <td colspan="3" class="text-sm text-purple-500 px-4 py-3 lowercase w-auto border underline italic">
                     <a href=" {{ $item->url }} " target="_blank">{{ $item->url }}</a>
                  </td>
               </tr>
               <tr>
                  <td colspan="3" class="text-sm text-purple-500 px-4 py-3 lowercase w-auto border underline italic">
                     <a href=" {{ env('APP_URL') . $item->name }} "
                        target="_blank">{{ env('APP_URL') . $item->name }}</a>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>
