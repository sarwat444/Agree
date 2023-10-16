<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\TawzefModel;
use Illuminate\Http\Request;

class NamozagsController extends Controller
{
    public function Tawzef()
    {
        $tawzef_models = TawzefModel::with('quilifaction')->get() ;
        return view('admin.namozags.tawzef' , compact('tawzef_models')) ;
    }
}
