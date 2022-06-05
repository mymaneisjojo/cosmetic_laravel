<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Banner::orderBy('prioty', 'ASC')->paginate(4);

        return view('admin.banner.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = '';
        $image_list = [];
        if($request->has('myfile')){
            $image_name = $request->myfile->getClientOriginalName();
            $info = pathinfo($image_name);
            $image= 'php'.'-'.time().'.'.$info['extension'];
            $request->myfile->move(public_path('uploads/banner') , $image);
            
        }
        $request->merge(['image' => $image]);


        if(Banner::create($request->only('name', 'status', 'image', 'prioty', 'link', 'description'))){
            return redirect()->route('banner.index')->with('yes', 'them moi thanh cong');
        }
        return redirect()->back()->with('no', 'them moi ko thanh cong');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }

    public function updatePrioty(Request $request)
    {
        // dd($request->prioty);
        for($i= 0; $i< count($request->id); $i++){
            if(Banner::where('id', $request->id[$i])->update(['prioty' => $request->prioty[$i]]));
        
        }
        return redirect()->route('banner.index')->with('yes', 'update thanh cong');

    }
}