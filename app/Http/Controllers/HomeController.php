<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Reservation;
use Carbon\Carbon;
use App\Models\Chef;

class HomeController extends Controller
{
    public function Index()
    {
        $food = Food::all();
        $chef = Chef::take(3)->get();
        return view('welcome', compact('food','chef'));
    }

    public function reservation(Request $req)
    {
        $res = new Reservation;
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'guest' => 'required',
            'date' => 'required',
            'time' => 'required',
            'message' => 'required',
        ]);
        $res->name = $req->name;
        $res->email = $req->email;
        $res->phone = $req->phone;
        $res->guest = $req->guest;
        $res->date = Carbon::createFromFormat('d-M-Y', $req->date)->format('Y-m-d');
        $res->time = $req->time;
        $res->message = $req->message;
        $res->save();
        return back()->with('message', 'Your Reservation has been send');
    }
}
