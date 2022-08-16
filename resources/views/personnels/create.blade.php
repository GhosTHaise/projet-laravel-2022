@extends('layouts.wrapper')

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">Veuillez remplir les informations concernants le nouveau employée</h6>
      {{-- <p class="br-section-text">A basic form control with disabled and readonly mode.</p> --}}
      <form action="{{ route('personnels.store') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-lg">
            <input class="form-control  @error('nom') is-invalid @enderror" name="nom" placeholder="Entrer le nom" type="text">
            @error('nom')
              <div class="invalid-feedback">
                {{ $errors->first('nom') }}
              </div>    
            @enderror
          </div><!-- col -->
          <div class="col-lg mg-t-10 mg-lg-t-0">
            <input class="form-control" name="poste" placeholder="Entre le poste" type="number">
            @error('poste')
              <div class="invalid-feedback">
                {{ $errors->first('poste') }}
              </div>    
            @enderror
          </div><!-- col -->
          <div class="col-lg mg-t-10 mg-lg-t-0">
            <button type="submit" class="btn btn-success">Ajouter le nouveau employée</button>
          </div>
          
          <!-- col -->
        </div><!-- row -->
      </form>


      {{-- <div class="row mg-t-20">
        <div class="col-lg">
          <textarea rows="3" class="form-control" placeholder="Textarea"></textarea>
        </div><!-- col -->
        <div class="col-lg mg-t-10 mg-lg-t-0">
          <textarea rows="3" class="form-control" placeholder="Textarea (readonly)" readonly></textarea>
        </div><!-- col -->
        <div class="col-lg mg-t-10 mg-lg-t-0">
          <textarea rows="3" class="form-control" placeholder="Texarea (disabled)" disabled></textarea>
        </div><!-- col -->
      </div><!-- row --> --}}
    </div>
</div>

@endsection