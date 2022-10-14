<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Velo extends Model
{
    use HasFactory;

  public function Information()
  {
    return $this->hasMany(Information::class);
  }
  public function Category()
  {
    return $this->belongsTo(Category::class);
  }
  public function Participations()
  {
    return $this->hasMany(Participation::class);
  }
}
