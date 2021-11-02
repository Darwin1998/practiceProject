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

    public function delete(InternetPlan  $internetPlan)
    {
        $internetPlan->delete();
        return redirect('/internet_plans');
    }
    public function edit(InternetPlan  $internetPlan)
    {

        return view('internet_plans.edit', compact('internetPlan'));
    }

    public function update(InternetPlan $internetPlan, Request $request)
    {


        $data = $request->validate([

            'name' => 'required',
        'price' => 'required|numeric'

        ]);

        $internetPlan->update($data);

        return redirect('/internet_plans');
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
