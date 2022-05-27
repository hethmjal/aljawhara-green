<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index()
    {

        $services = Service::get();
        return view('admin.dashboard.services',['services'=>$services]);
    }

    public function add()
    {
        return view('admin.dashboard.add-service');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'detailes'=>'required',
            'image'=>'required',
        ]);
        $data = $request->all();

        if ($request->hasFile('image')) {
           
            // Filename To store
            $filenameWithExt = $request->file('image')->getClientOriginalName ();
            $fileNameToStore = time(). '_'. $filenameWithExt;
            
               $file = $request->file('image');
               $image=$file->storeAs('/images',$fileNameToStore,[
                   'disk'=>'uploads'
               ]);
             
               $data['image'] = $image;

            }
       
                Service::create($data);

        return redirect()->route('services')->with('success','تم اضافة خدمة بنجاح');
    }

    
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.dashboard.update-service',['service'=>$service]);
    }

    public function update(Request $request,$id)
    { 
        $service = Service::findOrFail($id);
        
        $request->validate([
            'title'=>'required',
            'detailes'=>'required',
        ]);
        $data = $request->all();
            // dd($data);

            if ($request->hasFile('image')) {
               
                // Filename To store
                $filenameWithExt = $request->file('image')->getClientOriginalName ();
                $fileNameToStore = time(). '_'. $filenameWithExt;
                
                   $file = $request->file('image');
                   $image=$file->storeAs('/images',$fileNameToStore,[
                       'disk'=>'uploads'
                   ]);
                 
                   $data['image'] = $image;
                   Storage::disk('uploads')->delete($service->image);

                }
            
                    $service->update($data);
       
            return redirect()->route('services')->with('success',' تم تعديل الخدمة بنجاح  ');

    }
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        // delete image from images folder
        Storage::disk('uploads')->delete($service->image);
        Service::destroy($id);
        return redirect()->route('services')->with('success','تم حذف الخدمة بنجاح');
    }
}