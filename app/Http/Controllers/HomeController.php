<?php

namespace App\Http\Controllers;

use App\Models\{Qualification , TawzefModel};
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
        $twawzef->qulifaction = $request->input('qulifaction') ;
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


}
