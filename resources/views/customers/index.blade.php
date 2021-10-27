@extends('layouts.app')

@section('content')
    <div>
        <main>
            
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card " style="width: 1000px">
                        <div class="card text-center">
                            <div class="card-header">
                              Customers
                               
                               
                               <a href="/customers/create" class="btn btn-success float-right"><span class="bi bi-person-plus"> Add </span></a>
                                 <!-- Button trigger modal -->
                                 <!--<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModalCenter">Add  <span class="bi bi-person-plus"></span></button>
                                  
                                </button>
                              -->
                            </div>
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Contact</th>
                                  <th scope="col">Address</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                               @forelse ($customers as $customer)
                                  <tr>
                                    <td>
                                      {{$customer->id}}
                                    </td>
                                    <td>
                                        {{$customer->first_name}}
                                    </td>

                                    <td>
                                      {{$customer->last_name}}
                                    </td>
                                    <td>
                                      {{$customer->contact_number}}
                                    </td>
                                    <td>
                                      {{$customer->address}}
                                    </td>
                                    <td>
                                      <div class="btn btn-group">
                                        <a href="/customers/delete/{{$customer->id}}" class="btn btn-danger btn-sm"><span class="bi bi-x-lg"></span></a>
                                        <a href="/customers/edit/{{$customer->id}}" class="btn btn-warning"><span class="bi bi-pencil-square"></span></a>
                                      </div>
                                      
                                    </td>
                                  </tr>
                               @empty
                                   <p>No Customer to show</p>
                               @endforelse
                              
                              </tbody>
                            </table>
                            {{$customers->links('pagination::bootstrap-4')}}
                            <div class="card-footer text-muted">
                              2 days ago
                            </div>
                          </div>    
                    </div>
                </div>
            </div>
           
            <div>
            

              <!-- Modal 
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Add New Customer</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                      <form action="/customer" method="POST">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputfirstname">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" autocomplete="off">
                          </div>
                         
                        </div>
                        <div class="form-group">
                          <label for="inputlastname">Last Name</label>
                          <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" autocomplete="off">
                        </div>
                        <div class="form-group">
                          <label for="inputcontactnumber">Contact Number</label>
                          <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="09xxxxxxx" autocomplete="off">
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputaddress">Address</label>
                            <input type="text" class="form-control"name="address"  id="address" autocomplete="off">
                          </div>
                         
                          <button type="submit" class="btn btn-primary btn-sm">Add</button>
                       
                      </form>
                     
                    </div>
                  
                  </div>
                </div>
              -->
              </div>
            </div>
        </main> 
    </div>    

@endsection