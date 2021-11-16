<?php

namespace App\Models;

use App\Models\User;
use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Link extends Model
{
   use HasFactory;
   use SoftDeletes;


   /**
    * The attributes that are mass assignable.
    *
    * @var string[]
    */
   protected $fillable = [
      'user_id',
      'name',
      'cname',
      'url',
   ];

   public function user()
   {
      return $this->belongsTo(User::class, 'user_id', 'id');
   }

   public function gallery()
    {
        return $this->hasOne(Gallery::class);
    }
}
