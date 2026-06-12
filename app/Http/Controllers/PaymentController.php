<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(Request $request)
    {
        Payment::create($request->all());
        return redirect()->route('payments.index');
    }

    public function show($id)
    {
        $payments = Payment::findOrFail($id);
        return view('payments.show', compact('payments'));
    }
}
