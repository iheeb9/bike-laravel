<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;

  public function Tournoit()
  {
    return $this->hasMany(Tournoit::class);
  }
  public function Evennements()
  {
    return $this->belongsTo(Evennement::class);
  }
}
