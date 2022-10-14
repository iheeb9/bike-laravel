<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;

  public function User()
  {
    return $this->belongsTo(User::class);
  }
  public function Velo()
  {
    return $this->belongsTo(Velo::class);
  }
  public function Balade()
  {
    return $this->belongsTo(Balade::class);
  }

}
