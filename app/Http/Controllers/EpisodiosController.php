<?php

namespace App\Http\Controllers;

use App\Episodios;

class EpisodiosController extends BaseController
{
    public function __construct()
    {
        $this->classe = Episodios::class;
    }

    public function buscaPorSerie(int $serieId)
    {
        $episodios = Episodios::query()
            ->where('serie_id', $serieId)
            ->get();

        return  $episodios;
    }
}
