<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\Order;
use App\Models\Cart;
use App\Models\OrderItem;
use App\Models\Product;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $customerId = session()->get('id');
        if (!$customerId) {
            return redirect('login')->with('error', 'Please log in to proceed.');
        }

        $cartItems = Cart::where('customerId', $customerId)->get();
        $bill = 0;

        foreach ($cartItems as $item) {
            $product = Product::find($item->productId);
            if ($product) {
                $bill += $product->price * $item->quantity;
            }
        }

        $fullname = 'shamonti islam'; // Replace with dynamic data if available
        $phone = '01816161021';
        $address = 'Bangladesh';

        $intent = PaymentIntent::create([
            'amount' => $bill * 100,
            'currency' => 'usd',
        ]);

        return view('stripe', compact('fullname', 'phone', 'address', 'bill', 'intent'));
    }

    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $paymentMethodId = $request->input('payment_method');

        if (!$paymentMethodId) {
            return back()->with('error', 'Payment failed!');
        }

        if (session()->has('id')) {
            $customerId = session()->get('id');

            $order = new Order();
            $order->status = 'paid';
            $order->customerId = $customerId;
            $order->bill = $request->input('bill');
            $order->address = $request->input('address');
            $order->fullname = $request->input('fullname');
            $order->phone = $request->input('phone');
            $order->save();

            $carts = Cart::where('customerId', $customerId)->get();

            foreach ($carts as $item) {
                $product = Product::find($item->productId);
                if ($product) {
                    $orderItem = new OrderItem();
                    $orderItem->productId = $item->productId;
                    $orderItem->quantity = $item->quantity;
                    $orderItem->price = $product->price;
                    $orderItem->orderId = $order->id;
                    $orderItem->save();
                }

                $item->delete();
            }

            Session::flash('success', 'Payment successful! Your order has been placed.');
            return redirect('/cart');
        }

        return back()->with('error', 'Something went wrong!');
    }
}
