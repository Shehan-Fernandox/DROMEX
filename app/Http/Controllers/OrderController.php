<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Order;
use App\Models\Product;
use App\Models\Province;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $total_orders = Order::count();
        $pending_orders = Order::where('status', 'Pending')->count();
        $complete_orders = Order::where('status', 'Complete')->count();
        $cancelled_orders = Order::where('status', 'Cancelled')->count();
        $orders = Order::all();
        return view('admin.adminOrder.index', compact('orders', 'total_orders', 'pending_orders', 'complete_orders', 'cancelled_orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // Get product details
        $product = Product::findOrFail($request->product_id);

         $request->validate([
            'first_name' => 'required|string|max:255|min:5|regex:/^[A-Za-z0-9\s\-]+$/',
            'last_name' => 'required|string|max:255|min:5|regex:/^[A-Za-z0-9\s\-]+$/',
            'email' => 'required',
            'address' => 'required',
            'zip' => 'required',
           



        ]);


        // Create order
        Order::create([
            'user_id'        => auth()->id(),
            'product_id'     => $product->id,
            'product_name'   => $product->product_name,
            'product_price'  => $product->product_price,
            'aircraft'  => $product->aircraft, // column name in products table
            'first_name'     => $request->first_name,
            'last_name'      => $request->last_name,
            'email'          => $request->email,
            'address'        => $request->address,
            'district'           => $request->district,
            'province'       => $request->province,
            'zip'            => $request->zip,
        ]);

        return redirect()->route('pages.profile')->with('success', 'Order placed successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show($productId)
    {
        $provinces = Province::all();
        $product = Product::findOrFail($productId);

        return view('pages.order', compact('product', 'provinces'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($orderId)
    {
        $order = Order::findOrFail($orderId);

        return view('admin.adminOrder.order_status', compact('order'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getDistricts($province_id)
    {
        $districts = District::where('province_id', $province_id)->get();
        return response()->json($districts);
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'status' => 'required|in:' . implode(',', Order::statuses())
        ]);

        $order->status = $request->status;
        $order->save();

        return redirect()->route('adminOrder.index')->with('success', 'Order status updated!');
    }

    public function cancel(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'cancel_reason' => 'required|string|max:500'
        ]);

        if ($order->status === Order::STATUS_COMPLETED) {
            return back()->with('error', 'Completed orders cannot be cancelled.');
        }

        $order->status = Order::STATUS_CANCELLED;
        $order->cancel_reason = $request->cancel_reason;
        $order->save();

        return back()->with('success', 'Order cancelled with reason!');
    }
}
