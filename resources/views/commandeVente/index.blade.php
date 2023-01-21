@extends('layouts.app')

@section('container')
    <div>

    </div>
    {{-- table-bordered --}}
    <table id="example" style="" class="table mdb-color.darken-3 align-middle mb-0">

        <thead>
            <tr style="background-color: #E3F2FD; color:black">
                <th scope="col">
                    <p class="fw-bold mb-1">Date De Commande</p>
                </th>
                <th scope="col">
                    <p class="fw-bold mb-1">command of</p>
                </th>
                <th scope="col">
                    <p class="fw-bold mb-1">Show</p>
                </th>
                <th scope="col">
                    <p class="fw-bold mb-1">Modifier</p>
                </th>
                <th scope="col">
                    <p class="fw-bold mb-1">Déléte</p>
                </th>
            </tr>
        </thead>
        @foreach ($commandes as $commande)
            <tbody>
                <tr class="center" style="background-color: white">
                    <td>
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $commande->dateCom }}</p>
                        </div>
                    </td>
                    <td>
                        {{-- @foreach ($commande->Client as $danne) --}}
                        <div class="ms-3">
                            <a href="{{ route('client.show', [$commande->Client->id]) }}">
                                <p class="fw-bold mb-1">{{ $commande->Client->prenom }} {{ $commande->Client->nom }}</p>
                            </a>
                        </div>
                        {{-- @endforeach --}}
                    </td>
                    <td><a href="{{ route('commandeVente.show', [$commande->id]) }}"
                            class="btn btn-success btn-rounded">Show</a>
                    </td>
                    <td>
                        <a href="{{ route('commandeVente.edit', $commande->id) }}"
                            class="btn btn-primary btn-rounded">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('commandeVente.destroy', $commande->id) }}" method="Post"
                            onsubmit="return confirm('Are you sure you want to delete this object?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-rounded deleteCategoryBtn">Déléte</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
@section('Ajout')
    <a class='link-dark' href="{{ route('commandeVente.create') }}">Ajoute</a>
@endsection
