<?php

namespace App\Http\Controllers\backend;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\home_page_client;
use App\backend\HomePageServices;
use App\backend\PackageAndPrice;
use App\backend\software;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.home-page');
    }

    public function slider()
    {
        return view('backend.home-slider');
    }

    // ========================About start======================================
    public function aboutUs()
    {
        return view('backend.about-us');
    }
// ========================About start======================================






// ========================services start======================================
    public function services()
    {
        $services=HomePageServices::all();
        return view('backend.home-services-and-features', compact('services'));
    }

    public function servicesAdd()
    {
         return view('backend.services.home-add-services');
    }
    
     public function servicesStore(Request $request)
    {
         $this->validate($request,[
            'title'=> 'required',
            'sub_title'=> 'required',
            'description'=> 'required',
            'photo'=> 'required|mimes:jpeg,jpg,png'
             ]);
          // return $request;
        $photo = $request->file('photo');
        $slug = str_slug($request->title);
        if (isset($photo))
        {
            $currentDate = Carbon::now()->toDateString();
            $photoname = $slug.'-'.$currentDate.'-'.uniqid().'.'. $photo->getClientOriginalExtension();
            if (!file_exists('frontend/assets/img/services'))
            {
                mkdir('frontend/assets/img/services',0777,true);
            }

            $photo->move('frontend/assets/img/services',$photoname);

        }else{
            $photoname = "frontend/assets/img/services/default.jpg";
        }

        $services = new HomePageServices();
        $services->title=$request->title;
        $services->sub_title=$request->sub_title;
        $services->description=$request->description;
        $services->photo=$photoname;
        $services->save();

        Toastr::success('service Added','',["positionClass" => "toast-top-right"]);
        
        return redirect()->route('homeServices');
    }
    
    public function servicesDestroy($id)
    {
        $service = HomePageServices::find($id);
        if (file_exists('frontend/assets/img/services/'.$service->photo))
        {
            unlink('frontend/assets/img/services/'.$service->photo);
        }
        $service->delete();

        Toastr::error('Service Deleted',':)',["positionClass" => "toast-top-right"]);
        return redirect()->route('homeServices');
    }
// ========================services End======================================

// ========================clients start======================================
    public function clients()
    {
        
        $clients=home_page_client::all();
        return view('backend.home-show-clients', compact('clients'));
    }
    public function clientsAdd()
    {
        return view('backend.home-add-clients');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'photo'=> 'required|mimes:jpeg,jpg,png'
             ]);
        // return $request;
        $photo = $request->file('photo');
        $slug = str_slug($request->name);
        if (isset($photo))
        {
            $currentDate = Carbon::now()->toDateString();
            $photoname = $slug.'-'.$currentDate.'.'. $photo->getClientOriginalExtension();
            if (!file_exists('frontend/assets/img/client'))
            {
                mkdir('frontend/assets/img/client',0777,true);
            }
            $photo->move('frontend/assets/img/client',$photoname);
        }else{
            $photoname = "frontend/assets/img/client/default.jpg";
        }

        $client = new home_page_client();
        $client->name=$request->name;
        $client->phone=$request->phone;
        $client->address=$request->address;
        $client->photo=$photoname;
        $client->save();

        Toastr::success('Client Added','',["positionClass" => "toast-top-right"]);
        
        return redirect()->route('homeOurClients');
    }

    public function clientDestroy($id)
    {
        $client = home_page_client::find($id);
        if (file_exists('frontend/assets/img/client/'.$client->photo))
        {
            unlink('frontend/assets/img/client/'.$client->photo);
        }
        $client->delete();

        Toastr::error('Client Deleted','',["positionClass" => "toast-top-right"]);
        return redirect()->route('homeOurClients');
    }

// ========================clients End======================================

// ========================package start======================================
    public function packagelist()
    {

       $packages=PackageAndPrice::all();
        return view('backend.package.packages-and-price-list',compact('packages'));
    }
    
     public function packageStore(Request $request)
    {
        $this->validate($request,[
            'title'=> 'required',
            // 'sub_title'=> 'required',
            'price'=> 'required',
            'description'=> 'required'
             ]);
        
        $packages = new PackageAndPrice();
        $packages->title=$request->title;
        $packages->sub_title=$request->sub_title;
        $packages->price=$request->price;
        $packages->description=$request->description;
        $packages->save();

        Toastr::success('Package Added','',["positionClass" => "toast-top-right"]);
        
        return redirect()->route('package');
    }
    public function packageAdd()
    {
        return view('backend.package.add-package');
    }

    public function packageDestroy($id)
    {

      $package = PackageAndPrice::find($id);
      $package->delete();

       Toastr::error('Package Deleted','',["positionClass" => "toast-top-right"]);
      return redirect()->route('package');
    }
// ========================package end======================================



// ========================Software start======================================
public function softwareList()
    {

       $softwares=software::all();
        return view('backend.software.software-list',compact('softwares'));
    }

public function softwareEdit($id)
    {
       $software = software::find($id);
       return view('backend.software.software-edit',compact('software'));
    }
public function softwareUpdate(Request $request)
    {
        // return $request;
        $software = software::find($request->id);
        $manual =$request->file('user_manual');
        if (isset($manual))
        {
            unlink('frontend/assets/user_manual/'.$software->user_manual);
            $currentDate = Carbon::now()->toDateString();
            $manualname = $currentDate.'-'.uniqid().'.'. $manual->getClientOriginalExtension();
            $manual->move('frontend/assets/user_manual/',$manualname);
        }else{
            $manualname = $software->user_manual;
        }
        //return $request;
        $software = software::find($request->id);
        $software->user_manual=$manualname;
        $software->apple_app_link=$request->apple_app_link;
        $software->android_app_link=$request->android_app_link;
        $software->save();

        Toastr::success('Software Update','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('softwareList');
    }

// ========================Software end======================================
   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
