<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balade extends Model
{
    use HasFactory;





  protected $guarded = [];
  public function Participations()

  {
    return $this->hasMany(Participation::class);
  }

  public function Review()
  {
    return $this->belongsTo(Review::class);
  }
}
