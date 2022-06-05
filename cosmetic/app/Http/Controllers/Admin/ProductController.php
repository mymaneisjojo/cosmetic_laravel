<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Color;
use App\Models\ProductColor;
use App\Models\Image;

use Illuminate\Http\Request;
use App\Http\Requests\Product\AddRequest;
use App\Http\Requests\Product\EditRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::search()->paginate(4);
        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('name', 'ASC')->get();
        $colors = Color::orderBy('name', 'ASC')->get();
        $brands = Brand::orderBy('name', 'ASC')->get();
        return view('admin.product.create', compact('cats', 'colors', 'brands'));
        
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
        $image1 = '';
        if($request->has('myfile')){
            $image_name = $request->myfile->getClientOriginalName();
            $info = pathinfo($image_name);
            $image= 'php111'.'-'.time().'.'.$info['extension'];
            $request->myfile->move(public_path('uploads') , $image);
            
        }
        $request->merge(['image' => $image]);

        if($pros = Product::create($request->all())){
            if($request->color && $request->image ){
                foreach($request->color as $color_id){
                    ProductColor::create(['product_id' => $pros->id,
                    'color_id' => $color_id
                    ]);
                } 

                
                
                foreach($request->filelist as $k =>$img){
                    $image_name1 = $img->getClientOriginalName();
                    $info = pathinfo($image_name1);
                    $image1= 'php'.'-'.time().$k.'.'.$info['extension'];
                    $image_list[] = $image1; 
                    $img->move(public_path('uploads') , $image1);
                    Image::create(['product_id' => $pros->id,
                    'name' => $image1
                    ]);
                    // dd($image1);
                }
            }
            return redirect()->route('product.index')->with('yes', 'Thêm mới sản phẩm thành công');
        }
           
        return redirect()->back()->with('no', 'Thêm mới sản phẩm ko thành công');

       
        
            

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $model = Product::find($id);
        if($model){
            
            $old_color = [];
            foreach($model->colors as $colo){
                $old_color[] = $colo->id; 
            }
            $old_image = [];
            foreach($model->img as $img){
                $old_image[] = $img->name; 
            }
        
            $cats = Category::orderBy('name', 'ASC')->get();
            $colors = Color::orderBy('name', 'ASC')->get();
            $img = Image::where('product_id', $id)->orderBy('name', 'ASC')->get();
            // dd($img);

            return view('admin.product.edit', compact('model','cats','colors','old_color', 'old_image', 'img'));
        }
        return abort(404);
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, Product $product)
    {
         
        ProductColor::where(['product_id' => $product->id])->delete();
        if($request->color){
            foreach($request->color as $color_id){
                ProductColor::create([
                'product_id' => $product->id,
                'color_id' => $color_id
                ]);
            }   
        }

        $image = $product->image;
            if($request->has('myfile')){
                $image_name = $request->myfile->getClientOriginalName();
                $info = pathinfo($image_name);
                $image= 'php'.'-'.time().'.'.$info['extension'];
                $request->myfile->move(public_path('uploads') , $image);
                
            }
        if(is_array($request->filelist)){
            Image::where(['product_id' => $product->id])->delete();
            $image_list = [];
            
                foreach($request->filelist as $k =>$img){
                    $image_name1 = $img->getClientOriginalName();
                    $info = pathinfo($image_name1);
                    $image1= 'php'.'-'.time().$k.'.'.$info['extension'];
                    $image_list[] = $image1; 
                    $img->move(public_path('uploads') , $image1);
                    Image::create(['product_id' => $product->id,
                    'name' => $image1
                    ]);
                    // dd($image1);
                }
            
        }

        $request->merge(['image' => $image]);


        if($product->update($request->only('name', 'image', 'price', 'sale_price', 'status', 'description',  'category_id', 'created_at'))){
            return redirect()->route('product.index')->with('yes', 'Cập nhật sản phẩm thành công');
        }
        return redirect()->back()->with('no', 'Cập nhật sản phẩm ko thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->cat->count() == 0){
            if($product->delete()){
                return redirect()->back()->with('yes', 'Xóa sản phẩm thành công');
            }
            return redirect()->back()->with('no', 'Xóa sản phẩm ko thành công');
        }
        return redirect()->back()->with('no', 'Sản phẩm này đang có danh mục');
        
    }
}