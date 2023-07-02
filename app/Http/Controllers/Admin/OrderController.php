<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function PendingOrders(){
        $pending_orders = Order::where('status','pending')->latest()->get();
        return view('admin.pendingorders',compact('pending_orders'));
    }
    public function ApprovedOrders(){
        $approved_orders = Order::where('status','approved')->get();
        return view('admin.approvedorders',compact('approved_orders'));
    }
    public function CancelOrder($id){
        $order = Order::findOrFail($id);
        $order->status = "cancelled";
        $order->save();
        return redirect()->route('cancelledorders')->with('message','The order is cancelled!');
    }

    public function CancelledOrders(){
        $cancelled_orders = Order::where('status','cancelled')->get();
        return view('admin.cancelledorders',compact('cancelled_orders'));
    }

    public function ApproveOrders($id){
        $order = Order::findOrFail($id);
        $order->status = "approved";
        $order->save();
        // Order::findOrFail($id)->update([
        //     'status' => "approved",
        // ]);
        
        return redirect()->route('approvedorders')->with('message','Order Approved Successfully!');
    }

    public function CompletedOrders(){
        $completed_orders = Order::where('status','completed')->get();
        return view('admin.completedorders',compact('completed_orders'));
    }

    public function CompleteOrder($id){
        $order = Order::findOrFail($id);
        $order->status = 'completed';
        $order->save();
        
        return redirect()->route('completedorders')->with('message','Order marked as completed!');
    }
}
