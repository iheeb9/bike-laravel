<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['date_start', 'date_end', 'user_id','velo_id'];
    public $timestamps = false;

  public function User()
  {
    return $this->belongsTo(User::class);
  }
  public function Velo()
  {
    return $this->belongsTo(Velo::class);
  }
}
