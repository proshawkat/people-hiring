<?php

namespace App\Http\Controllers;

use App\Order;
use App\OurServices;
use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    public function getServices()
    {
        $services = OurServices::get();
        return view('admin.pages.services.show', compact('services'));
    }

    public function create()
    {
        return view('admin.pages.services.create');
    }

    public function insert(Request $request){
//        dd($request->all());
        $this->validate($request, [
                'title' => 'required',
                'price' => 'required',
                'image' => 'required',
            ]);

        $service = new OurServices();
        $service->title = $request->title;
        $service->price = $request->price;
        $service->short_details = $request->short_details;
        $service->details = $request->details;

        $extension = $request->file('image')->getClientOriginalExtension();

        $filename = uniqid() . '_' . time() . '.' . $extension;
        $file = $request->file('image');
        $destinationPath = public_path('uploads/service');
        $path = $file->move($destinationPath, $filename);
        $service->image = $filename;

        $service->save();
        return redirect('admin/services')->with('flash_message', 'Category added!');
    }

    public function edit($id){
        $service = OurServices::find($id);
        return view('admin.pages.services.edit', compact('service'));
    }

    public function update(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $service = OurServices::find($request->id);

        $service->title = $request->title;
        $service->price = $request->price;
        $service->short_details = $request->short_details;
        $service->details = $request->details;

        if($request->file('image') != NULL){
            $extension = $request->file('image')->getClientOriginalExtension();

            $filename = uniqid() . '_' . time() . '.' . $extension;
            $file = $request->file('image');
            $destinationPath = public_path('uploads/service');
            $path = $file->move($destinationPath, $filename);
            $service->image = $filename;
        }else{
            $service->image = $request->old_img;
        }


        $service->save();


        return redirect('admin/services')->with('message', 'Service Update Successfully!');
    }

    public function delete($id){
        $order = Order::where('ser_id', $id)->exists();

        if($order) {
            return redirect()->back()->with([
                'status' => 'This service already used.'
            ]);
        }

        OurServices::where([
            'id' => $id
        ])->delete();

        return redirect()->back()->with([
            'status' => 'Successfully deleted.'
        ]);
    }

}
