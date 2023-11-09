<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\V1\Dua;

class DuaController extends Controller
{
    public function index(int $cat_id)
    {
        return response()->json(Dua::where('cat_id', $cat_id)->get());
    }
}
