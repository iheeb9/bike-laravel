<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournoit extends Model
{
    use HasFactory;
    protected $fillable = ['nom','date'];

    
  public function Associations()
  {
    return $this->belongsTo(Association::class);
  }
}
