<?php

namespace Shop\Http\Controllers;

use Illuminate\Http\Request;
use Shop\Order;
use Shop\OrderDetail;
use Shop\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id', 'DECS')->paginate(5);
        return view('back-end.orders.index')->with(['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function show($id)
    {
        $order = Order::find($id);
        $products = OrderDetail::where('order_id', $id)->get();
        return view('back-end.orders.show')
            ->with(['order' => $order, 'products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $products = OrderDetail::where('order_id', $id)->get();
        return view('back-end.orders.edit')
            ->with(['order' => $order, 'products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return redirect()->route('orders.index')
            ->with(['message' => 'Xử lý thành công!', 'alert' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->status = 2;
        $order->save();
        return redirect()->route('orders.index')
            ->with(['message' => 'Hủy thành công!', 'alert' => 'success']);
    }
}
