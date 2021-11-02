@extends('layouts.app')
@section('content')
    <div>
        <div class="card" style="width:70%; float: none; margin: 0 auto; ">
            <div class="card-body">
                <div class="card text-center">
                    <div class="card-header">
                        New Customer
                    </div>
                    <div class="card-body">
                        @include('helpers.validation')

                        <form action="/internet_plans/{{$internetPlan->internet_plan_id}}}" method="POST" autocomplete="off">
                            @csrf
                            @method('PATCH')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputprice">Name</label>
                                    <input type="text" class="form-control" name="name" id="inputfirstname" value="{{$internetPlan->name}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputprice">Price</label>
                                    <input type="text" class="form-control" name="price" id="inputlastname" value="{{$internetPlan->price}}">
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>

            </div>
        </div>


    </div>

@endsection
