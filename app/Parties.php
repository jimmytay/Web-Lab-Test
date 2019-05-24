<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parties extends Model
{
  protected $fillable = ['name'];

  public function Candidates(){
    return $this->hasMany(Candidates::class);
  }
}
