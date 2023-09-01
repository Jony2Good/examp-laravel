<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //index,show, store? update,delete

    public function index()
    {
        $clients = Client::paginate(10);
        return view('client.client', compact('clients'));
    }

    public function show(Client $client)
    {
        return view('client.about', compact('client'));

    }

    public function store()
    {
       $data = request()->validate([
           'first_name' => 'string',
           'last_name' => 'string',
           'email' => 'email',
           'phone' => 'string',
           'address' => 'string',
           'company' => 'string',
       ]);
        Client::create($data);
        return redirect()->route('client.index');
    }
    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    public function update(Client $client)
    {
        $data = request()->validate([
            'first_name' => 'string',
            'last_name' => 'string',
            'email' => 'email',
            'phone' => 'string',
            'address' => 'string',
            'company' => 'string'
        ]);
        $client->update($data);
        return redirect()->route('client.show', $client->id);
    }
    public function destroy(Client $client)
    {
        Client::find($client->id)->delete();
        return redirect()->route('client.index');
    }
}
