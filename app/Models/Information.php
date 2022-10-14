<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

  public function location()
  {
    return $this->belongsTo(Location::class);
  }
  public function Velo()
  {
    return $this->belongsTo(Velo::class);
  }
}
