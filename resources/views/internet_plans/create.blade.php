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
                    <form action="/internet_plan" method="POST" autocomplete="off">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputprice">Name</label>
                            <input type="text" class="form-control" name="name" id="inputfirstname" placeholder=" Name">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputlprice">Price</label>
                            <input type="text" class="form-control" name="price" id="inputlastname" placeholder="Price">
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
