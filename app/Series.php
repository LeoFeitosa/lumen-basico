<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];
    // protected $perPage = 2;

    public function episodios()
    {
        return $this->hasMany(Episodios::class);
    }
}
