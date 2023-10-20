<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ConsultantModel;
use App\Models\SGAP;
use App\Models\TawzefModel;
use App\Models\ServiceRequestModel ;
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
        $consultant_models = ConsultantModel::with('experience' ,'quilifaction_data')->get() ;
        return view('admin.namozags.consultant')->with(compact('consultant_models')) ;
    }
    public function ServicesRequest_model()
    {
        $services_requests = ServiceRequestModel::get() ;
        return view('admin.namozags.service_requester')->with(compact('services_requests')) ;
    }
    public  function sgap_model()
    {
        $sgap_models = SGAP::get() ;
        return view('admin.namozags.sgap_models')->with(compact('sgap_models')) ;

    }
}
