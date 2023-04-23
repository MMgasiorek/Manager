<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\OrderRepository;
use App\Repositories\EmployeerRepository;
use App\Models\Order;
use App\Http\Requests\ValidationClass;

class OrderController extends Controller
{

    public function index(OrderRepository $orderRepo)
    {
        $orders = $orderRepo->getAll();

        return view('admin.orders.index' , ['orders' => $orders]);
    }

    public function show(EmployeerRepository $employeerRepo,OrderRepository $orderRepo, int $id)
    {
        $order = $orderRepo->find($id);
        $employees = $employeerRepo->getAll();

        return view('admin.orders.edit' , compact('order', 'employees'));  
    }

    public function create(ValidationClass $request)
    {
        $request->validated();

        $order = new Order;
        
        $order->name =             $request->input('name');
        $order->surname =          $request->input('surname');
        $order->phone =            $request->input('phone');
        $order->email =            $request->input('email');
        $order->width =            $request->input('width');
        $order->height =           $request->input('height');
        $order->place =            $request->input('place');
        $order->color =            $request->input('color');
        $order->description =      $request->input('description');

        $order->save();

        return back()->with('success','Message has been sent');
    }

    public function delete(OrderRepository $orderRepo, int $id) 
    {
        $orderRepo->delete($id);

        return back()->with('success','Removed correctly');
    }

}
