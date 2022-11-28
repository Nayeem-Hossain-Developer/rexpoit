<?php

namespace Rexpoit\Location\Controllers;

use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use App\Models\User;
use App\Models\Activitie;
use App\Models\Wallet;
use Auth,Session,Hash,Http,DB;

class UserController extends Controller
{
    public function login(){
        return view('location::login');
    }
    public function register(){
        return view('location::registration');
    }

    public function userDashboard(){
        return view('location::frontend.dashborad');
    }
    public function adminDashboard(){
        return view('location::admin.dashboard');
    }

    public function userinfo(){
        $users = User::with('salary:user_id,salary_amount,cash_amount')->get();
        return view('location::admin.userinfo',compact('users'));
    }

    public function activity(){
        $activities = Activitie::with('user:id,name')->get();
        return view('location::admin.activity',compact('activities'));
    }

    public function loginUser(Request $request)
    {   
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $response = Http::get('http://ip-api.com/json');
            $data = json_decode($response);
            Activitie::store($data);
            if(Auth::user()->role == 1){
            return redirect()->route('admin.dashboard');
            }
            return redirect()->route('dashboard');
        }                            
        return redirect("login");
    }

    public function registration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::store($request);
        Auth::login($user);
        return redirect("dashboard");
    }


    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
