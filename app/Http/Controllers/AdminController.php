<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PDO;

class AdminController extends Controller
{
    public function unreadData()
    {
        $unreadData = Reservation::where('unread', 0)->get();
        $countdata = Reservation::where('unread', 0)->count();
        return compact('unreadData', 'countdata');
    }
    public function dashboard()
    {
        $users = User::where('usertype',0)->count();
        $food = Food::all()->count();
        $res = Reservation::all()->count();
        $chef = Chef::all()->count();
        $data = $this->unreadData();
        return view('admin.index',compact('users','food','res','chef'), $data);
    }
    public function index()
    {
        $user = User::where('usertype', 0)->get();
        $data = $this->unreadData();
        return view('admin.usertable', compact('user',), $data);
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }

    // =============== FOOD ==================
    public function addfoodView()
    {
        $data = $this->unreadData();
        return view('admin.addfood', $data);
    }
    public function addfood(Request $req)
    {
        $user = Auth::user();
        $food = new Food;
        $req->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);
        $food->title = $req->title;
        $food->price = $req->price;
        if ($req->hasFile('image')) {
            $food->image = $req->file('image')->store('images', 'public');
        }
        $food->description = $req->description;
        $food = $user->foods()->save($food);
        return redirect('dashboard/foodtable');
    }
    public function food()
    {
        $user = Auth::user();
        $food = $user->foods;
        $data = $this->unreadData();
        return view('admin.foodtable', compact('food',), $data);
    }
    public function destroy($id)
    {
        $user = Auth::user();
        $food = $user->foods()->find($id);
        $food->delete();
        return back();
    }
    public function updateshow($id)
    {
        $food = Food::find($id);
        $data = $this->unreadData();
        return view('admin.foodupdate', compact('food'), $data);
    }
    public function update(Request $req, $id)
    {

        $user = Auth::user();
        $food = $user->foods()->find($id);
        $req->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $food->title = $req->title;
        $food->price = $req->price;
        $food->description = $req->description;
        if ($req->hasFile('image')) {
            Storage::delete('storage/' . $food->image);
            $food->image = $req->file('image')->store('images', 'public');
        }
        $food->update();
        return redirect('dashboard/foodtable');
    }
    public function reservations()
    {
        $resData = Reservation::all();
        $data = $this->unreadData();
        return view('admin.reservations', compact('resData',), $data);
    }
    public function unread()
    {
        $data = Reservation::where('unread', 0)->get();
        foreach ($data as $res) {
            $res->unread = 1;
            $res->save();
        }

        return redirect('dashboard/reservations');
    }
    public function reservationDelete($id){
        $res = Reservation::find($id);
        $res->delete();
        return back();
    }

    // =================== Chefs =========================
    public function viewAddchef(){
        $data = $this->unreadData();
        return view('admin.chefadd',$data);
    }
    public function addchef(Request $req){
        $chef = new Chef;
        $req->validate([
            'name' =>'required',
            'image' =>'required',
            'speciality' =>'required',
        ]);
        $chef->name = $req->name;
        $chef->image = $req->file('image')->store('images','public');
        $chef->speciality = $req->speciality;
        $chef->save();
        return redirect('dashboard/cheftable');
    }
    public function chefs(){
        $chef = Chef::all();
        $data = $this->unreadData();
        return view('admin.cheftable',compact('chef'),$data);
    }
    public function chefupdateView($id){
        $chef = Chef::find($id);
        $data = $this->unreadData();
        return view('admin.chefupdate',compact('chef'),$data);
    }
    public function chefupdate(Request $req, $id){
        $chef = Chef::find($id);
        $req->validate([
            'name'=>'required',
            'speciality'=>'required',
        ]);
        $chef->name = $req->name;
        $chef->speciality=$req->speciality;
        if($req->hasFile('image')){
            Storage::delete('storage/'.$chef->image);
            $chef->image = $req->file('image')->store('images','public');
        }
        $chef->update();
        return redirect('dashboard/cheftable');
    }
    public function chefdelete($id){
        $chef = Chef::find($id);
        $chef->delete();
        return back();
    }
}
