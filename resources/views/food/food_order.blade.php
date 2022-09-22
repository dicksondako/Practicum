@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Order Food') }}<h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Description</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($food_users as $food_user)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $food_user->name }}</td>
                            <td>{{ $food_user->phone_no }}</td>
                            <td>{{ $food_user->user_description }}</td>
                            <td>{{ $food_user->email }}</td>
                            <td><button type="button" class="btn btn-primary"><a href="#" class="text-white" style="text-decoration: none">Order</a></button></td>

                          </tr>
                        @empty
                            <h3>NO RESTAURANT FOUND.</h3>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
