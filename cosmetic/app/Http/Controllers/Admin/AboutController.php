<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Requests\About\AddRequest;
use App\Http\Requests\About\EditRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
            $data = About::orderBy('created_at', 'ASC')->get();  
            return view('admin.about.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = About::orderBy('name', 'ASC')->get();
        return view('admin.about.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
 
        $image = '';
      
        
        if($request->has('myfile')){
            
            $image_name = $request->myfile->getClientOriginalName();
            $info = pathinfo($image_name);
            $image= 'about'.'-'.time().'.'.$info['extension'];
            $request->myfile->move(public_path('uploads') , $image);
            
        }
        $request->merge(['image' => $image]);
        
        if($pros = About::create($request->all())){
              
                
            
            return redirect()->route('about.index')->with('yes', 'Thêm mới about thành công');
        }
           
        return redirect()->back()->with('no', 'Thêm mới about ko thành công');

       
        
            

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $model = About::find($id);
        if($model){
        
            return view('admin.about.edit', compact('model'));
        }
        return abort(404);
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {   
        $about=About::find($id);
        $image = $about->image;
            if($request->has('myfile')){
                $image_name = $request->myfile->getClientOriginalName();
                $info = pathinfo($image_name);
                $image= 'about'.'-'.time().'.'.$info['extension'];
                $request->myfile->move(public_path('uploads') , $image);
                // dd($image);
                
            }
        
        
        $request->merge(['image' => $image]);


        if($about->update($request->only('name', 'image','status', 'description', 'created_at'))){
            return redirect()->route('about.index')->with('yes', 'Cập nhật about thành công');
        }
        // return redirect()->back()->with('no', 'Cập nhật about ko thành công');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        if($about){
            if($about->delete()){
                return redirect()->back()->with('yes', 'Xóa about thành công');
            }
            return redirect()->back()->with('no', 'Xóa about ko thành công');
        }
        return redirect()->back()->with('no', 'about này đang có danh mục');
        
    }
}