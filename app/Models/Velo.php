<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Velo extends Model
{
    use HasFactory;

    protected  $table = 'velos';
    protected  $fillable=[
      'categorie_id',
      'nom',
      'serie',
      'description',
      'quantite',
      'prix_heure',
      'Disponibilite',

    ];

  public function Locations()
    {
      return $this->hasMany(Location::class);
    }
  public function Category()
  {
    return $this->belongsTo(Category::class,'categorie_id','id');
  }
  public function Participations()
  {
    return $this->hasMany(Participation::class);
  }
  public function veloImages()
  {
    return $this->hasMany(VeloImage::class);
  }
}
