<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function index(): View
    {
        $customers = auth()->user()->customers;

        return view('home', compact('customers'));
    }

    public function customerLogin(Customer $customer): RedirectResponse
    {
        if(! auth()->user()->customers->contains($customer)) {
            abort(403);
        }

        auth('customers')->login($customer);

        return redirect()->route('customer');
    }

    public function customer(): View
    {
        $customer = Customer::find(auth('customers')->id());

        return view('customer', compact('customer'));
    }
}
