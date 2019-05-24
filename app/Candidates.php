<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    protected $fillable = ['name','parties_id'];

    public function Parties(){
      return $this->belongsTo(Parties::class);
    }
}
