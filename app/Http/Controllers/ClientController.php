<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\CommandeVente;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource...............
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct()
    //  {
    //     $this->middleware('auth')->except(['index', 'show', 'archive', 'all']);
    //  }

    public function index()
    {
        // $client = Client::find(1);
        // echo $client->CommandeVente[0]->dateCom;
        // exit();

        $client = Client::withCount('commandeVente', 'user')->orderBy('updated_at', 'desc')->get();

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

        //La méthode onlyTrashed ne récupérera que le client qui a été supprimé.
        $client = Client::onlyTrashed()->withCount('commandeVente')->orderBy('updated_at', 'desc')->get();

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
        //La méthode withTrashed ne récupérera que le client qui a été supprimé.

        $client = Client::withTrashed()->withCount('commandeVente')->orderBy('updated_at', 'desc')->get();

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
        // $this->authorize('client.create');

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
        //validate data
        $request->validate([
            'nom'          => 'required',
            'prenom'       => 'required',
            'telephone'    => 'required',
            'email'        => ['required', 'string', 'email', 'max:255', 'unique:'.Client::class],
            'ville'        => 'required',
            'adresse'      => 'required',
        ]);

        $ad = new Client();
        $ad->nom = $request->input('nom');
        $ad->prenom = $request->input('prenom');
        $ad->telephone = $request->input('telephone');
        $ad->email = $request->input('email');
        $ad->ville = $request->input('ville');
        $ad->adresse = $request->input('adresse');
        $ad->user_id = auth()->id();
        $ad->save();


        // $validation['user_id'] = $request->user()->id;

        // Client::create($validation);

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
        $donné = client::withCount('commandeVente')->get()->find($id);

        // $this->authorize('client', $donné);

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
        // return $edit;

        //pour l'autorisation d'update
        $this->authorize('update', $edit);

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

        //pour l'autorisation d'update

        $this->authorize('update', $update);

        // if (Gate::denies('client.update', $update)) {
        //     abort(403, "You can't edit this client");
        // };


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

        //pour l'autorisation de destroy
        $this->authorize('delete', $client);

        CommandeVente::where('client_id', $client->id);

        $client->delete();

        Session::flash('status Delete', 'Are you sure you want to delete this object?');

        return redirect()->back();
    }

    public function restore($id) {
        $client = Client::onlyTrashed()->where('id', $id)->first();

        $this->authorize('restore', $client);

        $client->restore();

        return Redirect()->back();
    }

    public function deletecompletely($id) {
        $client = Client::onlyTrashed()->where('id', $id)->first();

        $this->authorize('forceDelete', $client);

        $client->forceDelete();

        return redirect()->back();
    }
}
