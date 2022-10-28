<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeloImage extends Model
{
    use HasFactory;

    protected  $table= '_velo_images';

    protected $fillable=[
      'velo_id',
      'image'
    ];
}
