<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogdetail;
use App\Models\Blog;


use Illuminate\Http\Request;
use App\Http\Requests\Blogdetail\AddRequest;
use App\Http\Requests\Blogdetail\EditRequest;

class BlogdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blogdetail::search()->paginate(10);

        
        $cate = Blogdetail::orderBy('name', 'ASC')->get();
        return view('admin.blogdetail.index', compact('data','cate'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Blog::orderBy('name', 'ASC')->get();
        return view('admin.blogdetail.create', compact('cate'));
        
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
            $image= 'cate_blog'.'-'.time().'.'.$info['extension'];
            $request->myfile->move(public_path('uploads') , $image);
            
        }
        $request->merge(['image' => $image]);

        if($catb = Blogdetail::create($request->all())){    
            
            return redirect()->route('blogdetail.index')->with('yes', 'Thêm mới blog thành công');
        }
           
        return redirect()->back()->with('no', 'Thêm mới blog ko thành công');

       
        
            

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $Blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blogdetail $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
       
        $model = Blogdetail::find($id);
        if($model){
            
           
        
            $cate = Blog::orderBy('name', 'ASC')->get();
           
            // dd($colors);

            return view('admin.blogdetail.edit', compact('model','cate'));
        }
        return abort(404);
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blogdetail  $blg
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, Blogdetail $blogdetail)
    {
         

        $image = $blogdetail->image;
            if($request->has('myfile')){
                $image_name = $request->myfile->getClientOriginalName();
                $info = pathinfo($image_name);
                $image= 'php'.'-'.time().'.'.$info['extension'];
                $request->myfile->move(public_path('uploads') , $image);
                // dd($image);
                
            }
        
        
        $request->merge(['image' => $image]);


        if($blogdetail->update($request->only('name', 'image','status', 'description',  'cate_blog_id', 'created_at'))){
            return redirect()->route('blogdetail.index')->with('yes', 'Cập nhật sản phẩm thành công');
        }
        return redirect()->back()->with('no', 'Cập nhật sản phẩm ko thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $blg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blg = Blogdetail::find($id);
            if($blg->delete()){
                return redirect()->back()->with('yes', 'Xóa sản phẩm thành công');
            }
            return redirect()->back()->with('no', 'Xóa sản phẩm ko thành công');
        }
      
}
