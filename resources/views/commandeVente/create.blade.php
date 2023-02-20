@extends('layouts.app')
@section('container')
<style>
    .my-5{
      width: 50%
  }
</style>
    <div class="card-body">
        <form method="POST" action="{{ route('commandeVente.store') }}">
            <label style="color: black; padding: 25px" for="dateCom" >Date De Commande </label>
            <div class="form-group" style="padding-left: 25px;padding-bottom: 0px">
                <div name="dateCom" class="input-group date" id="datetimepicker" data-target-input="nearest" style="width: 43%">
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
            <label style="color: black;padding: 25px;padding-bottom: 5px" for="client_id">Commande Of </label>
            <select name="client_id" id="client_id" class="form-select form-select-lg mb-3"
                aria-label=".form-select-lg example" style="width: 43% ;margin-left: 25px;">
                <option value="" disabled selected>Choose your client</option>
                @foreach ($clients as $cmd)
                    <option value="{{ $cmd->id }}">{{ $cmd->prenom }} {{ $cmd->nom }}</option>
                @endforeach
            </select><br>
            @error('client_id')
                <div class="alert alert-danger" role="alert">
                    <li style="color:red">{{ $message }}</li>
                </div>
            @enderror
            <br>
            <button id="submit" class="btn btn-success" style="margin: 25px; margin-top: 0;width: 43%">Add Commande</button>
            @csrf
        </form>
    </div>
@endsection
@section('Ajout')
    <a  style="margin: 35px"  class='fas fa-arrow-alt-circle-left' href="{{ route('commandeVente.index') }}">Back</a>
@endsection
