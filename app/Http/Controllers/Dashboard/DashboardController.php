<?php

namespace App\Http\Controllers\Dashboard;

use App\Auth_car;
use App\Auth_highValue;
use App\Auth_jewelry;
use App\Auth_property;
use App\Auth_vichle;
use App\cars;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected function orders()
    {
        $car_order = Auth_car::paginate(4);
        $jeweler_order = Auth_jewelry::paginate(4);
        $higvalue_order = Auth_highValue::paginate(4);
        $proparity_order = Auth_property::paginate(4);
        $vicales_order = Auth_vichle::paginate(4);
        return view('dashboard.index',compact('car_order','jeweler_order','higvalue_order','proparity_order','vicales_order'));
    }


    public function shlogin(){
        return view('login');
    }
    public function login(Request $request){
        $email=User::where('email','=',$request->email)->get();
        $password=User::where('password','=',$request->password)->get();
        $userdatas=User::where('role','=',1)->get();
        dd($userdatas);
        foreach ($userdatas as $data){
            if ($data['email']==$request->email && $data['password']==$request->password )
            {
                echo $data['email'];
//                return redirect()->route('dashboard.index');
            }else{
               echo   $request->email;
//                echo $data['email'];
//                echo $data['password'];
////                return redirect()->back();
            }
        }

//        if ($email!=null && $password!=null && User::where('role','=',1))
//        {
//            return redirect()->route('dashboard.index');
//        }
//        else{
//            return redirect()->back();
//        }

    }

}
