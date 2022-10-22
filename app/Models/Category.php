<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected  $fillable = [
      'nom',
      'slug',
      'description',
      'meta_title',
      'meta_keyword',
      'meta_description',
      'status',
    ];

  public function Velos()
  {
    return $this->hasMany(Velo::class,'categorie_id','id');
  }
}
