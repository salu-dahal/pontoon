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
            $request->validate([
                'title' => 'required',
                'description' => 'required'
            ]);
            if ($request->hasFile('image')) {
//                dd('ok');
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/');
                $title = $request->title;
                $image->move($destinationPath, $title);
                $data['image'] = $title;
            }
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            $create = Slide::create($data);
            if ($create) {
                return redirect()->back()->with('success', 'Slide Added Successfully');
            }
        }
    }

    public function edit_slider(Request $request)
    {
        if ($request->isMethod('get')) {
            $finddata = Slide::where('id', '=', $request->id)->first();
            $this->data('slider', $finddata);
            $this->data('title', $this->title('edit_slider'));
            return view($this->pagePath . 'slider.edit_slider', $this->data);
        }
        if ($request->isMethod('post')) {
            $id = $request->id;
            $request->validate([
                'title' => 'required',
                'description' => 'required'
            ]);
            if ($request->hasFile('image')) {
                $this->delete_file($id);
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $title);
                $data['image'] = $title;
            }
            $data['title'] = $request->name;
            $data['description'] = $request->description;
            $create = Slide::findorfail($id);
            if ($create->update($data)) {
                return redirect()->back()->with('success', 'Details Updated');
            }
        }
    }
}
    