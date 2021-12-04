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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->route('home.index')->withSuccess('Signed in');
            }
        } catch (\Exception $e) {
            $e->getMessage();
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

    public function changePassword(Request $request)
    {

        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);
        $data = $request->all();
        $user = auth()->user();

        if (!Hash::check($data['old_password'], $user->password)) {
            return back()->with('error', 'The specified password does not match the database password');
        } else {
            $user->update([
                'password' => Hash::make($data['password']),
            ]);
            return redirect()->back()->with('success', 'Password changed successfully');
        }
    }

    public function profileUpdate(Request $request)
    {
        $data = $request->all();
        $user = auth()->user();
        $user->update([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'date_of_birth' => $data['date_of_birth'],
        ]);
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

}
