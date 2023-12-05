@extends('base')
@section('content')

<div class="container">
    <h1>Listes des Apprenants</h1>
    <a class="btn-info btn" href="{{ route('ajout_etudiant') }}">Ajouter un Etudiant</a>
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
                <td  scope="col">{{ $e->age}}</td>
            </tr>
        @endforeach

    </table>
</div>

@endsection
