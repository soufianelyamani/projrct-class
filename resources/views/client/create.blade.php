@extends('layouts.app')
@section('container')
    <div class="card-body">
        <form method="POST" action="{{ route('client.store') }}">
            <label style="color: black" for="nom">Nom </label>
            <input name="nom" id="nom" type="text" class="form-control" /><br>
            @error('nom')
                <div class="alert alert-danger" role="alert">
                    <li style="color:red">{{ $message }}</li>
                </div>
            @enderror <br>
            <label style="color: black" for="prenom">Prenom </label>
            <input name="prenom" id="prenom" type="text" class="form-control" /><br>
            @error('prenom')
                <div class="alert alert-danger" role="alert">
                    <li style="color:red">{{ $message }}</li>
                </div>
            @enderror <br>
            <label style="color: black" for="telephone">Téléphone </label>
            <input name="telephone" id="telephone" type="text" class="form-control" /><br>
            @error('telephone')
                <div class="alert alert-danger" role="alert">
                    <li style="color:red">{{ $message }}</li>
                </div>
            @enderror <br>
            <label style="color: black" for="email">Email </label>
            <input name="email" id="email" type="text" class="form-control" /><br>
            @error('email')
                <div class="alert alert-danger" role="alert">
                    <li style="color:red">{{ $message }}</li>
                </div>
            @enderror <br>
            <label style="color: black" for="ville">Ville </label>
            <input name="ville" id="ville" type="text" class="form-control" /><br>
            @error('ville')
                <div class="alert alert-danger" role="alert">
                    <li style="color:red">{{ $message }}</li>
                </div>
            @enderror <br>
            <label style="color: black" for="adresse">Adresse </label>
            <input name="adresse" id="adresse" type="text" class="form-control" /><br>
            @error('adresse')
                <div class="alert alert-danger" role="alert">
                    <li style="color:red">{{ $message }}</li>
                </div>
            @enderror <br>
            <button id="submit" class="btn btn-success">Add post</button>
            @csrf
        </form>
    </div>
@endsection
@section('Ajout')
    <a class='fas fa-arrow-alt-circle-left' href="{{ route('client.index') }}">Back</a>
@endsection
