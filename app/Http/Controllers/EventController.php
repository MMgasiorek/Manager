<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\EventRepository;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
use App\Models\Client;

class EventController extends Controller
{
    public function index(EventRepository $eventRepo)
    {
        $events= $eventRepo->getAll();

        return view('admin.planning.index', ['events'=> $events]);
    }

    public function show(EventRepository $eventRepo, $id)
    {
        $event = $eventRepo->find($id);

        return view('admin.planning.profile' , ['event' => $event]);
    }

    public function create(Request $request,OrderRepository $orderRepo,EventRepository $eventRepo)
    {

        $client = new Client;
        
        $client->name =             $request->input('name');
        $client->surname =          $request->input('surname');
        $client->email =            $request->input('email');
        $client->phone =            $request->input('phone');

        $client->save();
        
        $last_client = Client::latest()->first();

        $event = new Event;

        $event->title =             $request->input('title');
        $event->start =             $request->input('date_start');
        $event->end =               $request->input('date_end');
        $event->client_id =         $last_client->id;
        $event->employeer_id =      $request->input('employeer_id');
        $event->width =             $request->input('width');
        $event->height =            $request->input('height');
        $event->place =             $request->input('place');
        $event->color =             $request->input('color');
        $event->description =       $request->input('description');

        $event->save();

        $order = $orderRepo->delete($request->input('order_id'));

        $events= $eventRepo->getAll();
        
        return view('admin.planning.index', ["works"=>$events])->with('success','Event created');

    }

    public function delete(EventRepository $eventRepo, $id) 
    {
        $event = $eventRepo->delete($id);

        return back()->with('success','Removed correctly');
    }
}
