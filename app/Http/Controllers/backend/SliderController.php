<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Model\Slide;
use Illuminate\Http\Request;

class SliderController extends backendController
{
    public function index(Request $request)
    {

        return view($this->pagePath . 'slider.slider-show', $this->data);

    }
    public function add(Request $request){
        if ($request->isMethod('get')){
            return view($this->pagePath . 'slider.slider-show-add',$this->data);
        }
        if ($request->isMethod('post')){
            $this->validate($request, [
                'image' => 'required|mimes:jpg,jpeg,png,gif',
                'title' => 'required|min:3|max:20|unique:slide,title',
                'description' => 'required|varchar|unique:slide,title'
            ]);

            if ($request->hasFile('image')) {
//                dd('ok');
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('backend/images');
                $image->move($destinationPath, $name);
                $data['image'] = $name;
            }
               $data['image'] = $request->image;
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            $create = Slide::create($data);
            if ($create)
                return redirect()->back()->with('success', 'Slided Image Added Successfully');
            }
        }





}
