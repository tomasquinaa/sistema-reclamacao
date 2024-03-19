<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $clients = new Client();
        $clients->nome = trim($request->nome);
        $clients->email = trim($request->email);
        $clients->save();

        return view('clients.create');
    }
}
