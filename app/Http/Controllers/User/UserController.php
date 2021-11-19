<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoordinatorRequest;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\SupervisorRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{



    /** Supervisor **/
    public function showHospital(){
        $hospital=User::role("hospital")->get();
        return view('user.hospital',compact('hospital'));
    }

    public function createHospital(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ]);
        $hospital=$request->all();
        $hospital['password']= Hash::make($hospital['password']);
        $user=User::create($hospital);
        $user->assignRole(['hospital']);
        if($user->save()){
            return back()->with('status',' Hospital Created Successfully');

        }
        return back()->with('danger','Hospital Not Created');

    }

    public function deleteHospital(User $user){

        if($user->delete()) {
            return back()->with('status', 'Hospital Deleted Successfully');
        }
        return back()->with('danger','Hospital Not Deleted');

    }



    /** Student **/
    public function showSeniorCitizen(){
        $seniorcitizen =User::role('seniorcitizen')->get();
        return view('user.seniorcitizen',compact('seniorcitizen'));
    }

    public function createSeniorCitizen(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ]);
        $student=$request->all();
        $student['password']=Hash::make($student['password']);
        $user=User::create($student);
        $user->assignRole(['seniorcitizen']);
        if($user->save()){
            return back()->with('status', 'Senior Created Successfully');
        }
        return back()->with('danger', 'Senior Not Created');
    }

    public function deleteSeniorCitizen(User $user){

        if($user->delete()){
            return back()->with('status','Senior Citizen Deleted Successfully');
        }
        return back()->with('danger','Senior Citizen Not Deleted');

    }



    /** Coordinator **/
    public function showSuperAdmin(){
        $superadmin=User::role('superadmin')->get();

        return view('user.superadmin',compact('superadmin'));
    }

    public function createSuperAdmin(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ]);

        $data=$request->all();
        $data['password']= Hash::make($data['password']);
        $user= User::create($data);
        $user->assignRole(['superadmin']);
        if($user->save()){
            return back()->with('status','Super Admin Created Successfully');
        }
        return back()->with('danger','Super Admin Not Created');

    }


    public function deleteSuperAdmin(User $user){

        if($user->delete()){
            return back()->with('status','Super Admin Deleted Successfully');
        }
        return back()->with('danger','Super Admin  Not Deleted');

    }



    /** Coordinator **/
    public function showGovernment(){
        $government=User::role('government')->get();

        return view('user.government',compact('government'));
    }

    public function createGovernment(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ]);

        $data=$request->all();
        $data['password']= Hash::make($data['password']);
        $user= User::create($data);
        $user->assignRole(['government']);
        if($user->save()){
            return back()->with('status','Government Created Successfully');
        }
        return back()->with('danger','Government Not Created');

    }


    public function deleteGovernment(User $user){

        if($user->delete()){
            return back()->with('status','Government Deleted Successfully');
        }
        return back()->with('danger','Government  Not Deleted');

    }



}



