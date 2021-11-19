<?php

use App\Models\BillHistory;
use App\Models\Config;
use App\Models\Stash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


//DB TIME TO HUMAN READABLE TIME HELPER
if (!function_exists('db_to_human_time')) {
    function db_to_human_time($time): string
    {
        $dt = Carbon::createFromFormat('Y-m-d H:i:s', $time);
        return $dt->diffForHumans();
    }
}

//GENERATE ICON FOR NOTIFICATION HELPER
if (!function_exists('icon_name')) {
    function icon_name($notification_type)
    {


        $notification_type = explode("\\", $notification_type);

        if ($notification_type[2] == 'StashAlert') {
            return 'dollar-sign';
        }

        if ($notification_type[2] == 'ProfileAlert') {
            return 'users';
        }

        if ($notification_type[2] == 'BillsPaymentAlert') {
            return 'file-text';
        }




        if ($notification_type[2] == 'InvoiceAlert')
            return 'file-text';



        return  'file-text';

    }






}


//CHANGE FIRST LETTER TO UPPERCASE
if (!function_exists('uppercase')) {
    function uppercase($string): string
    {
        return Str::ucfirst($string);
    }
}


//SEPARATE FIRST NAME AND LAST NAME
if (!function_exists('user_name')) {
    function user_name($string, $index)
    {
        return explode(" ", $string)[$index];

    }
}


//GENERATE ICON FOR NOTIFICATION HELPER
if (!function_exists('user')) {
    function user()
    {
//
////        if (Auth::check()) {
////            return App\Models\User::with('stash')->find(Auth::id());
////        }
//        Auth::logout();
//        return null;
    }
}


//RECORD BILLS AND AIRTIME TRANSACTION IN THE DB
if (!function_exists('recordBillTransaction')) {
    function recordBillTransaction(array $billDetails,$user=null): bool
    {

        try {

            $billHistory = new BillHistory();
            $billHistory->type = $billDetails["type"];
            $billHistory->provider = $billDetails["provider"];
            $billHistory->package_name = $billDetails["package_name"];

            if(key_exists("channel",$billDetails)){
                $billHistory->channel = $billDetails["channel"];
            }
            $billHistory->provider_id = $billDetails["provider_id"];
            $billHistory->transaction_id = $billDetails["transaction_id"];
            $billHistory->user_id = is_null($user) ? Auth::id() : $user->id;
            $billHistory->prev_balance = $billDetails["prev_balance"];
            $billHistory->next_balance = $billDetails["next_balance"];
            $billHistory->discount = $billDetails["discount"];
            $billHistory->bill_amount = $billDetails["bill_amount"];
            $billHistory->recipient = $billDetails["recipient"];

            if (!$billHistory->save()) {
                return false;
            }
            return true;

        } catch (\Exception $e) {

            log_error($e, "fatal");
            return false;
        }
    }
}



//TODO LOG THE ERROR PROPERLY
//LOG ERROR AND ITS SEVERITY||$severity="fatal|info"
if (!function_exists('log_error')) {
    function log_error($exception, $severity = "info",$abort=true)
    {

        if($severity=="info"){
            Log::info($exception);
        }else{
            Log::critical($exception);
        }

        if($abort){
            abort(500);
        }
    }
}


//PROFILE IMAGE URL HELPER
if (!function_exists('profile_image')) {
    function profile_image($path = null): string
    {
        if (!is_null($path) && !empty($path))
            return Storage::url($path);
        else{
            $name=user()->name[0];
            return "https://dummyimage.com/600x400/000000/fff&text=${name}";
        }

    }
}


if (!function_exists('getConfigValue')) {
    function getConfigValue($key): ?string
    {
        try {

            $configValue = Config::where(["key" => $key])->first();
            if (!$configValue->status) {
                return null;
            }

            return $configValue->value;

        } catch (\Exception $e) {
            return null;
        }

    }
}


if (!function_exists('manageStashBalance')) {
    function manageStashBalance($amount, $action, $stash, $discount = 0): bool
    {
        try {

            $response = false;

            $stash = Stash::findorFail($stash);

            if ($action == "addition") {
                $stash->amount += ($amount + (($discount / 100) * $amount));
                $stash->save();
                $response = true;
            }

            if ($action == "subtraction") {
                $stash->amount -= ($amount - (($discount / 100) * $amount));
                $stash->save();
                $response = true;
            }

            return $response;


        } catch (\Exception $e) {
            return false;
        }

    }
}


if (!function_exists('getallheaders')) {
    function getallheaders(): array
    {
        $headers = [];
        foreach ($_SERVER as $name => $value) {
            if (substr($name, 0, 5) == 'HTTP') {
                $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
            }
        }
        return $headers;
    }
}




if (!function_exists('setAriaExpanded')) {
    function setAriaExpanded($items): bool
    {
        $return = false;
        foreach ($items as $item){
            if(request()->routeIs($item)){
                $return=true;
                break;

            }
        }
        return $return;

    }
}

?>


