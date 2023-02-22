<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public static function store(OrderStoreRequest $request){
        
        Order::create([
            "subject" => $request->subject,
            "message" => $request->message,
            "user_id" => Auth::id(),
        ]);

        return response()->json([
            "status" => true
        ],201);
    }

    public static function index(){
        
        $orders = Order::where("user_id", Auth::id())->get();

        return response()->json([
            "status" => true,
            "orders" => $orders
        ],200);
        
    }
}
