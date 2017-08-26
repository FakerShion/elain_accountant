<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index(){
        $orders = Order::latest()->get();

        return view('index',compact('orders'));
    }

    public function store(Request $request){

        //input validation
        $this->validate(request(),[

            'client' => 'required|min:4',
            'quantity' => 'required',
            'item' => 'required',
            'oriprice' =>'required',
            'sellprice' =>'required',
            'duedate' =>'required',
            'comment' =>'required'

        ]);

        //Save it to the database
        $order = new Order;
        $order->client = request('client');
        $order->quantity = request('quantity');
        $order->item = request('item');
        $order->oriprice = request('oriprice');
        $order->sellprice = request('sellprice');
        $order->duedate = request('duedate');
        $order->comment = request('comment');
        $order->save();


        //And then redirect
        return redirect('/');
    }

    public function show(Request $request){

        $id = $request->order;
        $order = Order::find($id);

        return view('/show',compact('order'));
    }

    public function change(Request $request){
        $id = $request->order;
        $order = Order::find($id);

        if($request->exists('client')){
            $order->client = request('client');
        }
        if( $request->exists('quantity')){
            $order->quantity = request('quantity');
        }
        if( $request->exists('item')){
            $order->item = request('item');
        }
        if($request->exists('oriprice')){
            $order->oriprice = request('oriprice');
        }
        if( $request->exists('sellprice')){
            $order->sellprice = request('sellprice');
        }
        if($request->exists('duedate')){
            $order->duedate = request('duedate');
        }
        if( $request->exists('comment')){
             $order->comment = request('comment');
        }


        $order->save();

        return back();

    }
}
