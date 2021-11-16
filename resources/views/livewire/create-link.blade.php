<div>
   <div class="grid grid-cols-8 gap-2 py-4">
      <div></div>
      <div><input  class="px-8 rounded" wire:model="new.name" type="text"></div>
      <div></div>
      <div><input  class="px-8 rounded" wire:model="new.cname" type="text"></div>
      <div></div>
      <div><input  class="px-8 rounded" wire:model="new.url" type="text"></div>
      <div></div>
      {{-- <div ><button wire:click="create" class="py-2 bg-blue-600 rounded text-white"><pre>  save  </pre></button></div> --}}
      <div class="pt-2"><button wire:click="create">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="blue" viewBox="0 0 24 24"><path d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/></svg>
      </button></div>
    </div>
</div>