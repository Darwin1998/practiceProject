@extends('layouts.app')

@section('content')
    <div class="card" style="width:70%; float: none; margin: 0 auto; ">
        <div class="card-body">
            <div class="card text-center">
                <div class="card-header">
                    Customers
                    <a href="/internet_plans/create" class="btn btn-success float-right"><span class="bi bi-file-earmark-plus"> Add </span></a>

                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>

                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($internet_plans as $plan)
                            <tr>
                                <td>
                                    {{$plan->internet_plane_id}}
                                </td>
                                <td>
                                    {{$plan->name}}
                                </td>

                                <td>
                                    {{$plan->price}}
                                </td>

                                <td>
                                    <div class="btn btn-group">
                                       <a href="/customers/delete/{{$plan->id}}" class="btn btn-danger btn-sm"><span class="bi bi-x-lg"></span></a>
                                        <a href="/customers/edit/{{$plan->id}}" class="btn btn-warning"><span class="bi bi-pencil-square"></span></a>
                                    </div>

                                </td>
                            </tr>
                        @empty
                            <p>No Customer to show</p>
                        @endforelse

                        </tbody>
                    </table>
                    {{$internet_plans->links('pagination::bootstrap-4')}}

                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>

            </div>
        </div>


    </div>







@endsection
