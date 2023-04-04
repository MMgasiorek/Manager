<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ClientRepository;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(ClientRepository $clientRepo)
    {
        $clients = $clientRepo->getAll();

        return view('admin.studio.clients.list' , ['clients' => $clients]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'surname'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
        ]);


        $client = new Client;
        
        $client->name =     $request->input('name');
        $client->surname =  $request->input('surname');
        $client->email =    $request->input('email');
        $client->phone =    $request->input('phone');

        $client->save();

        return back()->with('success','New client added');
    }

    public function edit(ClientRepository $clientRepo, $id)
    {
        $client = $clientRepo->find($id);

        return view('admin.studio.clients.edit' , ['client' => $client]);
    }

    public function update(ClientRepository $clientRepo, Request $request)
    {
        $client = $clientRepo->find($request->input('id'));

        $client->name = $request->input('name');
        $client->surname = $request->input('surname');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');

        $client->save();

        return back()->with('success','Edited correctly');
    }

    public function delete(ClientRepository $clientRepo, $id) 
    {
        $client = $clientRepo->delete($id);

        return back()->with('success','Removed correctly');
    }
}
