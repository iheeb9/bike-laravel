<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endroit extends Model
{
    use HasFactory;

    public function regles()
{
   //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
   return $this->belongsToMany(
        Regle::class,
        'trophies_users',
        'endroit_id',
        'regle_id');
}
}
