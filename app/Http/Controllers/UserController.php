<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;




use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        return view('user.register');
    }
    
public function createUser(Request $request)
{
    $this->validate($request, [
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed',
    ]);
    User::create([
            'name'=>$request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
    ]);    
    auth()->attempt($request->only('email', 'password'));
    
    return redirect('/shop');
}

public function Login()
{
    return view('user.login');
}


public function logUser(Request $request)
{
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
    ]);
    if(!auth()->attempt($request->only('email', 'password'))){
        return back()->with('status', 'Invalid Login details');
    };
    return redirect('/shop');
}


public function logout(Request $request){
    auth()->logout();

    return redirect('/');
}


}
