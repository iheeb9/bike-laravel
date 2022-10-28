<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Tracking extends Model 
{
    use HasFactory;
    protected $fillable = ['lng', 'lat', 'location_id'];

    public function Location()
    {
      return $this->belongsTo(Location::class);
    }
    
   
    
}
