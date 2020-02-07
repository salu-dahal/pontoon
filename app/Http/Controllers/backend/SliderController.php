<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Model\Slide;
use Illuminate\Http\Request;

class SliderController extends backendController
{
    public function slider(Request $request)
    {
        $slider= Slide::all();
        $this->data('slide',$slider);
        $this->data('slider', $this->title( 'slider'));
        return view($this->pagePath . 'slider.slider', $this->data);
    }
    public function add_slider(Request $request)
    {
        if ($request->isMethod('get')) {
            return view($this->pagePath . 'slider.add_slider', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required'
            ]);
            $data =new data();
            $data->title = $request->title;
            $data->description = $request->description;
    
            //image upload
            if ($request->hasFile('upload')) {
                $file = $request->file('upload');
                $ext = $file->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('backend/uploads/images');
                if (!$file->move($uploadPath, $image)) {
                    return redirect()->back()->with('error', 'Image not inserted');
                }
            }
            $data->image = $image;
            if ($data->save()) {
                return redirect()->back()->with('success', 'Slider Added Successfully');
            }


        }
    }
}
    