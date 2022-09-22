@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card">
                <div class="card-header"><h3>{{ __('My Ordered Keke') }}</h3></div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Location</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($keke_orders as $keke_order)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $keke_order->user->name }}</td>
                            <td>{{ $keke_order->user->user_description }}</td>
                            <td>{{ $keke_order->location }}</td>
                          </tr>
                        @empty
                            <h3>NO KEKE ORDER FOUND.</h3>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="card">
                <div class="card-header"><h3>{{ __('My Ordered Food') }}</h3></div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Location</th>
                            <th scope="col">Food Type</th>
                            <th scope="col">Quantity</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($food_orders as $food_order)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $food_order->user->name }}</td>
                            <td>{{ $food_order->user->user_description }}</td>
                            <td>{{ $food_order->location }}</td>
                            <td>{{ $food_order->food_type }}</td>
                            <td>{{ $food_order->qty }}</td>
                          </tr>
                        @empty
                            <h3>NO FOOD ORDER FOUND.</h3>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
