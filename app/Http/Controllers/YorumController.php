<?php

namespace App\Http\Controllers;

use App\Models\Yorum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class YorumController extends Controller
{
    public function index()
    {
        $adverts = Yorum::all();

        return view('home', compact('adverts'));
    }



    public function store(Request $request)
    {
        $data = $request->validate([
            'ilanid' => 'required',
            'message' => 'required',
            'username' => '{{auth()->user()->nickname}}',
        ]);

        if (Auth::check()) {
            $data['username'] = Auth::user()->nickname;
        }

        Yorum::create($data);

        return redirect()->back()->with('success', 'İlan başarıyla oluşturuldu.');
    }

    public function showComments($advertId)
    {
        $advert = Yorum::find($advertId);
        $comments = $advert->comments;

        return view('home', compact('comments'));
    }


}
