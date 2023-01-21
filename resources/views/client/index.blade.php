{{-- @extends('layout') --}}
@extends('layouts.app')

@section('container')
    <nav class="nav nav-tabs nav-stacked my-5">
        <a class="nav-link @if ($tab == 'list') active @endif" href="client">List</a>
        <a class="nav-link @if ($tab == 'archive') active @endif" href="/client-archive">Archive</a>
        <a class="nav-link @if ($tab == 'all') active @endif" href="/client-all">all</a>
    </nav>

    <div>
        <h4>{{ $clients->count() }} client</h4>
    </div>

    {{-- table-bordered --}}
    <table id="example" style="" class="table mdb-color.darken-3 align-middle mb-0">
        <thead>
            <tr style="background-color: #E3F2FD; color:black">
                <th scope="col">
                    <p class="fw-bold mb-1">Nom</p>
                </th>
                <th scope="col">
                    <p class="fw-bold mb-1">Prénom</p>
                </th>
                <th scope="col">
                    <p class="fw-bold mb-1">Téléphone</p>
                </th>
                <th scope="col">
                    <p class="fw-bold mb-1">Email</p>
                </th>
                <th scope="col">
                    <p class="fw-bold mb-1">Ville</p>
                </th>
                <th scope="col">
                    <p class="fw-bold mb-1">Adresse</p>
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
        @foreach ($clients as $client)
            <tbody>
                <tr class="center" style="background-color: white">
                    <td>
                        <div Style="max-width:40px;overflow:hidden;"class="ms-3">
                            <p class="fw-bold mb-1">{{ $client->nom }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $client->prenom }}</p>
                        </div>
                    </td>
                    <td Style="max-width:20px;overflow:hidden;">
                        <p class="fw-bold mb-1">{{ $client->telephone }}</p>
                    </td>
                    <td style="max-width:200px;overflow:hidden;">
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $client->email }}</p>
                        </div>
                    </td>
                    <td>
                        <p class="fw-bold mb-1">{{ $client->ville }}</p>
                    </td>
                    <td>
                        <p class="fw-bold mb-1">{{ $client->adresse }}</p>
                    </td>
                    <td style="max-width:110px;overflow:hidden;"><a href="{{ route('client.show', [$client->id]) }}"
                            class="btn btn-success btn-rounded">Show</a>
                    </td>
                    <td style="max-width:0px;overflow:hidden;">
                        <a href="{{ route('client.edit', $client->id) }}" class="btn btn-primary btn-rounded">Edit</a>
                    </td>
                    <td style="max-width:120px;overflow:hidden;">
                        <form action="{{ route('client.destroy', $client->id) }}" method="Post"
                            onsubmit="return confirm('Etes-vous sur?')">
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
    <a class='link-dark' href="{{ route('client.create') }}">Ajoute</a>
@endsection
