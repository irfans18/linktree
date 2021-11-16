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
   public $record = [];

   public function render()
   {
      return view('livewire.link-manager', [
         // "links" => Link::where('name', 'like', '%'.$this->search.'%')->paginate(10),
         "links" => Link::where('name', 'like', '%'.$this->search.'%')
                     ->orWhere('cname', 'like', '%'.$this->search.'%')->paginate(10),
         // "links" => Link::all(),
      ]);
   }

   public function create(){
      // dd("sss");
      // dd($this->search);
      $this->record['cname'] = "gh";
      $this->record['url'] = "https://github.com/irfans18";
      if(!empty($this->search)) $this->record['name'] = $this->search;
      $link = Link::updateOrCreate([
         'user_id' => Auth::user()->id,
         'name' => $this->record['name'],
      ],[
         'cname' => $this->record['cname'],
         'url' => $this->record['url'],
      ]);

      $link->save();
   }

   public function delete($id){
      $link = Link::find($id);
      $link->delete();
   }
}
