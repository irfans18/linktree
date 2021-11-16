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
   public $rowId;

   public function render()
   {
      return view('livewire.link-manager', [
         // "links" => Link::where('name', 'like', '%'.$this->search.'%')->paginate(10),
         "links" => Link::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('cname', 'like', '%' . $this->search . '%')->paginate(10),
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
            'url' => $this->new['url'],
         ]);

         $link->save();
      }
   }

   public function update()
   {
      $link = Link::find($this->rowId);
      $link->name = $this->record['name'];
      $link->cname = empty($this->record['cname']) ? null : $this->record['cname'];
      $link->url = $this->record['url'];
      
      $link->save();
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
