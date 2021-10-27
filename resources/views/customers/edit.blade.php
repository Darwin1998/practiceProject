@extends('layouts.app')
@section('content')
<div>
    <div class="card r" style="width:70%; float: none; margin: 0 auto; ">
        <div class="card-body">
            <div class="card text-center">
                <div class="card-header">
                  Update Customer
                </div>
                <div class="card-body">
                    <form action="/#" method="POST" autocomplete="off">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputfirstname">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="inputfirstname" value="{{$customer->first_name}}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputlastname">Last Name</label>
                            <input type="text" class="form-control"name="last_name" id="inputlastname" value="{{$customer->last_name}}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputaddress">Address</label>
                            <input type="text" class="form-control"name="address" id="inputaddress" value="{{$customer->address}}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputcontactnumber">Contact Number</label>
                            <input type="text" class="form-control"name="contact_number" id="inputcontact" value="{{$customer->contact_number}}">
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