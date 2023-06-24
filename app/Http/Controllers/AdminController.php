<?php

namespace App\Http\Controllers;

use App\Models\Journey;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function panel()
    {
        return view('admin.panel');
    }

    public function table()
    {
        return view('admin.table');
    }

    public function ui(){
        return view('admin.ui');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'nickname' => [
                'required',
                Rule::unique('users', 'nickname')->ignore(Auth::id())
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore(Auth::id())
            ],
            'password' => 'required|min:8',
            'gender' => 'required'
        ]);

        $validatedData['role']='admin';

        try {
            $user = User::create([
                'name' => $validatedData['name'],
                'surname' => $validatedData['surname'],
                'nickname' => $validatedData['nickname'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
                'gender' => $validatedData['gender'],
                'role' => $validatedData['role']
            ]);

            return redirect('admin/ui')->with('success', 'Yeni üye kaydedildi.');
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode == 1062) { // Duplicate entry error code
                $errorMessage = 'Bu kullanıcı adı veya e-posta zaten kullanılmaktadır.';
            } else {
                $errorMessage = 'Bir hata oluştu. Lütfen tekrar deneyin.';
            }

            return redirect('admin/ui')->back()->withInput()->withErrors(['error' => $errorMessage]);
        }
    }

    public function updateAccount(Request $request)
    {
        $user = auth()->user();

        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->nickname = $request->input('nickname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->gender = $request->input('gender');

        $user->save();

        return redirect()->route('admin.ui')->with('success', 'Hesap başarıyla güncellendi.');
    }

    public function deleteAdmin(Request $request)
    {
        $username = $request->input('nickname');

        $user = User::where('nickname', $username)->first();
        if ($user) {
            $user->delete();
            return redirect('admin/ui');
        } else {
            return "Kullanıcı bulunamadı.";
        }
    }

    public function deleteIlan(Request $request)
    {
        $ilanid = $request->input('ilanid');

        $user = Journey::where('id', $ilanid)->first();
        if ($user) {
            $user->delete();
            return redirect('admin/ilanlar');
        } else {
            return redirect('admin/delete-ilan')->with('error', 'İlan ID bulunamadı.');
        }
    }

}


