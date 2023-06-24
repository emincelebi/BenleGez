<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\City;
use App\Models\Journey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JourneyController extends Controller
{

    public function create()
    {
        $cities = City::all();
        $cars = Car::all();
        $user = auth()->user();

        return view('addjourney', compact('cities', 'cars','user'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fromwhere' => 'required',
            'towhere' => 'required',
            'when' => 'required',
            'car' => 'required',
            'price' => 'required',
        ]);

        if (Auth::check()) {
            $validatedData['nickname'] = Auth::user()->nickname;
        }

        Journey::create($validatedData);

        return redirect('/addjourney')->with('success', 'İlan başarıyla oluşturuldu.');
    }
    public function delete_advert($advertId) {

        $advert = Journey::find($advertId);
        if ($advert) {
            $advert->delete();

            return redirect()->back()->with('success', 'İlan başarıyla silindi.');
        } else {

            return redirect()->back()->with('error', 'İlan bulunamadı.');
        }
    }
}

