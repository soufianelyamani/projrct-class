@extends('layouts.app')
@section('container')
    <div class="card">
        {{-- <div class="card-header"> --}}
        <div class="card-body">
            <label style="background-color: grey" class="badge badge-primary" for="id">Id :</label>
            <h3>{{ $donne->id }}</h3>
            <label style="background-color: grey" class="badge badge-primary" for="nom">Name :</label>
            <p class="fw-bold mb-1">
            <h3>{{ $donne->nom }}</h3>
            </p>
            <label style="background-color: grey" class="badge badge-primary" for="prenom">Prenom :</label><br>
            <p class="fw-bold mb-1">
            <h3>{{ $donne->prenom }}</h3>
            </p>
            <label style="background-color: grey" class="badge badge-primary" for="telephone">Téléphone :</label><br>
            <p class="fw-bold mb-1">
            <h3>{{ $donne->telephone }}</h3>
            </p>
            <label style="background-color: grey" class="badge badge-primary" for="Email">Email : </label>
            <p class="fw-bold mb-1">
            <h3>{{ $donne->email }}</h3>
            </p>
            <label style="background-color: grey" class="badge badge-primary" for="ville">Ville : </label>
            <p class="fw-bold mb-1">
            <h3>{{ $donne->ville }}</h3>
            </p>
            <label style="background-color: grey" class="badge badge-primary" for="Adresse">Adresse :</label>
            <p class="fw-bold mb-1">
            <h4>{{ $donne->adresse }}</h4>
            </p>
            {{-- <label class="badge badge-primary" for="Adresse">List de Commande :</label> --}}
            <label style="background-color: grey" class="badge badge-primary" for="Nbr de Com">Nbr de Com</label>
            <p class="fw-bold mb-1">
            <h4>{{ $donne->commande_vente_count }}</h4>
            </p>
            {{-- <img src="/uploads/untitled-185-DAI-low-light.jpg" alt="" srcset=""> --}}
        </div>
        {{-- </div> --}}
    </div>
@endsection
@section('Ajout')
    <a class='navbar-brand' href="{{ url()->previous() }}">Back</a>
@endsection
