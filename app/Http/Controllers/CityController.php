<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('index', compact('cities'));
    }

    public function create(){
        $cities=City::all();

        return view('index', compact('cities'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);

        City::create($data);

        return redirect('/home')->with('success', 'Şehir başarıyla kaydedildi.');
    }
}
