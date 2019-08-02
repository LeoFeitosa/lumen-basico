<?php

namespace App\Http\Controllers;

use App\Series;

class SeriesController extends BaseController
{
    public function __construct()
    {
        $this->classe = Series::class;
    }
}
