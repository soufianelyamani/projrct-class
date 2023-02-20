@extends('layouts.app')
@section('container')
<style>
        h3{
        margin-left:90px 
    } 
    .my-5{
        width: 50%
    }
    .label{
        font-size: 15px;
    }
    .label1{
        font-size: 22px;
    }
    .div{
        display: flex;
        flex-direction: column
    }
    td{
       font-size: 20px;
       padding-bottom: 35px 
    }
</style>
    <div class="card">
        {{-- <div class="card-header"> --}}
        <div class="card-body">

            <table>
                <tr>
                    <td>Date Commande : </td>
                    <td>{{ $show->dateCom }} </td>
                </tr>
                <tr>
                    <td>Commande Of: </td>
                    <td> <a href="{{ route('client.show', [$show->Client->id]) }}">
                        <h6>{{ $show->Client->prenom }} {{ $show->Client->nom }}</h6>
                    </a></td>
                </tr>
            </table>
            {{-- <label class="badge badge-primary" for="nom">dateCom :</label>
            <p class="fw-bold mb-1">
            <h3>{{ $show->dateCom }}</h3>
            </p>
            <label class="badge badge-primary" for="prenom">command of :</label><br>
            <p class="fw-bold mb-1">
                <a href="{{ route('client.show', [$show->Client->id]) }}">
                    <h3>{{ $show->Client->prenom }} {{ $show->Client->nom }}</h3>
                </a>
            </p> --}}
            {{-- <img src="/uploads/untitled-185-DAI-low-light.jpg" alt="" srcset=""> --}}
        </div>
        {{-- </div> --}}
    </div>
@endsection
@section('Ajout')
    <a class='navbar-brand' href="{{ url()->previous() }}">Back</a>
@endsection
