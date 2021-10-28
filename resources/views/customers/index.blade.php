@extends('layouts.app')

@section('content')
    <div class="card" style="width:70%; float: none; margin: 0 auto; ">
        <div class="card-body">
            <div class="card text-center">
                <div class="card-header">
                    Customers
                    <a href="/customers/create" class="btn btn-success float-right"><span class="bi bi-person-plus"> Add </span></a>

                </div>
                <div class="card-body">
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







@endsection
