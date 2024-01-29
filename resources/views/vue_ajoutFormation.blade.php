@extends('base')
@section('content')
    <div class="container mt-3">
        <form action="{{ route('store_formation', $obj_formation) }}" method="post" name="frm-ajout-formation">
        @csrf
        @method('post')
            <div class="mb-3">
                <label for="nom" class="col-form-label col-sm-2">Nom de la formation :</label>
                <input type="text" name="nom" id="nom" class="form-control">
            </div>
            <div class="mb-3">
                <label for="duree" class="col-sm-2 col-form-label">Duree de la formation :</label>
                <input type="text" name="duree" id="duree" class="form-control">
            </div>
            <div class="mb-3">
                <label for="prix" class="col-form-label col-sm-2">Cout de la formation :</label>
                <input type="text" name="prix" id="prix" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn-info" >Ajouter</button>
            </div>
        </form>
    </div>
@endsection
