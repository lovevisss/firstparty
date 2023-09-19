<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller{

    public function index(){
        $date1 = CarBon::now()->format('Y-m-d');
        $date2 = CarBon::now()->format('H:i:s');

        return view('index',compact('date1', 'date2'));
    }

    public function gym(){
        return view('sport.GymManage');
    }

    public function sub(Request $request){
        $user =Auth::user()->newSubscription('main', 1000)->create($request->stripeToken);
        return redirect()->back();
    }

    public function stripe(){
        return view('stripe');
    }

    public function back(){
        return view('backend.index');
    }

}
