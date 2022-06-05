<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Blog;
use Illuminate\Http\Request;

use App\Http\Requests\Blog\AddRequest;
use App\Http\Requests\Blog\EditRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::search()->paginate(10);
        $catebg = Blog::orderBy('name', 'ASC')->get();

        return view('admin.blog.index', compact('data', 'catebg'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catebg = Blog::orderBy('name', 'ASC')->get();


        return view('admin.blog.create', compact('catebg'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
  
        if(Blog::create($request->all())){
            return redirect()->route('blog.index')->with('yes', 'Thêm mới danh mục thành công');
        } else {
            return redirect()->back()->wiwth('no', 'Thêm mới danh mục thất bại');
        }
    }

    

    

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $cate_blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cate_blog  $cate_blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Blog::find($id);
        $catebg = Blog::orderBy('name', 'ASC')->get();

        if($model){
            return view('admin.blog.edit', compact('model', 'catebg'));
        }
        return abort(404);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $cate_blog
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request,$id)
    {
        $catebg = Blog::find($id);
        if($catebg->update($request->only('name', 'status', 'parent_id', 'prioty'))){
            return redirect()->route('blog.index')->with('yes', 'Cập nhật thành công');
        }
        return redirect()->back()->with('no', 'Cập nhật ko thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $cate_blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Blog::find($id);
        if($cat->catebg->count() == 0){
            if($cat->delete()){
                return redirect()->back()->with('yes', 'Xóa thành công');
            }
            return redirect()->back()->with('no', 'Xóa ko thành công');
        }
        return redirect()->back()->with('no', 'Danh mục này đang có sản phẩm');
        
    }

    public function delete_all(Request $request)
    {
        $n1 = 0;
        $n2 = 0;
        if($request->id){
            foreach($request->id as $id){
                $blog = Blog::find($id);
                if($blog->catb->count() == 0){
                    $blog->delete();
                    $n1++;
                }else {
                    $n2++;
                }
            }
            return redirect()->back()->with('yes', 'Xóa thành công'.' '.$n1. ' and Xóa ko thành công'. $n2);
    
        }
        else {
            return redirect()->back()->with('no', 'Vui lòng chọn mục cần xóa');

        }
        
    }

    
}