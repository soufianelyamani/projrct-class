@extends('layouts.app')
@section('container')

    

    <div class="card">
        {{-- <div class="card-header"> --}}
        <div class="card-body">@foreach ($shows as $show)
            <label class="badge badge-primary" for="nom">Libelle :</label>
            <p class="fw-bold mb-1">
            <h3>{{ $show->libelle }}</h3>
            </p>
            <label class="badge badge-primary" for="nom">Type Produit :</label>
            <p class="fw-bold mb-1">
            <h3>{{ $show2->TypeProduit->libelle }}</h3>
            </p>
            <label class="badge badge-primary" for="nom">Prix :</label>
            <p class="fw-bold mb-1">
            <h3>{{ $show->produit->prix }}</h3>
            </p>
            <label class="badge badge-primary" for="nom">description :</label>
            <p class="fw-bold mb-1">
            <h3>{{ $show->produit->description }}</h3>
            </p>
            <label class="badge badge-primary" for="nom">Quantité de Stocke :</label>
            <p class="fw-bold mb-1">
            <h3>{{ $show->produit->qtStock }}</h3>
            </p>
@endforeach
            {{-- <img src="/uploads/untitled-185-DAI-low-light.jpg" alt="" srcset=""> --}}
        </div>
        {{-- </div> --}}
    </div>
    
@endsection
{{-- @section('Ajout')
    <a class='navbar-brand' href="{{ url()->previous() }}">Back</a>
@endsection --}}
