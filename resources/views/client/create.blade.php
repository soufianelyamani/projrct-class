@extends('layouts.app')
@section('container')
<style>
    .my-5{
      width: 50%
  }
    label{
        padding: 20px
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
    /* form{
        display: flex;
        flex-direction: row;  
        flex-:;   
    } */
    /* .aa{
        display: flex;
        flex-direction: row;  
    } */
</style>
<div class="card">
    <div class="card-header">Edit Client</div>
    <div class="card-body">
        <form method="POST" action="{{ route('client.store') }}">

         
<table>
<tr>
    <td > <b><u>Nom :</u></b></td><td><input  placeholder="Nom Client..." type="text" name="nom" value="{{ old('nom') }}" class="item " ></td>
     @error('nom')
     <div class="alert alert-danger" role="alert">
         <li style="color:red">{{ $message }}</li>
     </div>
 @enderror
 </tr>
<tr>
    <td> <b><u>Prenom :</u></b></td>
     <td><input placeholder="Prenom Client..." type="text" name="prenom" value="{{ old('prenom') }}"
        class="item"></td>
        @error('prenom')
        <div class="alert alert-danger" role="alert">
            <li style="color:red">{{ $message }}</li>
        </div>
    @enderror
 </tr>
 <tr>
    <td> <b><u>Téléphone :</u></b></td>
     <td><input placeholder="Telephone Client..." type="text" name="telephone" value="{{ old('telephone') }}"
        class="-item"></td>
        @error('telephone')
        <div class="alert alert-danger" role="alert">
            <li style="color:red">{{ $message }}</li>
        </div>
    @enderror 
 </tr>
 <tr>
    <td> <b><u>Email :</u></b></td>
     <td> <input placeholder="Email Client..." type="text" name="email" value="{{ old('email') }}" class="-item"></td>
     @error('email')
     <div class="alert alert-danger" role="alert">
         <li style="color:red">{{ $message }}</li>
     </div>
 @enderror 
 </tr>
 <tr>
    <td> <b><u>Ville :</u></b></td>
     <td> <input placeholder="Ville Client..." type="text" name="ville" value="{{ old('ville') }}" class="-item"></td>
     @error('ville')
     <div class="alert alert-danger" role="alert">
         <li style="color:red">{{ $message }}</li>
     </div>
 @enderror 
 </tr>
 <tr>
     <td> <b><u>Adresse :</u></b></td>
      <td>      <input  placeholder="Adress Client..."type="text" name="adresse" value="{{ old('adresse') }}"
        class="-item"></td>
        @error('adresse')
        <div class="alert alert-danger" role="alert">
            <li style="color:red">{{ $message }}</li>
        </div>
    @enderror 
  </tr> 


           <tr>
           <td colspan="2" style="width: 100%  "> <input type="submit" class="btn btn-success" value="Ajouter" align='center'>
           </td>
        </tr>
       </table> 
       @csrf
    </form>
    </div>
</div>
@endsection
@section('Ajout')
<br>
<a class='fas fa-arrow-alt-circle-left' href="{{ route('client.index') }}">Back</a>
@endsection
    {{-- <div class="card-body">
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
    </div> --}}
{{-- @endsection --}}

