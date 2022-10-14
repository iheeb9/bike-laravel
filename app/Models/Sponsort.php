<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsort extends Model
{
    use HasFactory;

  public function Evennements()
  {
    return $this->belongsTo(Evennement::class);
  }
}
