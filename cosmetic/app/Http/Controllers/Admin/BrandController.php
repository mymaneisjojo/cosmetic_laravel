<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Brand::search()->paginate(5);

        return view('admin.brand.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $cats = brand::where('parent_id', 0)->orderBy('name', 'ASC')->get();

        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Brand::create($request->all())){
            return redirect()->route('brand.index')->with('yes', 'Thêm mới thương hiệu thành công');
        } else {
            return redirect()->back()->wiwth('no', 'Thêm mới thương hiệu thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Brand::find($id);
        $brad = Brand::orderBy('name', 'ASC')->get();

        if($model){
            return view('admin.brand.edit', compact('model', 'brad'));
        }
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        if($brand->update($request->only('name', 'status', 'parent_id', 'prioty'))){
            return redirect()->route('brand.index')->with('yes', 'Cập nhật thành công');
        }
        return redirect()->back()->with('no', 'Cập nhật ko thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        if($brand->pro->count() == 0){
            if($brand->delete()){
                return redirect()->back()->with('yes', 'Xóa thành công');
            }
            return redirect()->back()->with('no', 'Xóa ko thành công');
        }
        return redirect()->back()->with('no', 'thương hiệu này đang có sản phẩm');
    }
}
