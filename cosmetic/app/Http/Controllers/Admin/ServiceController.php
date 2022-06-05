<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;

use App\Http\Requests\Service\AddRequest;
use App\Http\Requests\Service\EditRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::paginate(10);
        $cate = Service::orderBy('summary', 'ASC')->get();
        return view('admin.service.index', compact('data','cate'));
    }

    public function create()
    {
        // $cate = Sevices::orderBy('name', 'ASC')->get();

        return view('admin.service.create');
        
    }

    public function store(AddRequest $request)
    {
        
        $image = '';
      
       
       
        if($request->has('myfile')){
            $image_name = $request->myfile->getClientOriginalName();
            $info = pathinfo($image_name);
            $image= 'service'.'-'.time().'.'.$info['extension'];
            $request->myfile->move(public_path('uploads') , $image);
            
        }
        $request->merge(['image' => $image]);

        if($catb = Service::create($request->all())){    
            
            return redirect()->route('service.index')->with('yes', 'Thêm mới sevice thành công');
        }
           
        return redirect()->back()->with('no', 'Thêm mới sevice ko thành công');

       
        
            

        
    }

    public function edit($id)
    {   
       
        $model = Service::find($id);
        if($model){
            
           
        
          
           
            // dd($colors);

            return view('admin.service.edit', compact('model'));
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
    public function update(EditRequest $request, Service $service)
    {
         

        $image = $service->image;
            if($request->has('myfile')){
                $image_name = $request->myfile->getClientOriginalName();
                $info = pathinfo($image_name);
                $image= 'sevice'.'-'.time().'.'.$info['extension'];
                $request->myfile->move(public_path('uploads') , $image);
                // dd($image);
                
            }
        
        
        $request->merge(['image' => $image]);


        if($service->update($request->only('summary', 'image','status', 'content', 'created_at'))){
            return redirect()->route('service.index')->with('yes', 'Cập nhật service thành công');
        }
        return redirect()->back()->with('no', 'Cập nhật service ko thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $blg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serv = Service::find($id);
            if($serv->delete()){
                return redirect()->back()->with('yes', 'Xóa service thành công');
            }
            return redirect()->back()->with('no', 'Xóa service ko thành công');
        }
}
