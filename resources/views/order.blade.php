@extends('layouts.master')

@section('main')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <div class="col-sm-8 blog-main">
        <h1>Place orders</h1>

        <form method="POST" action="/order">
            {{csrf_field()}}

            <div class="form-group">
                <label for="client">Client:</label>
                <input type="text" class="form-control" id="client" name="client" required>
            </div>

            <div class="form-group">
                <label for="item">Item:</label>
                <input type="text" class="form-control" id="item" name="item" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="oriprice">Original Price:</label>
                <input type="number" class="form-control" id="oriprice" name="oriprice" required>
            </div>
            <div class="form-group">
                <label for="sellprice">Sell Price:</label>
                <input type="number" class="form-control" id="sellprice" name="sellprice" required>
            </div>
            <div class="form-group">
                <label for="duedate">Due Date:</label>
                <input type="date" class="form-control" id="duedate" name="duedate" required>
            </div>

            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Make Order</button>
            </div>

            @include('layouts/error')
        </form>



    </div>
    </main>
@endsection