@extends('layouts.wrapper')

@section('page-title', 'Modification client');
@section('page-description', 'Gestion de client');

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">Entrer les nouvelles infromations</h6>

      <form action="{{ route('clients.update', $client->id) }} " method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-4">
            <input class="form-control"  name="nom"  type="text" value="{{ $client->nom }}" >
            </div><!-- col -->
            <div class="col-lg-8">
                <input class="form-control" name="description"  type="text" value="{{ $client->description }}">
            </div><!-- col -->
        </div><!-- row -->
        <div class="row mt-2 mx-auto">
            <button type="submit" class="btn btn-success">Mettre à jour le personnel</button>
        </div>
     </form>
    </div>
</div>

@endsection