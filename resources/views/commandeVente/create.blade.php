@extends('layouts.app')
@section('container')
    <div class="card-body">
        <form method="POST" action="{{ route('commandeVente.store') }}">
            <label style="color: black" for="dateCom">Date De Commande </label>
            <div class="form-group">
                <div name="dateCom" class="input-group date" id="datetimepicker" data-target-input="nearest">
                    <input type="date" name="dateCom" id="dateCom" class="form-control datetimepicker-input"
                        data-target="#datetimepicker" />
                    <div class="input-group-append" data-target="#datetimepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function() {
                    $('#datetimepicker').datetimepicker();
                });
            </script>

            @error('dateCom')
                <div class="alert alert-danger" role="alert">
                    <li style="color:red">{{ $message }}</li>
                </div>
            @enderror <br>
            <label style="color: black" for="client_id">Commande Of </label>
            <select name="client_id" id="client_id" class="form-select form-select-lg mb-3"
                aria-label=".form-select-lg example">
                <option value="" disabled selected>Choose your client</option>
                @foreach ($commandeVente as $cmd)
                    <option value="{{ $cmd->client->id }}">{{ $cmd->client->prenom }} {{ $cmd->client->nom }}</option>
                @endforeach
            </select><br>
            @error('client_id')
                <div class="alert alert-danger" role="alert">
                    <li style="color:red">{{ $message }}</li>
                </div>
            @enderror
            <br>
            <button id="submit" class="btn btn-success">Add post</button>
            @csrf
        </form>
    </div>
@endsection
@section('Ajout')
    <a class='fas fa-arrow-alt-circle-left' href="{{ route('commandeVente.index') }}">Back</a>
@endsection
