<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Products;
use App\Models\Suppliers;
use App\Models\SubCategory;
use App\Models\MainCategory;
use App\Models\RootCategory;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Return Front End Home Page.
     * @return JsonResponse Return All The Brands Data As A Data Table Response
     */
    public function returnHomePage(Request $request): JsonResponse
    {
        $sliderImages=Slider::get();
        $category=RootCategory::with('MainCategories')->get();
        $product=Products::orderBy('updated_at','desc')->take(11)->get();
        $suppliers=Suppliers::orderBy('rate_number','desc')->where('is_blocked',0)->with('BusinessType')->take(5)->get();
        $array=array('images'=>$sliderImages,'category'=>$category,'product'=>$product,'suppliers'=>$suppliers);
        return response()->json(['Data'=>$array,'Code'=>200]);

    }



    /**
     * Return Front End Home Page.
     * @return JsonResponse Return All The Brands Data As A Data Table Response
     */
    /*
    public function returnCategoryProductsPage(Request $request,$id): JsonResponse
    {
        $product=Products::orderBy('updated_at','desc')->where('sub_category_id',$id)->get();
        $subCategoryName=SubCategory::whereId($id)->first();
        $mainCategoryName=MainCategory::whereId($subCategoryName->main_category_id)->first();
        $rootCategoryName=RootCategory::whereId($mainCategoryName->root_category_id)->first();
        return response()->json(['Data'=>$product,'categoryData'=>['rootCategory'=>$rootCategoryName,'mainCategory'=>$mainCategoryName,'subCategory'=>$subCategoryName],'Code'=>200]);

    }
*/
    /**
     * Search Result In Navbar Section.
     * @return JsonResponse Return All The search Data As JSON Response
     */
    public function SearchResultInNavbarSection(Request $request): JsonResponse
    {
        $searchType=$request->input('searchType');
        $searchValue=$request->input('word');
        if($searchType){
            $Data=Products::join('suppliers','suppliers.id','=','products.supplier_id')->
            join('sub_categories','sub_categories.id','=','products.sub_category_id')->
            where(function($query) use ($searchValue) {
                return $query-> where('products.product_name', 'like', '%' .$searchValue . '%')
                    ->orWhere('products.price', 'like', '%' .$searchValue . '%')
                    ->orWhere('products.short_description', 'like', '%' .$searchValue . '%')
                    ->orWhere('suppliers.supplier_name', 'like', '%' .$searchValue . '%')
                    ->orWhere('sub_categories.name_en', 'like', '%' .$searchValue . '%');
            })->get();
            $resultNumber=Products::join('suppliers','suppliers.id','=','products.supplier_id')->
            join('sub_categories','sub_categories.id','=','products.sub_category_id')->
            where(function($query) use ($searchValue) {
                return $query-> where('products.product_name', 'like', '%' .$searchValue . '%')
                    ->orWhere('products.price', 'like', '%' .$searchValue . '%')
                    ->orWhere('products.short_description', 'like', '%' .$searchValue . '%')
                    ->orWhere('suppliers.supplier_name', 'like', '%' .$searchValue . '%')
                    ->orWhere('sub_categories.name_en', 'like', '%' .$searchValue . '%');
            })->select('count(*) as allcount')->count();
        }else{
            $Data=Suppliers::with('BusinessType')->
            join('business_types','suppliers.business_type_id','=','business_types.id')->
            where(function($query) use ($searchValue) {
                return $query-> where('suppliers.supplier_name', 'like', '%' .$searchValue . '%')
                    ->orWhere('suppliers.phone_number', 'like', '%' .$searchValue . '%')
                    ->orWhere('suppliers.email', 'like', '%' .$searchValue . '%')
                    ->orWhere('suppliers.countryCode', 'like', '%' .$searchValue . '%')
                    ->orWhere(function($query) use ($searchValue) {
                        $query ->whereHas('BusinessType', function($query) use ($searchValue)  {
                            $query->where('en_name', 'like', '%' .$searchValue . '%');
                        });
                    });
            })->where('is_blocked',0)->get();
            $resultNumber=Suppliers::with('BusinessType')->
            join('business_types','suppliers.business_type_id','=','business_types.id')->
            where(function($query) use ($searchValue) {
                return $query-> where('suppliers.supplier_name', 'like', '%' .$searchValue . '%')
                    ->orWhere('suppliers.phone_number', 'like', '%' .$searchValue . '%')
                    ->orWhere('suppliers.email', 'like', '%' .$searchValue . '%')
                    ->orWhere('suppliers.countryCode', 'like', '%' .$searchValue . '%')
                    ->orWhere(function($query) use ($searchValue) {
                        $query ->whereHas('BusinessType', function($query) use ($searchValue)  {
                            $query->where('en_name', 'like', '%' .$searchValue . '%');
                        });
                    });
            })->where('is_blocked',0)->select('count(*) as allcount')->count();
        }

        return response()->json(['Data'=>$Data,'ResultNumber'=>$resultNumber,'Code'=>200]);

    }

    /**
     * Search Result In Search Page.
     * @return JsonResponse Return All The search Data As JSON Response
     */
    public function SearchResultInSearchPage(Request $request): JsonResponse
    {
        $searchType=$request->input('searchType');
        $searchValue=$request->input('word');
        if($searchType){
            $Data=Products::where('product_name', 'like', '%' .$searchValue . '%')->get();
            $resultNumber=Products::where('product_name', 'like', '%' .$searchValue . '%')->select('count(*) as allcount')->count();
        }else{
            $Data=Suppliers::with('BusinessType')->where('supplier_name', 'like', '%' .$searchValue . '%')->where('is_blocked',0)->get();
            $resultNumber=Suppliers::with('BusinessType')->where('supplier_name', 'like', '%' .$searchValue . '%')->where('is_blocked',0)->select('count(*) as allcount')->count();
        }

        return response()->json(['Data'=>$Data,'ResultNumber'=>$resultNumber,'Code'=>200]);

    }

    public function SearchForProductsOrSuppliers(Request $request)
    {
        $category_id=$request->input('category_id');
        $SearchType=$request->input('Search_type');
        $searchValue=$request->input('search');
        if($SearchType == "products"){
            $data=Products::where('product_name', 'like', '%' .$searchValue . '%')->get();
            $resultNumber=Products::where('product_name', 'like', '%' .$searchValue . '%')->count();
        }else{
            $data=Suppliers::with('BusinessType')->where('supplier_name', 'like', '%' .$searchValue . '%')->where('is_blocked',0)->get();
            $resultNumber=Suppliers::with('BusinessType')->where('supplier_name', 'like', '%' .$searchValue . '%')->where('is_blocked',0)->count();
        }

        return view('site.user.search', compact('data','resultNumber','SearchType','searchValue')) ;

    }

    public function SearchAutoComplete(Request $request)
    {
        $SearchType=$request->input('Search_type');
        $searchValue=$request->input('search');

        if($SearchType == "products"){
            $data=Products::where('product_name', 'like', '%' .$searchValue . '%')->get();
            $resultNumber=Products::where('product_name', 'like', '%' .$searchValue . '%')->count();
        }else{
            $data=Suppliers::with('BusinessType')->where('supplier_name', 'like', '%' .$searchValue . '%')->where('is_blocked',0)->get();
            $resultNumber=Suppliers::with('BusinessType')->where('supplier_name', 'like', '%' .$searchValue . '%')->where('is_blocked',0)->count();
        }
        $str = "<div class='searchResult'>";
        foreach($data as $d)
        {
            if($SearchType == "products")
            {
                $img = asset(ASSET_URL.$d->image_base64);

                if(!empty($d->image_base64) && file_exists(public_path(ASSET_URL.$d->image_base64)))
                {
                    $img = asset(ASSET_URL.$d->image_base64);
                }else
                {
                    $img =  asset(ASSET_URL.'site/assets/image/default.jpg') ;
                }


                $url = url('product/'.$d->id);
                $str.='<a href="'.$url.'"><li>
                <img class="card-img-top" style="width:50px;height:50px"
                src="'.$img.'" alt="Card image cap">'.$d->product_name.'</li></a>';
            }else{

                $img = asset(ASSET_URL.$d->supplier_image_base64);

                if(!empty($d->supplier_image_base64) && file_exists(public_path(ASSET_URL.$d->supplier_image_base64)))
                {
                    $img = asset(ASSET_URL.$d->supplier_image_base64);
                }else
                {
                    $img =  asset(ASSET_URL.'site/assets/image/default.jpg') ;
                }
                $url = url('supplier_data/'.$d->id);
                $str.='<a href="'.$url.'"><li>
                <img class="card-img-top" style="width:50px;height:50px"
                src="'.$img.'" alt="Card image cap">'.$d->supplier_name.'</li></a>';
            }

        }
        $str .= "</div>";
        $productchecked = $SearchType == "products" ? "checked" : "";
        $supplierchecked = $SearchType == "suppliers" ? "checked" : "";

        $str .= '<span style="color:#f78c0f">
        '.$resultNumber.' Result Found
        Looking For : <input '.$productchecked.' class="Search_type"  id="prod" type="radio" name="Search_type" value="products"> <label for="prod">Products</label>
        <input '.$supplierchecked.'  class="Search_type"  id="sup"  type="radio" name="Search_type" value="suppliers"> <label for="sup">Suppliers</label></span>';

        return $str;
    }
    /**
     * Return All Product.
     * @return JsonResponse Return All The Product Data As JSON Response
     */
    public function returnAllProductsPage(Request $request)
    {
        $products=Products::orderBy('updated_at','desc')->get();
        return  view('site.products.all_recently_products' , compact('products')) ;
    }
  public function viewmoresuppliers()
  {
      $suppliers = Suppliers::orderBy('updated_at','desc')->paginate(8);
      return  view('site.supplers.all_recently_supplers' , compact('suppliers')) ;
  }
    /**
     * Return  Product By ID.
     * @return JsonResponse Return  The Product Data As JSON Response
     */
    public function returnProductsPage(Request $request,$id)
    {
        $locale = App::getLocale();
        if ($locale == 'zh') {
            $locale = 'ch';
        }
        if ($locale == 'tr') {
            $locale = 'tur';
        }
        $product = Products::whereId($id)->first();
        $tabs =  DB::table('producttabs')->select('id','title','content')->where('product_id' ,$product->id)->orderBy('id' , 'DESC')->get() ;
        $subCategoryName = SubCategory::select('id', 'main_category_id', 'name_' . $locale . ' as name')
        ->whereId($product->sub_category_id??'')->first();
        $mainCategoryName = MainCategory::select('id', 'root_category_id', 'name_' . $locale . ' as name')
        ->whereId($subCategoryName->main_category_id??'')->first();
        $rootCategoryName = RootCategory::select('id', 'name_' . $locale . ' as name')->whereId($mainCategoryName->root_category_id??'')->first();

        $supplier = Suppliers::find($product->supplier_id);

        return view('site.products.product_details', compact('product','tabs', 'rootCategoryName', 'mainCategoryName', 'subCategoryName','supplier'));
    }
    public function getSupplierProfileDataForGuest(Request $request,$id): JsonResponse
    {
        $Supplier=Suppliers::whereId($id)->with(['BusinessType','ContactPersonData','AlbumsData','FAQsData','SupplierActivitiesData','SupplierAddressData'])->first();
        $Supplier->stockProducts=Products::where('supplier_id',$id)->where('is_stock',1)->select(['id','product_name','supplier_id','sub_category_id','price','short_description','image_base64','is_stock'])->get();
        $arrayOfActivities=array();
        if($Supplier->SupplierActivitiesData){
            foreach ($Supplier->SupplierActivitiesData->main_category_ids as $activity){
                $main_category=RootCategory::whereId($activity)->first();
                $subCategory=MainCategory::whereIn('id',$Supplier->SupplierActivitiesData->sub_category_ids)->where('root_category_id',$activity)->get();
                $SubCategoriesNamesEN='';
                $SubCategoriesNamesAR='';
                $SubCategoriesNamesTUR='';
                $SubCategoriesNamesCH='';
                foreach ($subCategory as $cat){
                    $SubCategoriesNamesEN=$SubCategoriesNamesEN.$cat->name_en.' ,';
                    $SubCategoriesNamesAR=$SubCategoriesNamesAR.$cat->name_ar.' ,';
                    $SubCategoriesNamesTUR=$SubCategoriesNamesTUR.$cat->name_tur.' ,';
                    $SubCategoriesNamesCH=$SubCategoriesNamesCH.$cat->name_en.' ,';
                }
                $newObject=new \stdClass();
                $newObject->MainCategoryNameEn=$main_category->name_en;
                $newObject->MainCategoryNameAr=$main_category->name_ar;
                $newObject->MainCategoryNameTur=$main_category->name_tur;
                $newObject->MainCategoryNameCh=$main_category->name_ch;
                $newObject->subCategoryNameEn=$SubCategoriesNamesEN;
                $newObject->subCategoryNameAr=$SubCategoriesNamesAR;
                $newObject->subCategoryNameTur=$SubCategoriesNamesTUR;
                $newObject->subCategoryNameCh=$SubCategoriesNamesCH;
                $arrayOfActivities[] = $newObject;
            }
        }
        $arrayOfActivitiesProductsByActivities=array();
        $finishedRootCategory=array();
        if($Supplier->SupplierActivitiesData){
            foreach ($Supplier->SupplierActivitiesData->main_category_ids as $activity){
                $root_category=RootCategory::whereId($activity)->first();
                if(!in_array($root_category->id, $finishedRootCategory)){
//                        $root_category=RootCategory::whereId($root_category->id)->first();
                    $finishedRootCategory[] = $root_category->id;
                    $root_category->main_category=MainCategory::whereIn('id',$Supplier->SupplierActivitiesData->sub_category_ids)->where('root_category_id',$root_category->id)->get();
                    for ($i=0;$i<count($root_category->main_category);$i++){
                        unset($root_category->main_category[$i]->SubCategories);
                        $root_category->main_category[$i]->SubCategoriesForUser=SubCategory::where('main_category_id',$root_category->main_category[$i]->id)->get();
                        for ($j=0;$j<count($root_category->main_category[$i]->SubCategoriesForUser);$j++){
                            $root_category->main_category[$i]->SubCategoriesForUser[$j]->products=Products::where('sub_category_id',$root_category->main_category[$i]->SubCategoriesForUser[$j]->id)->where('supplier_id',$id)->get();
                        }
                    }
                    $arrayOfActivitiesProductsByActivities[] = $root_category;
                }

            }
        }
        $Supplier->ActivitiesName=$arrayOfActivities;
        $Supplier->ProducsOfCategory=$arrayOfActivitiesProductsByActivities;
        return response()->json(['SupplierMainData'=>$Supplier,'Code'=>200]);
    }

    /**
     * Rate The Supplier.
     * @return JsonResponse Return   Data As JSON Response
     */
    public function RateSupplier(Request $request): JsonResponse
    {
        $rateNumber=$request->input('rate_number');
        $Supplier=Suppliers::whereId($request->input('supplier_id'))->first();
        $oldRateNumber = $Supplier->rate_number;
        $oldCounter = $Supplier->counter;
        $rateNumber = ($oldRateNumber*$oldCounter+$rateNumber)/($oldCounter+1);
        $counter=$oldCounter+1;
        $supplierUpdate=Suppliers::whereId($request->input('supplier_id'))->update(['counter'=>$counter,'rate_number'=>$rateNumber]);
        return response()->json(['Data'=>'Done Rating The Supplier','Code'=>200]);

    }
}
