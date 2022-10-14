<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

  public function balade()
  {
    return $this->hasOne(Balade::class);
  }
  public function Posts()
  {
    return $this->hasMany(Post::class);
  }
}
