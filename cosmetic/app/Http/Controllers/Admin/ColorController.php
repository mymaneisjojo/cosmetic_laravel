<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Color;
use Illuminate\Http\Request;

use App\Http\Requests\Color\AddRequest;
use App\Http\Requests\Color\EditRequest;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Color::search()->paginate(5);
        return view('admin.color.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = Color::orderBy('name', 'ASC')->get();

        return view('admin.color.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        if(Color::create($request->all())){
            return redirect()->route('color.index')->with('yes', 'Thêm mới màu thành công');
        } else {
            return redirect()->back()->wiwth('no', 'Thêm mới màu thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Color::find($id);
        $colors = Color::OrderBy('name', 'ASC')->get();

        if($model){
            return view('admin.color.edit', compact('model', 'colors'));
        }
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, Color $color)
    {
        if($color->update($request->only('name', 'status', 'parent_id', 'prioty'))){
            return redirect()->route('color.index')->with('yes', 'Cập nhật màu thành công');
        }
        return redirect()->back()->with('no', 'Cập nhật màu ko thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
        if($color->prod->count() == 0){
            if($color->delete()){
                return redirect()->back()->with('yes', 'Xóa màu thành công');
            }
            return redirect()->back()->with('no', 'Xóa màu ko thành công');
        }
        return redirect()->back()->with('no', 'Màu này đang có sản phẩm');
    }
}
