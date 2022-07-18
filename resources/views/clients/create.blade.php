@extends('blank')

@section('page-title', 'Ajout client');
@section('page-description', 'Gestion de client');

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">Basic Form Input</h6>
      <p class="br-section-text">A basic form control with disabled and readonly mode.</p>

      <form action="{{ route('clients.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <input class="form-control @error('nom') is-invalid @enderror"  name="nom" placeholder="Entrez le nom du client" type="text">
                @error('nom')
                    <div class="invalid-feedback">
                        {{ $errors->first('nom') }}
                    </div>    
                @enderror
                
            </div><!-- col -->
            <div class="col-lg-8">
                <input class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description du client" type="text">
            
                @error('description')
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>    
                @enderror

            </div><!-- col -->
        </div><!-- row -->
        <div class="row mt-2 mx-auto">
            <button type="submit" class="btn btn-success">Créer un client</button>
        </div>
     </form>
    </div>
</div>

@endsection