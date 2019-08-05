<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];
    protected $appends = ['links'];
    // protected $perPage = 2;

    public function episodios()
    {
        return $this->hasMany(Episodios::class);
    }

    public function getLinksAttribute($links): array
    {
        return [
            'self' => '/api/series/' . $this->id,
            'episodios' => '/api/series/' . $this->id . '/episodios'
        ];
    }
}
