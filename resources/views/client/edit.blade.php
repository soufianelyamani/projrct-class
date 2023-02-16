@extends('layouts.app')
@section('container')
    <div class="card">
        <div class="card-header">Edit Client</div>
        <div class="card-body">
            <form method="POST" action="{{ route('client.update', [$edit->id]) }}">
                @method('PUT')
                @csrf

                <label class="badge badge-primary" for="nom">Name :</label>
                <input type="text" name="nom" value="{{ old('nom', $edit->nom ?? null) }}" class="dropdown-item">

                <label class="badge badge-primary" for="prenom">Prenom :</label><br>
                <input type="text" name="prenom" value="{{ old('prenom', $edit->prenom ?? null) }}"
                    class="dropdown-item">

                <label class="labadge badge-primary" for="telephone">Téléphone :</label><br>
                <input type="text" name="telephone" value="{{ old('telephone', $edit->telephone ?? null) }}"
                    class="dropdown-item">

                <label class="badge badge-primary" for="Email">Email : </label>
                <input type="text" name="email" value="{{ old('email', $edit->email ?? null) }}" class="dropdown-item">

                <label class="badge badge-primary" for="ville">Ville : </label>
                <input type="text" name="ville" value="{{ old('ville', $edit->ville ?? null) }}" class="dropdown-item">


                <label class="badge badge-primary" for="Adresse">Adresse :</label>
                <input type="text" name="adresse" value="{{ old('adresse', $edit->adresse ?? null) }}"
                    class="dropdown-item">


                <br>
                <input type="submit" class="btn btn-success" value="Update"><br>
            </form>
        </div>
    </div>
@endsection
@section('Ajout')
    <a class='fas fa-arrow-alt-circle-left' href="{{ route('client.index') }}">Back</a>
@endsection
