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
    
}
