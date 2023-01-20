<?php

namespace App\Http\Controllers;

use index;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\commandeVente;
use Illuminate\Support\Facades\Session;

class commandeVenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $commande = commandeVente::with('Client')->get();

        return view('commandeVente.index', [
            'commandes' => $commande
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('commandeVente.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'dateCom' => 'required',
            'client_id' => 'required'
        ]);

        commandeVente::create($request->all());

        Session::flash('status store', 'Your add operation has been successfully completed!');

        return redirect()->route('commandeVente.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = commandeVente::with('Client')->find($id);
        return view('commandeVente.show', [
            'show' => $show
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $clients = Client::all();

        $edit = commandeVente::findOrFail($id);
        return view('commandeVente.edit', [
            'clients' => $clients,
            'edit' => $edit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = commandeVente::findOrFail($id);
        // $update1 = Client::find($id);
        $update->update($request->all());
        // $update->id = $request->input("id");
        // $update->dateCom = $request->input("dateCom");
        // $update->client_id = $request->input("client_id");

        $update->save();
        // $update1->save();

        Session::flash('status Edit', 'Your update operation has been successfully completed!');

        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
