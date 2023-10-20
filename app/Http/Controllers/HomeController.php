<?php

namespace App\Http\Controllers;

use App\Models\{ConsultantModel, ExperienceField, Qualification, TawzefModel , ServiceRequestModel};
use App\Models\SGAP ;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('site.Home') ;
    }
    /* Join Us Page */
    public function join_us()
    {

        return view('site.join_us' ) ;
    }

    public  function Twaezef_Model()
    {
         $Quilifactions =  Qualification::get() ;
         return  view('site.Namozag.Tawzef', compact('Quilifactions')) ;
    }
    public  function save_tawzef_model(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'name'=>'required' ,
            'email' =>'required' ,
            'phone' => 'required' ,
            'sex' => 'required' ,
            'file' => 'required'
        ]) ;
        // If validation fails, return the error response
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->first()
            ], 400);
        }
        $SupplierNewImageCode = null ;
        if(!empty($request->file)) {
            $SupplierNewImageCode = $this->UploadTawzefFile($request, "file");
        }
        // Create a new instance of the Twawzef model and fill it with the request data
        $twawzef = new TawzefModel();
        $twawzef->name = $request->input('name');
        $twawzef->email = $request->input('email');
        $twawzef->phone = $request->input('phone');
        $twawzef->sex = $request->input('sex');
        $twawzef->qulifaction = $request->input('quilifaction') ;
        $twawzef->file = $SupplierNewImageCode;

        // Save the Twawzef model to the database
        $twawzef->save();

        // Return a success response
        return redirect()->back()->with('success' , 'Data Is Saved Successfuly') ;


    }

    public function UploadTawzefFile(Request $request, $key): ?string {
        $uploadedFiles = $request->file();
        $uploadedFile = array_key_exists($key, $uploadedFiles) ? $uploadedFiles[$key] : null;
        if ($uploadedFile) {
            if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
                $filename = uniqid().'.'.$uploadedFile->getClientOriginalExtension();
                Storage::disk('publicDirectory')->putFileAs(
                    'site/uploads/tawzef/',
                    $uploadedFile,
                    $filename
                );
                return 'site/uploads/tawzef/'. $filename;
            }
        }
        return null;
    }

    public function UploadConsultantfFile(Request $request, $key): ?string {
        $uploadedFiles = $request->file();
        $uploadedFile = array_key_exists($key, $uploadedFiles) ? $uploadedFiles[$key] : null;
        if ($uploadedFile) {
            if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
                $filename = uniqid().'.'.$uploadedFile->getClientOriginalExtension();
                Storage::disk('publicDirectory')->putFileAs(
                    'site/uploads/consult/',
                    $uploadedFile,
                    $filename
                );
                return 'site/uploads/consult/'. $filename;
            }
        }
        return null;
    }
    public function Uploads_gapFile(Request $request, $key): ?string {
        $uploadedFiles = $request->file();
        $uploadedFile = array_key_exists($key, $uploadedFiles) ? $uploadedFiles[$key] : null;
        if ($uploadedFile) {
            if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
                $filename = uniqid().'.'.$uploadedFile->getClientOriginalExtension();
                Storage::disk('publicDirectory')->putFileAs(
                    'site/uploads/s_Gap/',
                    $uploadedFile,
                    $filename
                );
                return 'site/uploads/s_Gap/'. $filename;
            }
        }
        return null;
    }




    /* Consltant  Namozag */

    public  function Consltant_Model()
    {
        $Quilifactions =  Qualification::get() ;
        $experience_filed  = ExperienceField::get() ;
        return  view('site.Namozag.Consultant', compact('Quilifactions' ,'experience_filed')) ;
    }
    public  function  save_Consultant_model(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'name'=>'required' ,
            'email' =>'required' ,
            'phone' => 'required' ,
            'experience_years' => 'required' ,
            'experience_years_public' => 'required' ,
            'experience_filed' =>  'required' ,
            'quilifaction' =>  'required' ,
            'file' => 'required'
        ]) ;
        // If validation fails, return the error response
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->first()
            ], 400);
        }
        $SupplierNewImageCode = null ;
        if(!empty($request->file)) {
            $SupplierNewImageCode = $this->UploadConsultantfFile($request, "file");
        }
        // Create a new instance of the Twawzef model and fill it with the request data
        $consult  = new ConsultantModel();
        $consult->name = $request->input('name');
        $consult->email = $request->input('email');
        $consult->phone = $request->input('phone');
        $consult->experience_years = $request->input('experience_years');
        $consult->experience_years_public = $request->input('experience_years_public') ;
        $consult->experience_filed = $request->input('experience_filed') ;
        $consult->quilifaction  = $request->input('quilifaction') ;
        $consult->file = $SupplierNewImageCode;
        // Save the Twawzef model to the database
        $consult->save();
        // Return a success response
        return redirect()->back()->with('success' , 'Data Is Saved Successfuly') ;

    }

    /** SAGB- Model*/

        public  function s_gab(){
            $Quilifactions =  Qualification::get() ;
            $experience_filed  = ExperienceField::get() ;
            return  view('site.Namozag.S-GAP', compact('Quilifactions' ,'experience_filed')) ;
        }

        public  function save_S_GAP_model(Request $request)
        {
            $validator = Validator::make($request->all() , [
                'name'=>'required' ,
                'email' =>'required' ,
                'phone' => 'required' ,
                'Have_certifacate' => 'required' ,
                'specilization' => 'required' ,
                'Biography_file' => 'required',
                'quilifaction' =>  'required' ,
                'file' => 'required'
            ]) ;
            // If validation fails, return the error response
            if ($validator->fails()) {
                return response()->json([
                    'error' => $validator->errors()->first()
                ], 400);
            }
            $SupplierNewImageCode = null ;
            if(!empty($request->file)) {
                $SupplierNewImageCode = $this->Uploads_gapFile($request, "file");
            }
            if(!empty($request->Biography_file)) {
                $gap_file = $this->Uploads_gapFile($request, "Biography_file");
            }

            // Create a new instance of the Twawzef model and fill it with the request data
            $S_GAP_MODEL  = new SGAP();
            $S_GAP_MODEL->name = $request->input('name');
            $S_GAP_MODEL->email = $request->input('email');
            $S_GAP_MODEL->phone = $request->input('phone');
            $S_GAP_MODEL->have_certiface = $request->input('Have_certifacate');
            $S_GAP_MODEL->s_GAP_file = $gap_file ;
            $S_GAP_MODEL->qualification_id = $request->input('quilifaction') ;
            $S_GAP_MODEL->file = $SupplierNewImageCode;
            $S_GAP_MODEL->save();
            // Return a success response
            return redirect()->back()->with('success' , 'Data Is Saved Successfuly') ;
        }

        public function view_service_requester()
        {
            $Quilifactions =  Qualification::get()  ;
            return  view('site.Namozag.Service_Request', compact('Quilifactions')) ;
        }

        public function save_service_request_model(Request $request)
        {
            $validator = Validator::make($request->all() , [
                'type' => 'required' ,
                'name'=>'required' ,
                'email' =>'required' ,
                'phone' => 'required'
            ]);
            // If validation fails, return the error response
            if ($validator->fails()) {
                return response()->json([
                    'error' => $validator->errors()->first()
                ], 400);
            }
            // Create a new instance of the Twawzef model and fill it with the request data
            $service = new ServiceRequestModel();
            $service->name = $request->input('type');
            $service->name = $request->input('name');
            $service->email = $request->input('email');
            $service->phone = $request->input('phone');
            if(!empty($request->input('notes')))
            {
                $service->note = $request->input('notes');
            }
            // Save the Twawzef model to the database
            $service->save();
            // Return a success response
            return redirect()->back()->with('success' , 'Data Is Saved Successfuly') ;
        }

       public function  home()
       {
            return  view('site.Home') ;
       }

       public function  about()
       {
            return  view('site.about') ;
       }

       public function  Serives()
       {
            return  view('site.Serives') ;
       }
       public function  contact()
       {
            return  view('site.contact') ;
       }
    }
