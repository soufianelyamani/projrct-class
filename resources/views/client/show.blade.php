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

    <div class="card" style="padding: 20px">
        <table>
            <tr>
               <td> <b><u>Nom :</u></b></td>
                <td>- {{ $donne->nom }}</td>
            </tr>
         
            <tr>
               <td> <b><u>Prenom :</u></b></td>
                <td>- {{ $donne->prenom }}</td>
            </tr>
            <tr>
               <td> <b><u>Téléphone :</u></b></td>
                <td>- {{ $donne->telephone }}</td>
            </tr>
            <tr>
               <td> <b><u>Email :</u></b></td>
                <td>- {{ $donne->email }}</td>
            </tr>
            <tr>
               <td> <b><u>Ville :</u></b></td>
                <td>- {{ $donne->ville }}</td>
            </tr>
            <tr>
                <td> <b><u>Adresse :</u></b></td>
                 <td>- {{ $donne->adresse}}</td>
             </tr>
             <tr>
                <td> <b><u>Commande :</u></b></td>
                 <td>- {{ $donne->commande_vente_count }}</td>
                 <td>   @if ((new Carbon\Carbon())->diffInMinutes($donne->created_at) < 5)
                    <strong>New!</strong>
                @endif</td>
             </tr>
        </table>
      
    </div>
@endsection
@section('Ajout')
    <a class='navbar-brand' href="{{ url()->previous() }}">Back</a>
@endsection
