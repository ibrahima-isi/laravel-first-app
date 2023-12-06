@extends('base')
@section('content')

<div class="container">
    <h1>Listes des Formations</h1>
    <a class="btn btn-info" href="{{ route('ajoutFormation') }}">Ajouter Une formation</a>
    <table class="table table-bordered table-dark table-striped">
        <tr class="border-5 table-success">
            <th scope="col">#</th>
            <th scope="col">Noms</th>
            <th scope="col">Prenoms</th>
            <th scope="col">Ages</th>
        </tr>
        @foreach( $formations as $f)
            <tr class="border-2">
                <td  scope="col">{{ $f->id }}</td>
                <td  scope="col">{{ $f->nom_formation }}</td>
                <td  scope="col">{{ $f->duree_formation }} Ans</td>
                <td  scope="col">{{ $f->prix}} FCFA</td>
            </tr>
        @endforeach

    </table>
</div>
@endsection
