<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    function login(){
        return view('login');
    }

    function process_login(REQUEST $request){
        $valid = DB::table('user')->where(['name'=>$request->input('uname'), 'password'=>$request->input(('upass'))])->get();
        if(count($valid) > 0){
            return redirect('/home');
        }
        else{
            return redirect('/login');
        }
    }

    function home(){
        return view('home');
    }

    function orders(){
        $fitems = DB::table('items')->select('id', 'name', 'cost')->get();
        $fitems = json_encode($fitems);
        $fitems = json_decode($fitems, true);
        $total = DB::table('items')->sum('cost');
        $total = json_encode($total);
        $total = json_decode($total);
        return view('orders', ['items'=>[$fitems, $total]]);
    }

    function addItem1(Request $req ){        
        $today = date("d/m/Y");
        DB::table('items')->insert(['name'=>'Air Jordan 7 Retro OC sneakers', 'cost'=>3098]);
        return view('home');
    }
    function addItem2(Request $req ){   
        $today = date("d/m/Y");
        DB::table('items')->insert(['name'=>'VERSACE TRIGRECA SNEAKERS', 'cost'=>10300]);
        return view('home');
    }
    function addItem3(Request $req ){    
        $today = date("d/m/Y");
        DB::table('items')->insert(['name'=>'YEEZY BOOST 350', 'cost'=>2040]);
        return view('home');
    }
    function addItem4(Request $req ){    
        $today = date("d/m/Y");
        DB::table('items')->insert(['name'=>'DIOR AIR JORDAN 1 HIGH', 'cost'=>37480]);
        return view('home');
    }
    function addItem5(Request $req ){    
        $today = date("d/m/Y");
        DB::table('items')->insert(['name'=>'Nike SB What The Dunk', 'cost'=>42797]);
        return view('home');
    }
    function addItem6(Request $req ){    
        $today = date("d/m/Y");
        DB::table('items')->insert(['name'=>'AIR JORDAN DUNK HIGH', 'cost'=>1240]);
        return view('home');
    }

}
