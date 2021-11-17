<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class GoToLink extends Controller
{
   public function go($param)
   {
      // dd($param);
      if ($param =="login") {
         return redirect()->route('login');
      }
      if ($param == "dashboard") {
         // dd($param);
         return redirect()->route('dashboard');
      } else {
         $link =  Link::where('name', 'like', '%' . $param . '%')
            ->orWhere('cname', 'like', '%' . $param . '%')->first();
         // dd($link['url']);
         return redirect($link->url);
      }
   }
}
