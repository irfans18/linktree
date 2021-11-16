<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
   public $test="msdskdj";

    public function render()
    {
        return view('livewire.test');
    }
    
    public function test(){
       dd("sdasda");
    }
}
