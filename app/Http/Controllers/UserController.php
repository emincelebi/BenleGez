<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();

            return view('account', compact('user'));
        } else {
            return redirect('/');
        }
    }

    public function create()
    {
        return view('auth/register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'surname'=>'required',
            'nickname'=>'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'gender' => 'required'
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'surname'=>$validatedData['surname'],
            'nickname'=>$validatedData['nickname'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'gender' => $validatedData['gender']
        ]);

        return redirect('/register')->with('success', 'Yeni üye kaydedildi.');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('nickname', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin.panel');
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->back()->withInput()->withErrors(['name' => 'Geçersiz kullanıcı adı veya şifre']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('users.login');
    }

}


