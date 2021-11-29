<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Shipping;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.auth.login');
    }

    public function attemptLogin(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home.index')->withSuccess('Signed in');
        }
    }
    public function register()
    {
        return view('frontend.auth.register');
    }

    public function registerStore(Request $request)
    {
        $data = $request->all();
        $check = $this->create($data);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home.index')->withSuccess('Signed in');
        }
    }

    public function create(array $data)
    {
      $user = User::create([
        'name' => $data['name'],
        'full_name' => $data['full_name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'status' => 1,
        'isRole' => 1,
        'password' => Hash::make($data['password'])
      ]);

        $shipping = new Shipping();
        $shipping->uuid = Str::uuid();
        $shipping->user_id = $user->id;
        $shipping->address = $data['address'];
        $shipping->state = $data['state'];
        $shipping->post_code = $data['post_code'];
        $shipping->city = $data['city'];
        $shipping->status = 1;
        $shipping->save();

        return $user;
    }


    public function logoutPerform(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

}
