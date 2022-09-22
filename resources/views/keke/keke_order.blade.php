@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Order Keke') }}</h3></div>

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
                        @forelse ($keke_users as $keke_user)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $keke_user->name }}</td>
                            <td>{{ $keke_user->phone_no }}</td>
                            <td>{{ $keke_user->user_description }}</td>
                            <td>{{ $keke_user->email }}</td>
                            <td><button type="button" class="btn btn-primary"><a class="text-white" style="text-decoration: none" href="{{ url('/keke/') }}/{{$keke_user->id}}/create" class="btn btn-default">Order Keke</a></button></td>

                          </tr>
                        @empty
                            <h3>NO KEKE USER FOUND.</h3>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
