
@extends('layouts.wrapper')

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">Veuillez remplir les informations concernants le nouveau poste</h6>

      <form method="POST" action="{{ route('postes.store') }}">
        @csrf
        
      <div class="row mg-t-20">
        <div class="col-lg">
          <label class="form-control-label" for="titre">Titre : </label>
          <input class="form-control w-75" id="titre" placeholder="Entrer le titre" type="text" name="titre">
        </div>
      </div>
      <div class="row mg-t-20 w-75">
        <div class="col-lg d-flex  justify-content-start">
          <button type="submit" class="btn btn-info mr-2 px-4">Enregistrer</button>
          <button type="button" onclick="window.location='{{route("dashboard")}}'" class="btn btn-secondary">Annuler</button>
        </div>
      </div>
      <form>

    </div>
</div>

@endsection