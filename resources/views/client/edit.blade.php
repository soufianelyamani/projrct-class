@extends('layouts.app')
@section('container')
<style>
      
    .my-5{
        width: 50%
    }
    .label{
        font-size: 20px;
        margin: 20px
    }
    input{
        width: 100% !important;
        border-radius: 5px
    }
    td{
       font-size: 20px;
       padding-top: 35px ;
       padding-right: 30px 
    }
</style>
    <div class="card">
        <div class="card-header">Edit Client</div>
        <div class="card-body">
            <form method="POST" action="{{ route('client.update', [$edit->id]) }}">
                @method('PUT')
                @csrf
<table>
    <tr>
        <td > <b><u>Nom :</u></b></td>
         <td><input type="text" name="nom" value="{{ old('nom', $edit->nom ?? null) }}" class="item " ></td>
     </tr>
 <tr>
        <td> <b><u>Prenom :</u></b></td>
         <td><input type="text" name="prenom" value="{{ old('prenom', $edit->prenom ?? null) }}"
            class="item"></td>
     </tr>
     <tr>
        <td> <b><u>Téléphone :</u></b></td>
         <td><input type="text" name="telephone" value="{{ old('telephone', $edit->telephone ?? null) }}"
            class="-item"></td>
     </tr>
     <tr>
        <td> <b><u>Email :</u></b></td>
         <td> <input type="text" name="email" value="{{ old('email', $edit->email ?? null) }}" class="-item"></td>
     </tr>
     <tr>
        <td> <b><u>Ville :</u></b></td>
         <td> <input type="text" name="ville" value="{{ old('ville', $edit->ville ?? null) }}" class="-item"></td>
     </tr>
     <tr>
         <td> <b><u>Adresse :</u></b></td>
          <td>      <input type="text" name="adresse" value="{{ old('adresse', $edit->adresse ?? null) }}"
            class="-item"></td>
      </tr> 


               <tr>
               <td colspan="2" style="width: 100%  "> <input type="submit" class="btn btn-success" value="Update" align='center'>
               </td>
            </tr>
           </table> </form>
        </div>
    </div>
@endsection
@section('Ajout')
<br>
    <a class='fas fa-arrow-alt-circle-left' href="{{ route('client.index') }}">Back</a>
@endsection
