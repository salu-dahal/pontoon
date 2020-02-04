<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\Admin;

class AdminController extends backendController
{
    public function index(Request $request)
    {

        return view($this->pagePath . 'admin.admin-users', $this->data);

    }
    public function add(Request $request){
        if ($request->isMethod('get')){
            return view($this->pagePath . 'admin.add-admin',$this->data);
        }
        if ($request->isMethod('post')){
            $this->validate($request, [
                'name' => 'required',
                'username' => 'required|min:3|max:20|unique:admins,username',
                'email' => 'required|email|unique:admins,email',
                'password' => 'required|min:3|max:20|confirmed',
                'upload' => 'required|mimes:jpg,jpeg,png,gif'


            ]);
            $admin = new Admin();
            $admin->name= $request->name;
            $admin->email= $request->email;
            $admin->password= bcrypt($request->password);
            //----image upload process
            //image upload
            if ($request->hasFile('upload')) {
                $file = $request->file('upload');
                $ext = $file->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('backend/uploads/images/admin');
                if (!$file->move($uploadPath, $imageName)) {
                    return redirect()->back()->with('error', 'Image not inserted');
                }
            }

            $admin->image = $imageName;
            if ($admin->save()) {
                return redirect()->route('admin-users')->with('success', 'data was successfully inserted' . $request->name);
            }


        }
    }


}
