<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\CommandeVente;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
        $this->middleware('auth')->except(['index', 'show', 'archive', 'all']);
     }

    public function index()
    {
        // $client = Client::find(1);
        // echo $client->CommandeVente[0]->dateCom;
        // exit();

        $client = Client::withCount('CommandeVente')->get();

        return view('client.index', [
            'clients' => $client,
            'tab' => 'list'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function archive()
     {

        $client = Client::onlyTrashed()->withCount('CommandeVente')->get();

        return view('client.index', [
            'clients' => $client,
            'tab' => 'archive'
        ]);
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function all()
    {
        $client = Client::withTrashed()->withCount('CommandeVente')->get();

        return view('client.index', [
            'clients' => $client,
            'tab' => 'all'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
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
            'nom'          => 'required',
            'prenom'       => 'required',
            'telephone'    => 'required',
            'email'        => ['required', 'string', 'email', 'max:255', 'unique:'.Client::class],
            'ville'        => 'required',
            'adresse'      => 'required',
        ]);

        Client::create($request->all());

        Session::flash('status store', 'Your add operation has been successfully completed!');

        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donné = client::withCount('CommandeVente')->get()->find($id);

        // $nbrCom = Client::withCount('CommandeVente')->get()->find($id);




        $commande = CommandeVente::all();

        return view("client.show", [
            'commandes' => $commande,
            'donne' => $donné,
            // 'nbrComs' => $nbrCom,
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
        $edit = client::findOrFail($id);

        return view('client.edit', [
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
        $update = client::findOrFail($id);

        $update->nom = $request->input("nom");
        $update->prenom = $request->input("prenom");
        $update->telephone = $request->input("telephone");
        $update->email = $request->input("email");
        $update->ville = $request->input("ville");
        $update->adresse = $request->input("adresse");

        $update->save();

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
        // Client::whereIn('id', $id)->where('status', 'active')->delete();

        $client = Client::find($id);

        CommandeVente::where('client_id', $client->id);

        $client->delete();

        Session::flash('status Delete', 'Are you sure you want to delete this object?');

        return redirect()->back();
    }
}
