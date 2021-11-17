<?php

namespace App\Http\Livewire;

use App\Models\Link;
use Livewire\Component;

class Tree extends Component
{
    public function render()
    {
        return view('livewire.tree', [
           'tree' => Link::all(),
        ])->extends('layouts.app');
    }
}
