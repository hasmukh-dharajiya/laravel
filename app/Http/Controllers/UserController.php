<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request  $request){

        //{"_token":"F1R2t2YNJsHr0X0M8iE7mAJUJBdrcD1Uq3XyLZv4","username":"hasmukh","email":"hasmukhdharajiya8182@gmail.com","phone":"-1","city":"botad","password":"7676"}
        $data = new User();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->city = $request->city;
        $data->remember_token = $request->_token;
        $data->password = $request->password;
        $data->save();

        $request->session()->put('user', $request->email);
        return redirect("/");
    }
}
