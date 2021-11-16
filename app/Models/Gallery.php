<?php

namespace App\Models;

use App\Models\Link;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
   use HasFactory;
   use SoftDeletes;

   /**
    * The attributes that are mass assignable.
    *
    * @var string[]
    */
   protected $fillable = [
      'link_id',
      'priority',
   ];

   public function link()
   {
      return $this->belongsTo(Link::class);
   }
}
