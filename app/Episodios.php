<?php

namespace App;

use App\Series;
use Illuminate\Database\Eloquent\Model;

class Episodios extends Model
{
    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido', 'serie_id'];
    protected $appends = ['links'];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function getAssistidoAttribute($assistido): bool
    {
        return $assistido;
    }

    public function getLinksAttribute(): array
    {
        return [
            'self' => '/api/episodios/' . $this->id,
            'series' => '/api/series/' . $this->serie_id
        ];
    }
}
