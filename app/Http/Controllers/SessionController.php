<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;
use RealRashid\SweetAlert\Facades\Alert;

class SessionController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'username' => 'string|required',
            'email' => 'string|email|required',
            'password' => 'string|required'
        ]);

        $arrayData = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        $existingUser = User::where('email', $request->email)->first();
        if(!$existingUser) {
            $successfulData = User::create($arrayData);
        } else {

            Alert::error('There is already an existing email, try again.');
            return redirect()->back()->withErrors('There is already an email for this account. Try again.');
        }

        if($successfulData) {
            Alert::success('Succesful', 'Account is succesfully created.');
            FacadesSession::flash('email', $request->email);
            return to_route('login.view');
        } else {
            return redirect()->back()->withErrors('We are unable to create this account, try again.');
        }
    }

    public function login(Request $request) {
        $findEmail = User::where('email', $request->email)->first();

        if($findEmail && Hash::check($request->password, $findEmail->password)) {
            $credentials = $request->only('email', 'password');

            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();

                if($findEmail->level === 'admin') {
                    return to_route('home-admin.view')->with('success', "Welcome back Admin!");
                } else {
                    return to_route('home.view');
                }
                return to_route('home.view')->with('success', 'Welcome back User!');
            } else {
                return redirect()->back()->withError('Login is unsuccessful, try again.');
            }
        } else {
            return redirect()->back()->withError('Sorry, we cannot find any associated account.');
        }
    }

    public function logout() {
        Auth::logout();
        session()->flush();

        return to_route('login');
    }
}
