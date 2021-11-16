<div>
   <div class="grid grid-cols-8 gap-2 py-4">
      <div></div>
      <div class="px-8">
         <label for="name">name</label>
         <input  class=" rounded" wire:keydown.enter="update" wire:model="record.name" type="text">
      </div>
      <div></div>
      <div class="px-8">
         <label for="name">cname</label>
         <input  class="rounded" wire:keydown.enter="update" wire:model="record.cname" type="text">
      </div>
      <div></div>
      <div class="px-8">
         <label for="name">url</label>
         <input  class="rounded" wire:keydown.enter="update" wire:model="record.url" type="text">
      </div>
      <div></div>
      {{-- <div ><button wire:click="create" class="py-2 bg-blue-600 rounded text-white"><pre>  save  </pre></button></div> --}}
      <div class="pt-8"><button wire:click.prevent="update">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" viewBox="0 0 24 24"><path d="M0 11.522l1.578-1.626 7.734 4.619 13.335-12.526 1.353 1.354-14 18.646z"/></svg>
         {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="blue" viewBox="0 0 24 24"><path d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/></svg> --}}
      </button></div>
    </div>
</div>