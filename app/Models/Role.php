<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  use HasFactory;

  protected $fillable = [
    'rolename',
    'slug',
  ];

  /**
   * Un rol puede contener 1 o muchos usuarios 
   */
  public function users(): HasMany
  {
    return $this->hasMany(User::class);
  }
}