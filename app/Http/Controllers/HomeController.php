<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = Customer::where('agent_id', auth()->id())->get();

        return view('home', compact('customers'));
    }

    public function customerLogin(Customer $customer)
    {
        if($customer->agent_id != auth()->id()) {
            return abort(403);
        }

        auth('customers')->login($customer);

        return redirect()->route('customer', [$customer->id]);
    }
    public function customer()
    {
        $customer = Customer::find(auth('customers')->id());

        return view('customer', compact('customer'));
    }
}
