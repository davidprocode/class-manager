<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'login_code' => ['required', 'string'],
        //     'date_of_birth' => ['required', 'date'],
        // ]);

        $client = Client::create([
            'name' => $request->name,
            'login_code' => $request->login_code,
            'date_of_birth' => $request->date_of_birth,
        ]);

        // event(new Registered($client));

        return Redirect::route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
