<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CustomerController extends Controller
{
    public function customerreg(Request $request)
    {
        // $validate = Validator::make(Input::all(), [
        //     'g-recaptcha-response' => 'required|captcha'
        // ]);
        $request->validate(
            [
                '*' => 'required',
                'g-recaptcha-response' => 'required|captcha',

            ]);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone_number,
            'role' => 'customer',
            'created_at' => Carbon::now(),
        ]);
        return back()->with('customer_login', 'As a Cusomer  Your Account Created Successfully!');
    }

    public function customerlogin(Request $request)
    {
        // return $request;
        // $request->email
        // $request->password
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
               return redirect('home');
        }
        else{
            echo "Vul";
        }

    }
}
