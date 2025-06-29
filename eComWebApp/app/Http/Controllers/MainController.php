<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /** =================== Homepage =================== */
    public function index()
    {
        $allProducts = Product::all();
        $newArrival = Product::where('type', 'new-arrivals')->get();
        $hotSale = Product::where('type', 'sale')->get();

        return view('index', compact('allProducts', 'hotSale', 'newArrival'));
    }

    public function about()
    {
        return view('about');
    }

    /** =================== Shop & Product =================== */
    public function shop()
    {
        $products = Product::paginate(12); // 12 items per page
        return view('shop', compact('products'));
    }

    public function singleProduct($id)
    {
        $product = Product::find($id);
        return view('singleProduct', compact('product'));
    }

    /** =================== Cart =================== */
    public function cart()
    {
        $cartItems = DB::table('products')
            ->join('carts', 'carts.productId', '=', 'products.id')
            ->select('products.title', 'products.quantity as pQuantity', 'products.price', 'products.picture', 'carts.*')
            ->where('carts.customerId', session()->get('id'))
            ->get();

        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        if (session()->has('id')) {
            $item = new Cart();
            $item->quantity = $request->input('quantity');
            $item->productId = $request->input('id');
            $item->customerId = session('id');
            $item->save();

            return redirect()->back()->with('success', 'Congratulations! Item added into cart.');
        }

        return redirect('login')->with('error', 'Please login to continue.');
    }

    public function updateCart(Request $request)
    {
        if (session()->has('id')) {
            $item = Cart::find($request->input('id'));
            $item->quantity = $request->input('quantity');
            $item->save();

            return redirect()->back()->with('success', 'Item quantity updated.');
        }

        return redirect('login')->with('error', 'Please login to continue.');
    }

    public function deleteCartItem($id)
    {
        $item = Cart::find($id);
        if ($item) {
            $item->delete();
        }

        return redirect()->back()->with('success', 'Item removed from cart.');
    }

    /** =================== Checkout =================== */
    public function checkout(Request $request)
    {
        if (!session()->has('id')) {
            return redirect('login')->with('error', 'Please login to continue.');
        }

        $order = new Order();
        $order->status = 'pending';
        $order->customerId = session('id');
        $order->bill = $request->input('bill');
        $order->address = $request->input('address');
        $order->fullname = $request->input('fullname');
        $order->phone = $request->input('phone');

        if ($order->save()) {
            $carts = Cart::where('customerId', session('id'))->get();

            foreach ($carts as $item) {
                $product = Product::find($item->productId);

                $orderItem = new OrderItem();
                $orderItem->productId = $item->productId;
                $orderItem->quantity = $item->quantity;
                $orderItem->price = $product->price;
                $orderItem->orderId = $order->id;
                $orderItem->save();

                $item->delete();
            }
        }

        return redirect()->back()->with('success', 'Your order has been placed successfully.');
    }

    public function myOrders()
    {
        if (session()->has('id')) {
            $orders = Order::where('customerId', session()->get('id'))->get();

            $items = DB::table('order_items')
                ->join('products', 'order_items.productId', '=', 'products.id')
                ->select('products.title', 'products.picture', 'order_items.*')
                ->get();

            return view('orders', compact('orders', 'items'));
        }

        return redirect('login');
    }

    /** =================== User Profile =================== */
    public function profile()
    {
        if (session()->has('id')) {
            $user = User::find(session('id'));

            if (!$user) {
                return redirect('login')->with('error', 'User not found.');
            }

            return view('profile', compact('user'));
        }

        return redirect('login')->with('error', 'Please login first.');
    }

    public function updateUser(Request $request)
    {
        $user = User::find(session('id'));

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->fullname = $request->input('fullname');
        $user->password = $request->input('password'); // No hashing

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profiles/'), $filename);
            $user->picture = $filename;
        }

        if ($user->save()) {
            return redirect()->back()->with('success', 'Your account has been updated.');
        }

        return redirect()->back()->with('error', 'Something went wrong.');
    }

    /** =================== Authenti
     * 
     * ion =================== */
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function loginUser(Request $request)
    {
        $user = User::where('email', $request->input('email'))
            ->where('password', $request->input('password')) // No hashing
            ->first();

        if ($user) {
            if ($user->status == 'Blocked') {
                return redirect('login')->with('error', 'Your status is blocked.');
            }

            session()->put('id', $user->id);
            session()->put('type', $user->type);

            return match ($user->type) {
                'Customer' => redirect('/'),
                'Admin' => redirect('/admin'),
                default => redirect('login')->with('error', 'Unauthorized user type.')
            };
        }

        return redirect('login')->with('error', 'Email/password is incorrect.');
    }

    public function registerUser(Request $request)
    {
        $newUser = new User();
        $newUser->fullname = $request->input('fullname');
        $newUser->email = $request->input('email');
        $newUser->password = $request->input('password'); // No hashing
        $newUser->type = 'Customer';

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profiles/'), $filename);
            $newUser->picture = $filename;
        }

        if ($newUser->save()) {
            return redirect('login')->with('success', 'Your account is ready. Please login.');
        }

        return redirect()->back()->with('error', 'Something went wrong. Try again.');
    }

    public function logout()
    {
        session()->forget(['id', 'type']);
        return redirect('/login');
    }
}
