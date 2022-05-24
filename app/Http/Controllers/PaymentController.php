<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\User;
use App\Models\Payment;
use Shetabit\Multipay\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Shetabit\Payment\Facade\Payment as Pay;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Nette\Utils\Random;
use UxWeb\SweetAlert\SweetAlert;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function allPayments()
    {
        $allPayments = Payment::query()
        ->with('user:name,id')
        ->get();
        return view('admin.payments.allpayments',compact('allPayments'));
    }

    public function userPayments()
    {
        $users=User::all();
        return view('admin.payments.userpayments',compact('users'));
    }

    public function paymentsView($id)
    {
        $user=User::query()->find($id);
        $user_payments=$user->payments;
        $sum_payments=Payment::query()
        ->where([['user_id',$id],['status','successful']])->sum('price');
        return view('admin.payments.paymentsview',
        compact('user','user_payments','sum_payments'));
    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $invoice = (new Invoice)->amount($request->price);

        return Pay::via('zarinpal')->callbackUrl(Route('payment.callback'))
        // ->description($request->title)
        ->purchase($invoice,function($driver, $transactionId)
         use($invoice) {
            Payment::create([
               'serial'=>$transactionId,
               'status'=>'pending',
               'user_id'=>auth()->id(),
               'price'=> $invoice->getAmount()
            ]);
        })->pay()->render();

    }

    public function callback(Request $request){
        $index=$request['Authority'];
        $factor=Payment::query()->where('serial',$index)->first();

        try {
            $receipt = Pay::via('zarinpal')->amount($factor->price)
            ->transactionId($factor->serial)->verify();
            // You can show payment referenceId to the user.
            Payment::where('serial',$factor->serial)
            ->update(['status'=>'successful']);
            alert()->success('پرداخت با موفقیت انجام شد');
            return Redirect::route('dashboard');
        } catch (InvalidPaymentException $exception) {
            Payment::where('serial',$factor->serial)
            ->update(['status'=>'failed']);
            alert()->error($exception->getMessage());
            return Redirect::route('dashboard');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
