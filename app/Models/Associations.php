<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associations extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];


  public function Tournoit()
  {
    return $this->hasMany(Tournoit::class);
  }
  public function Evennements()
  {
    return $this->belongsTo(Evennement::class);
  }
}
