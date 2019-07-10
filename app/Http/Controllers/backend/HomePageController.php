<?php

namespace App\Http\Controllers\backend;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\home_page_client;
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

    public function services()
    {
        return view('backend.home-services-and-features');
    }

    public function clients()
    {
        return view('backend.home-show-clients');
    }
    public function clientsAdd()
    {
        return view('backend.home-add-clients');
    }

    public function aboutUs()
    {
        return view('backend.about-us');
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return ("create page");
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'photo'=> 'required|mimes:jpeg,jpg,png'
             ]);

        $photo = $request->file('photo');
        $slug = str_slug($request->name);
        if (isset($photo))
        {
            $currentDate = Carbon::now()->toDateString();
            $photoname = $slug.'-'.$currentDate.'.'. $photo->getClientOriginalExtension();
            if (!file_exists('backend/images/client'))
            {
                mkdir('backend/images/client',0777,true);
            }
            $photo->move('backend/images/client',$photoname);
        }else{
            $photoname = "backend/images/client/default.jpg";
        }

        $client = new home_page_client();
        $client->name=$request->name;
        $client->phone=$request->phone;
        $client->address=$request->address;
        $client->photo=$photoname;
        $client->save();

        // Toastr::success('Product Added Successfully','Success',["positionClass" => "toast-top-right"]);
        return redirect()->route('homePage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
