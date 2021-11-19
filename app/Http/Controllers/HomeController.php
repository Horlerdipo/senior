<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $seniorcitizenCount=User::role("seniorcitizen")->count();
        $hospitalCount=User::role("hospital")->count();
        $superadminCount=User::role("superadmin")->count();
        $hospital=User::role("hospital")->get();
        $seniorcitizen=User::role("seniorcitizen")->get();
        $userCount=User::count();
        $user=User::all();
        return view('home',compact('userCount','seniorcitizenCount','hospitalCount','superadminCount','user','hospital','seniorcitizen'));
    }
}
