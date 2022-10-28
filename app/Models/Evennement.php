<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evennement extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];


  public function Associations()
  {
    return $this->belongsToMany(Association::class)->withPivot('');
  }

  public function Sponsorts()
  {
    return $this->belongsTo(Sponsort::class);
  }

  public function Users()
  {
    return $this->belongsTo(User::class);
  }

}
