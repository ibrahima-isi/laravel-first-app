@extends('base')
@section('content')

<div class="container">
    <h1>Listes des Apprenants</h1>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
        @elseif( session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
        @endif
    <div class="d-flex justify-content-between">
        <a class="btn-info btn" href="{{ route('ajout_etudiant') }}">Ajouter un Etudiant</a>
        <form action="{{ route('search-student')}}" method="GET">
            @csrf 
            <input name="name" type="text" name="search_name" placeholder="Rechercher avec le nom">
            <button type="submit" class="btn btn-info">Rechercher</button>
        </form>
    </div>
    <table class="table table-bordered table-success table-striped">
        <tr class="border-5 table-info">
            <th scope="col">#</th>
            <th scope="col">Noms</th>
            <th scope="col">Prenoms</th>
            <th scope="col">Ages</th>
        </tr>
        @foreach( $etudiants as $e)
            <tr class="border-2">
                <td  scope="col">{{ $e->id }}</td>
                <td  scope="col">{{ $e->nom }}</td>
                <td  scope="col">{{ $e->prenom }}</td>
                <td  scope="col">{{ $e->age}} ans</td>
            </tr>
        @endforeach

    </table>
</div>

@endsection
