<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\commandeVente;
use App\Models\LigneCommandeVente;
use App\Models\Produit;
use Illuminate\Support\Facades\Auth;
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
   
        $commande = commandeVente::with('client')->get();
     
        return view('commandeVente.index', [
            'commandes' => $commande,
            
          
            'tab' => 'list'
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

        $commandeVente = commandeVente::with(['client', 'user'])->orderBy('updated_at', 'desc')->get();

        return view('commandeVente.create',[ compact('commandeVente'),'clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commande = commandeVente::with('client')->get();
        // dd($request->all());

        $request->validate([
            'dateCom' => 'required',
            'client_id' => 'required'
        ]);

        $ad = new commandeVente();
        $ad->dateCom = $request->input('dateCom');
        $ad->client_id = $request->input('client_id');
        $ad->user_id = auth()->id();
        $ad->save();

        // commandeVente::create($request->all());

        Session::flash("status store', 'Votre opération d'ajout a été effectuée avec succès !");

        // return redirect()->route('commandeVente.index');
        // return view('commandeVente.index');
        return view('commandeVente.index', [
            'commandes' => $commande,
          
            'tab' => 'list'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // // $show = commandeVente::with('client')->find($id);
        // $produit = LigneCommandeVente::with(['commandeVente', 'produit'])->get();
        // // $id = $show->produit->typeProduit_id;
        // $tab=[];
        // foreach($produit as $cap){
        //     if($cap->commandeVente_id == $id){
        //         array_push($tab,$cap);
        //     }
        // }
        // $commandeVente = commandeVente::with('client')->find($id);

        // $produit = Produit::with(['TypeProduit'])->find($id);
        // return view('ligneCommandeVente.show', [
        //     'shows' => $tab,
        //     'show2' => $produit
        // ]);
        $show = commandeVente::with('client')->find($id);
  

        return view("commandeVente.show", [
            'show' => $show,
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
        // return $edit;
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
        $update->dateCom = $request->input("dateCom");
        $update->client_id = $request->input("client_id");

        $update->save();
        // $update1->save();

        Session::flash('status Edit', 'Your update operation has been successfully completed!');

        return redirect()->route('commandeVente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commandeVente = commandeVente::with(['client'])->get()->find($id);

        // CommandeVente::where('client_id', $commandeVente->id);

        $commandeVente->delete();


        return redirect()->back();
    }
}
