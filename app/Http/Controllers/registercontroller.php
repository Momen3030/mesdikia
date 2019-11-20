<?php

namespace App\Http\Controllers;

use App\Register_user;
use App\User;
use Illuminate\Http\Request;

class registercontroller extends Controller
{
    public function store(Request $request){
        if($request->isMethod('post')) {
            $register_model = new User();
            $un = $register_model->name = $request->get('user');
            $em = $register_model->email = $request->get('email');
            $ps = $register_model->password = Hash::make($request->get('pass'));
            echo $un,$em,$ps;
            $register_model->save();
            $id=$register_model->id;
            return redirect()->route('add_product',
                [
                    'email'=>$request->session()->put('email',$em),
                    'password'=>$request->session()->put('password',$ps),
                    'id'=>$request->session()->put('id',$id),
                    'name'=>$request->session()->put('name',$un)
                ]);
        }
        return view('MenubarViews.mesdakia');
    }

}
