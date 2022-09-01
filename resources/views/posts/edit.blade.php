@extends('layouts.wrapper')

@section('page-title', 'Modifification client');
@section('page-description', 'Gestion de client');

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">Entrer les nouvelles infromations :</h6>

      <form action="{{ route('postes.update', $poste->id) }} " method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-8">
            <input class="form-control"  name="titre"  type="text" value="{{ $poste->nom }}" >
            </div>
        </div>
        <div class="row mt-2 mx-auto">
            <button type="submit" class="btn btn-success mr-2">Mettre à jour le poste</button>
            <button type="button" onclick="window.location='{{route("postes.index")}}'" class="btn btn-secondary">Annuler</button>
        </div>
     </form>
    </div>
</div>

@endsection