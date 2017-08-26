
@extends('layouts.master')

@section('main')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

        <form method="POST" action="/order/{{$order->id}}" >
            {{csrf_field()}}
        <div class="table-responsive">




            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Attribute</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>Client</th>
                    <th>{{$order->client}}
                        <button class="change" id="change_client" value="true">change</button>
                    </th>


                </tr>
                <tr>
                    <th>Item</th>
                    <th>{{$order->item}}
                        <button class="change" id="change_item" value="true">change</button>
                    </th>

                </tr>
                <tr>
                    <th>Quantity</th>
                    <th>{{$order->quantity}}
                          <button class="change" id="change_quantity" value="true">change</button>
                    </th>
                </tr>
                <tr>
                    <th>Original Price</th>
                    <th>{{$order->oriprice}}
                         <button class="change" id="change_oriprice" value="true">change</button>
                    </th>

                </tr>
                <tr>
                    <th>Sell Price</th>
                    <th>{{$order->sellprice}}
                         <button class="change" id="change_sellprice" value="true">change</button>
                    </th>

                </tr>
                <tr>
                    <th>Due Date</th>
                    <th>{{$order->duedate}}
                    <button class="change"  id="change_duedate" value="true">change</button>
                    </th>

                </tr>
                <tr>
                <th>Comment</th>
                <th>{{$order->comment}}
                    <button class="change"  id="change_comment" value="true">change</button>
                </th>

                </tr>

                </tbody>
            </table>


        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>



    </main>




@endsection

<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/changeorder.js')}}"></script>
<link rel="stylesheet" href="{{ asset('css/change.css')}}">