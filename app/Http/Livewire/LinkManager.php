<?php

namespace App\Http\Livewire;

use App\Models\Link;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

use function PHPUnit\Framework\isEmpty;

class LinkManager extends Component
{
   use WithPagination;
   public $search = '';
   public $isEdit = false;
   public $record = [];
   public $new = [];
   public $rowId;

   public function render()
   {
      return view('livewire.link-manager', [
         // "links" => Link::where('name', 'like', '%'.$this->search.'%')->paginate(10),
         "links" => Link::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('cname', 'like', '%' . $this->search . '%')->orderBy('created_at','desc')->paginate(10),
            // ->orWhere('cname', 'like', '%' . $this->search . '%')->orderBy('updated_at','desc')->paginate(10),
         // "links" => Link::all(),
      ]);
   }

   public function create()
   {
      if (!empty($this->search)) {
         $this->new['name'] = $this->search;
         $link = Link::create([
            'user_id' => Auth::user()->id,
            'name' => $this->new['name'],
            'cname' => empty($this->new['cname']) ? null : $this->new['cname'],
            'url' => empty($this->new['url']) ? "" : $this->new['url'],
         ]);

         $link->save();
         $this->reset(['search']);
         reset($this->new);
      }
   }

   public function update()
   {
      $link = Link::find($this->rowId);
      $link->name = $this->record['name'];
      $link->cname = empty($this->record['cname']) ? null : $this->record['cname'];
      $link->url = $this->record['url'];
      
      $link->save();

      $this->isEdit= false;
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
