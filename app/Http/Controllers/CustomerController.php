<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
       $customers = Customer::query()->paginate(5);
       return view('customers.index',compact('customers')); 
      
    }

    public function create()
    {
        return view('customers.create');

    }
    public function delete(Customer $customer)
    {
        $customer->delete();
        return redirect("/customers");
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }

    public function store(Request $request)
    {
      
        $data = $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'contact_number' => 'required',
            'address' => 'required',
           
        ]);

        
        Customer::create($data);
       
       // return redirect()->action([CustomerController::class, 'index']); 
       return redirect("/customers");
      //  return response()->json([
        //    "status" => "OK"
        //]);
    }
    
}
