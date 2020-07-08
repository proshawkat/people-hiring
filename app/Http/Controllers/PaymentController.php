<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PDF;
use Stripe;
use Micovi\LaravelSendy\LaravelSendy;

class PaymentController extends Controller
{
    public function action(Request $request){
        if ($request->isMethod('post')){
            if($request->terms_check == 'on'){

                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                Stripe\Charge::create ([
                    "amount" => $request->ser_price * 100,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "Service payment from peoplehire.com."
                ]);

                $order = new Order();
                $order->ser_id = $request->ser_id;
                $order->first_name = $request->first_name;
                $order->last_name = $request->last_name;
                $order->email = $request->email;
                $order->phone = $request->phone;
                $order->status = "seals";
                $order->n_status = 0;
                $order->total = $request->ser_price;

                $order->save();
                $orderId = $order->id;

                $order = Order::find($orderId);

                $pdf = '';
                Mail::send('pages.invoice.invoiceMail', ['order' => $order, 'orderItems' => 'dd', 'id' => $orderId], function ($message) use ($request,$pdf,$order) {

                    $pdf = PDF::loadView('pages.invoice.pdfInvoice', compact('order'));
                    $message->from('shawkatali527@gmail.com', 'Peoplehire '.$request->ser_title);
                    $message->to($request->email, $request->first_name . ' ' . $request->last_name);
                    $message->bcc('showkatalimon@gmail.com');
                    $message->subject('Invoice');
                    $message->attachData($pdf->output(), "invoice.pdf");
                });
                return view('pages.thankyou.thankyou');

            }else{
                return redirect()->back()->with('success', ['Unauthorized access ']);
            }
        }else{
            return redirect()->back()->with('success', ['Unauthorized access ']);
        }
    }
}
