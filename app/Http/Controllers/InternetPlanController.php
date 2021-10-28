<?php

namespace App\Http\Controllers;

use App\Models\InternetPlan;
use Illuminate\Http\Request;

class InternetPlanController extends Controller
{
    public function index()
    {
        $internet_plans = InternetPlan::query()->paginate(5);
        return view('internet_plans.index',compact('internet_plans'));
    }
    public function create()
    {
        return view('internet_plans.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'name' => 'required',
            'price' => 'required',
        ]);

        InternetPlan::create($data);
        return redirect('/internet_plans');
    }
}
