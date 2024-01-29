@extends('base')
@section('content')
    <div class="container mt-3">
        <form action="{{ route('store_etudiant', $obj_etudiant) }}" method="post" name="frm-ajout-etudiant">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="nom" class="col-form-label col-sm-2">Nom de l'etudiant :</label>
                <input type="text" name="nom" id="nom" class="form-control">
            </div>
            <div class="mb-3">
                <label for="duree" class="col-sm-2 col-form-label">Prenom :</label>
                <input type="text" name="prenom" id="duree" class="form-control">
            </div>
            <div class="mb-3">
                <label for="age" class="col-form-label col-sm-2">age de l'etudiant :</label>
                <input type="text" name="age" id="age" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn-info" >Ajouter</button>
            </div>
        </form>
    </div>
@endsection
