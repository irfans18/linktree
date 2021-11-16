<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class GoToLink extends Controller
{
    public function go($param){
      $link =  Link::where('name', 'like', '%'.$param.'%')
                     ->orWhere('cname', 'like', '%'.$param.'%')->first();
      // dd($link['url']);
      return redirect($link->url);
    }
}
