<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests\Category\AddRequest;
use App\Http\Requests\Category\EditRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::search()->paginate(5);
        $cats = Category::orderBy('name', 'ASC')->get();

        return view('admin.category.index', compact('data', 'cats'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('name', 'ASC')->get();

        return view('admin.category.create', compact('cats'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        if(Category::create($request->all())){
            return redirect()->route('category.index')->with('yes', 'Thêm mới danh mục thành công');
        } else {
            return redirect()->back()->wiwth('no', 'Thêm mới danh mục thất bại');
        }
    }

    

    

   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Category::find($id);
        $cats = Category::orderBy('name', 'ASC')->get();

        if($model){
            return view('admin.category.edit', compact('model', 'cats'));
        }
        return abort(404);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, Category $category)
    {
        if($category->update($request->only('name', 'status', 'parent_id', 'prioty'))){
            return redirect()->route('category.index')->with('yes', 'Cập nhật thành công');
        }
        return redirect()->back()->with('no', 'Cập nhật ko thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->pro->count() == 0){
            if($category->delete()){
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
                $category = Category::find($id);
                if($category->pro->count() == 0){
                    $category->delete();
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