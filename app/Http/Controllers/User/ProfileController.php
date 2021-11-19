<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{


    public function __construct()
    {
        $this->middleware("auth");
    }



    public function showSeniorCitizenProfile(){

        $seniorProfile=Profile::get();


        return view('user.senior_citizen_profile',compact('seniorProfile'));

    }


    public function showSeniorCitizenProfileHopitals(){

        $seniorProfile=Profile::get();


        return view('user.senior_citizen_profile_hospitals',compact('seniorProfile'));

    }


    public function showSeniorCitizenProfileGovernment(){

        $seniorProfile=Profile::get();


        return view('user.senior_citizen_profile_governments',compact('seniorProfile'));

    }



    public function showProfile()
    {
        try {

            $response = Http::get("https://api.paystack.co/bank");
            $banks = [];


            //dd($response);
            if ($response->ok()) {

                if ($response->json()["status"]) {
                    collect($response->json()["data"])
                        ->each(function ($item) use (&$banks) {
                            $banks[] = collect($item)->only(["name", "code", "active"])->toArray();
                        });
                }

            }

            //dd($response);
            return view('user.profile', ['banks' => $banks]);

        } catch (\Exception $exception) {
            log_error($exception, "fatal");
        }

    }


    public function updateProfile(Request $request)
    {

        $request->validate([
            "phone" => "required|numeric",
            'gender' => 'required',
            'age'=>'required',
            'occupation'=>'required',
            'alcohol_in_take'=>'required',
            'allergy'=>'required',
            'do_you_have_family_history_of_diabetes'=>'required',
            'do_you_have_family_history_of_hypertension'=>'required',
            'previous_surgical_history'=>'required',
            'past_medical_history'=>'required',
            'last_blood_sugar_value'=>'required',
            'last_blood_pressure_value_checked'=>'required',

        ]);




        $profile =Profile::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
                'phone'=>$request->post('phone'),
                'gender'=>$request->post('gender'),
                'age'=>$request->post('age'),
                'occupation'=>$request->post('occupation'),
                'alcohol_in_take'=>$request->post('alcohol_in_take'),
                'allergy'=>$request->post('allergy'),
                'do_you_have_family_history_of_diabetes'=>$request->post('do_you_have_family_history_of_diabetes'),
                'do_you_have_family_history_of_hypertension'=>$request->post('do_you_have_family_history_of_hypertension'),
                'previous_surgical_history'=>$request->post('previous_surgical_history'),
                'past_medical_history'=>$request->post('past_medical_history'),
                'last_blood_sugar_value'=>$request->post('last_blood_sugar_value'),
                'last_blood_pressure_value_checked'=>$request->post('last_blood_pressure_value_checked'),
                'user_id'=>Auth::user()->id,

            ]

        );

            return back()->withToastSuccess('Profile Updated!');

//        } catch (\Throwable $th) {
//            log_error($th, "fatal");
//            back()->withToastError('Error!Try Again');
//        }


    }


    public function updateWithdrawalInfo(Request $request)
    {


        $request->validate([
            "account_number" => "required|numeric",
            "first_name" => "required",
            'last_name' => 'required',
            "bank_code" => "required",
        ]);

        $response = Http::withHeaders([
            "Authorization" => "Bearer " . config("paystack.secretKey"),
            "Content-Type" => "application/json"
        ])->get(config("paystack.paymentUrl") . "/bank/resolve/",
            [
                "account_number" => $request->post("account_number"),
                "bank_code" => $request->post("bank_code")
            ]);


        try {

            if ($response->failed()) {
                return back()->with('danger',$response->json()["message"]);
            }

            if ($response->ok()) {

                $names = $response->json()["data"]["account_name"];
                if (!str_contains($names, strtoupper($request->post("first_name"))) && !str_contains($names, strtoupper($request->post("last_name")))) {
                    return back()->with('danger',"The Account info does not match the provided info!");
                }

                $user = user();
                $user->profile->account_number = $request->post("account_number");
                $user->profile->account_info = [
                    "first_name" => $request->post("first_name"),
                    "last_name" => $request->post("last_name"),
                    "account_number"=> $request->post("account_number"),
                    "bank_code" => $request->post("bank_code")
                ];
                $user->push();
                return back()->with('status',"Withdrawal Account Updated!");
            }
        } catch (\Exception $exception) {

            log_error($exception, "fatal");
            return back()->with('danger',"Something went wrong,Please try again!");
        }






    }
}
