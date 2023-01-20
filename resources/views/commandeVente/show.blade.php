@extends('layouts.app')
@section('container')
    <div class="card">
        {{-- <div class="card-header"> --}}
        <div class="card-body">
            <label class="badge badge-primary" for="id">Id :</label>
            <h3>{{ $show->id }}</h3>
            <label class="badge badge-primary" for="nom">dateCom :</label>
            <p class="fw-bold mb-1">
            <h3>{{ $show->dateCom }}</h3>
            </p>
            <label class="badge badge-primary" for="prenom">command of :</label><br>
            <p class="fw-bold mb-1">
                <a href="{{ route('client.show', [$show->Client->id]) }}">
                    <h3>{{ $show->Client->prenom }} {{ $show->Client->nom }}</h3>
                </a>
            </p>
            {{-- <img src="/uploads/untitled-185-DAI-low-light.jpg" alt="" srcset=""> --}}
        </div>
        {{-- </div> --}}
    </div>
@endsection
@section('Ajout')
    <a class='navbar-brand' href="{{ url()->previous() }}">Back</a>
@endsection
