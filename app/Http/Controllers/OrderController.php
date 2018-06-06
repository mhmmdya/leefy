<?php

namespace App\Http\Controllers;

use App\Order;
use App\Jobs\ProcessOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\OrderResource;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'minimum_rating' => 'required|numeric|between:0.0,5.0',
            'order_type_id' => 'required|exists:order_types,id',
            'priority_status_id' => 'required|exists:priority_statuses,id',
        ]);

        $customer = Auth::user();

        $order = Order::create([
            'uuid' => str_random(10),
            'minimum_rating' => $request->minimum_rating,
            'customer_id' => $customer->id,
            'professional_id' => null,
            'order_type_id' => $request->order_type_id,
            'priority_status_id' => $request->priority_status_id,
            'order_status_id' => 1,
        ]);

        dispatch(new ProcessOrder($order));

        return new OrderResource($order);
    }
}
