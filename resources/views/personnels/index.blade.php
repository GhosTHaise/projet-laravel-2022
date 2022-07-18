@extends('blank')

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">TABLE PERSONNEL</h6>
      <p class="br-section-text">Information concernant les personnels.</p>

      <div class="bd bd-gray-300 rounded table-responsive">
        <table class="table mg-b-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Position</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($personnels as $personnel)
              <tr>
                <th scope="row">{{ $personnel->id }}</th>
                <td>{{ $personnel->nom }}</td>
                <td>{{ $personnel->poste->nom }}</td>
              </tr>    
            @endforeach
            
            
          </tbody>
        </table>
      </div><!-- bd -->
    </div>
</div>



<form action="{{ route('store.product') }}" method="POST">
  @csrf
  <label for="name">Nom du produit : </label>
  <input type="text" name="name">
  
  <label for="price">Prix du produit : </label>
  <input type="number" name="price" step="0.01">
  
  <label for="description">Description du produit : </label>
  <textarea name="description">
  </textarea>
  
  <input type="submit" value="Envoyer">
</form>

@if ( $errors->has('title') )
    <p class="error-message">{{ $errors->first('title') }}</p>
@endif


@error('description')
    <p> {{  $message  }} </p>
@enderror


<form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row">
      <div class="col-md-6">
          <input type="file" name="file" class="form-control">
      </div>
      <div class="col-md-6">
          <button type="submit" class="btn btn-success">Upload</button>
      </div>
  </div>
</form>

<div class="container">
  @foreach ($users as $user)
      {{ $user->name }}
  @endforeach
</div>

{{ $users->links() }}





@endsection