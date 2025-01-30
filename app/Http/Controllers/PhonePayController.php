<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Redirect;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Input;
use Dipesh79\LaravelPhonePe\LaravelPhonePe;
use App\Models\Transaction;
use Auth;



class PhonePayController extends Controller
{
    public function pay(){


        if(Session::has('payment_type')){
            $transaction = new Transaction;
            $transaction->user_id = Auth::user()->id;
            $transaction->gateway = 'phonepe';
            $transaction->payment_type = Session::get('payment_type');
            $transaction->additional_content = json_encode(Session::get('payment_data'));
            $transaction->save();
            
            $amount = Session::get('payment_data')['amount'];
            if(Auth::user()->phone != null){
                $amount= Session::get('payment_data')['amount'];
                $phonepe = new LaravelPhonePe();
                $url = $phonepe->makePayment($amount, Auth::user()->phone, env('PHONEPE_CALLBACK_URL') , '1');
                return redirect()->away($url);
            }
            else {
                flash('Please add phone number to your profile')->warning();
                return back();
            }
        }

        
    }

    public function success(Request $request){
        
        // dd(session()->get('payment_data'));
        $phonepe = new LaravelPhonePe();
        $response = $phonepe->getTransactionStatus($request->all());
        if($response == true){
            // dd(Auth::user());
            $payment = ["status" => "Success"];
            $packagePaymentController = new PackagePaymentController;
            return $packagePaymentController->package_payment_done(session()->get('payment_data'), json_encode($payment));
        }
        else
        {
            // Payment Failed           
        }
    }
}
