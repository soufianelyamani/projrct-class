@extends('layouts.app')
@section('container')
    <div class="card">
        <div class="card-header">Edit Commende</div>
        <div class="card-body">
            <form method="POST" action="{{ route('commandeVente.update', [$edit->id]) }}">
                @method('PUT')
                @csrf

                <label class="badge badge-primary" for="dateCom">Date de commamde :</label>
                <div name="dateCom" class="input-group date" id="datetimepicker" data-target-input="nearest">
                    <input type="date" name="v" value="{{ old('dateCom', $edit->dateCom ?? null) }}" id="dateCom"
                        class="form-control datetimepicker-input" data-target="#datetimepicker" />
                    <div class="input-group-append" data-target="#datetimepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                <!-- Date pick -->
                <script type="text/javascript">
                    $(function() {
                        $('#datetimepicker').datetimepicker();
                    });
                </script>
                <label class="badge badge-primary" for="client_id">Prenom :</label><br>
                <select name="client_id" id="client_id" class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example">
                    <option value="" disabled selected>Choose your client</option>
                    @foreach ($clients as $client)
                        <option value="{{ old('client_id', $client->id ?? null) }}">{{ $client->prenom }}
                            {{ $client->nom }}</option>
                    @endforeach
                </select>
                <br>
                <input type="submit" class="btn btn-success" value="Update"><br>
            </form>
        </div>
    </div>
@endsection
@section('Ajout')
    <a class='fas fa-arrow-alt-circle-left' href="{{ route('commandeVente.index') }}">Back</a>
@endsection
