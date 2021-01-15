<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\PaymentMethod;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::latest()->paginate(5);

        return view('payments.index', compact('payments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Order::all();
        $payment_methods = PaymentMethod::all();
        return view('payments.create', compact(['orders', 'payment_methods']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'payment_method_id' => 'required',
            'paid_amount' => 'required',
            'reversed_amount' => 'required',
        ]);

        Payment::create($request->all());

        return redirect()->route('payments.index')
            ->with('success', 'Payment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return view('payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $orders = Order::all();
        $payment_methods = PaymentMethod::all();
        return view('payments.edit', compact(['payment', 'orders', 'payment_methods']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'order_id' => 'required',
            'payment_method_id' => 'required',
            'paid_amount' => 'required',
            'reversed_amount' => 'required',
        ]);
        $payment->update($request->all());

        return redirect()->route('payments.index')
            ->with('success', 'Payment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payments.index')
            ->with('success', 'Payment deleted successfully');
    }
}
