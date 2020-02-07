<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends backendController
{
    public function index(Request $request)
    {

        return view($this->pagePath . 'login.login', $this->data);

    }
        public function login(Request $request)
        {
            if ($request->isMethod('get')) {
                return view($this->backendPath . 'login.login');
            }
            if ($request->isMethod('post')) {
                $this->validate($request, [
                    'username' => 'required',
                    'password' => 'required'

                ], [
                    'username.required' => 'email or username field is required'
                ]);

                $criteria = $request->username;
                $password = $request->password;
                $remember = isset($request->remember) ? true : false;

               /* if (Auth::guard('admin')->attempt(['username' => $criteria, 'password' => $password], $remember)) {
                    return redirect()->intended(route('admin'));
                } else {
                    return redirect()->back()->with('error', 'invalid access');
                }


*/
                Auth::attempt();
            }
        }
        public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin-login');
    }


}
