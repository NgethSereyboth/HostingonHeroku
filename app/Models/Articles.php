<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Articles extends Model
{
  protected $guarded = ['id'];
  protected $fillable = [
    'name', 
    'content', 
    'image', 
    'created_by', 
    'updated_by'
  ];


  // Relationships
  public function userCreate (): Relations\BelongsTo {
    return $this->belongsTo (User::class);
  }

  public function userUpdate (): Relations\BelongsTo {
    return $this->belongsTo (User::class);
  }

}
