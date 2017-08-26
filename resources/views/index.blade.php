@extends('layouts.master')
@section('sidebar')
    @include('layouts.sidebar')
@endsection
@section('main')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">


        <h2>Order Check List</h2>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Client</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th >进度</th>
                    <th id="aaa" ></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)

                       <tr>

                        <td>{{$order->id}}</td>
                        <td>{{$order->client}}</td>
                        <td>{{$order->item}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->comment}}</td>
                           <td> <a href="/order/{{$order->id}}"> Details</a></td>

                        </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </main>
@endsection


