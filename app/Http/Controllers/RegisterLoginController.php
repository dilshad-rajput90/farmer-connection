<?php

namespace App\Http\Controllers;

use App\City;
use App\User;
use App\Profession;
use App\Expertise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

// use Illuminate\Support\Facades\bcrypt;
class RegisterLoginController extends Controller
{


    public function register_form()
    {

        $data['data']       = City::all()->toArray();
        $data['profession'] = Profession::where('id','<>',1)->get()->toArray();
        $data['expertise'] = Expertise::all()->toArray();
        return view('register_form',$data);

    }

    public function register_process(Request $request)
    {


        $request->validate([

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'number' => 'required',
            'password' => 'required|alpha_dash|min:6',
            'user_image' => 'required|mimes:jpg,jpeg,png',
        ]);


            $data['name'] =  $request->input('name');
            $data['email'] =  $request->input('email');
            $data['password'] =  bcrypt($request->input('password'));
            $data['mobile_number'] =  $request->input('number');
            $data['location_id'] =  $request->input('city_id');
            $data['profession_id'] =  $request->input('profession_id');
            $data['expertise_id'] =  $request->input('expertise_id');

            $file_name =  $request->file('user_image')->getClientOriginalName();
            $extension =  $request->file('user_image')->getClientOriginalExtension();

            if($extension == 'jpg' || $extension == 'png')
            {
                $request->file('user_image')->storeAs('public/user',$file_name);
            }

            $data['picture_path']  = $file_name;

            $user = User::create($data);

            return back()->with('Registeration has been done succesfully');
    }


    public function login_form()
    {
        return view('login_form');
    }

    public function login_process(Request $request)
    {

            $data =  $request->all();

            $data = Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);

        if(Auth::check() && Auth::user()->profession_id == 1)
        {
            return redirect('/dashboard');
        }

        else if(Auth::check() && Auth::user()->profession_id == 2)

        {
            return redirect('/consultant_dashboard');
        }

        else if(Auth::check() && Auth::user()->profession_id == 3)

        {
            return redirect('/academic_dashboard');
        }

        else if(Auth::check() && Auth::user()->profession_id == 4)

        {
            return redirect('/farmer_dashboard');
        }

        else if(Auth::check() && Auth::user()->profession_id == 5)

        {
            return redirect('/general_dashboard');
        }


        else
        {
            return back('please give right passoword');
        }


    }


    public function logout(Request $request)

    {
        Auth::logout();
        $request->session()->flush();
        return redirect('/custom_login');
    }


}
