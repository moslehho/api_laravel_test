<?php

namespace App\Http\Controllers\Api\v1;

use App\Amooozesh;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Amooozesh as AmoozeshResources;
use Illuminate\Http\Request;

class AmooozeshController extends Controller
{
    //
    public function index()
    {
        $amo = Amooozesh::all();
        return AmoozeshResources::collection($amo);

    }
}
