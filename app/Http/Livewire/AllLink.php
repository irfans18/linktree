<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class AllLink extends Component
{
   use WithPagination;
   public $search = '';
   public $isEdit = false;
   public $record = [];
   public $new = [];
   public $rowId;
   public $isOpen = false;
 

   public function render()
   {
      return view('livewire.all-link', [
         // "links" => Link::where('name', 'like', '%'.$this->search.'%')->paginate(10),
         "links" => Link::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('cname', 'like', '%' . $this->search . '%')->orderBy('updated_at', 'desc')->paginate(10),
      ]);
   }

   public function create()
   {
      if (!empty($this->search)) {
         $this->new['name'] = $this->search;
         $link = Link::withTrashed()->where('name', $this->new['name'])
            ->orWhere('cname', $this->new['name'])->first();
         if ($link != null) {
            if ($link->user_id == Auth::user()->id) {
               $link->restore();
            } else {
               $this->isOpen();
            }
         } else {
            if ($this->isOpen) {
               $this->isOpen();
            }else{
               $this->isOpen();
            }
         }
      }
      // dd($this->isOpen);
      // $this->reset(['search']);
   }

   private function isOpen()
   {
      if ($this->isOpen) {
         return $this->isOpen = false;
      } else {
         return $this->isOpen = true;
      }
   }

   public function update()
   {
      $link = Link::find($this->rowId);
      $link->name = $this->record['name'];
      $link->cname = empty($this->record['cname']) ? null : $this->record['cname'];
      $link->url = $this->record['url'];

      $link->save();

      $this->isEdit = false;
   }

   public function editModal($link)
   {
      // dd($link);
      $this->rowId = $link['id'];
      $this->record = $link;
      // dd($this->record);

      if ($this->isEdit) {
         return $this->isEdit = false;
      } else {
         return $this->isEdit = true;
      }
   }

   public function delete($id)
   {
      $link = Link::find($id);
      $link->delete();
   }
}
