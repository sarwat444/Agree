<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ConsultantModel;
use App\Models\TawzefModel;
use Illuminate\Http\Request;

class NamozagsController extends Controller
{
    public function tawzef_model()
    {
        $tawzef_models = TawzefModel::with('quilifaction')->get() ;
        return view('admin.namozags.tawzef')->with(compact('tawzef_models')) ;
    }
    public function Consultant_model()
    {
        $consultant_models = ConsultantModel::with('experience')->get() ;
        return view('admin.namozags.consultant')->with(compact('consultant_models')) ;
    }
}
