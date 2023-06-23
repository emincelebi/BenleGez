<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\City;
use App\Models\Journey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JourneyController extends Controller
{
    public function index()
    {
        $adverts = Journey::all();

        return view('index', compact('adverts'));
    }

    public function create()
    {
        $cities = City::all();
        $cars = Car::all();

        return view('addjourney', compact('cities', 'cars'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fromwhere' => 'required',
            'towhere' => 'required',
            'when' => 'required',
            'car' => 'required',
            'price' => 'required',
            'nickname' => '{{auth()->user()->nickname}}'
        ]);

        if (Auth::check()) {
            $validatedData['nickname'] = Auth::user()->nickname;
        }

        Journey::create($validatedData);

        return redirect('/addjourney')->with('success', 'İlan başarıyla oluşturuldu.');
    }
}

