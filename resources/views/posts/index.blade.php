@extends('layouts.wrapper')

@section('main-content')



<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">TABLE POSTES</h6>
      <p class="br-section-text">Données des postes de l'entreprise</p>
      @can("access-admin")
      <a href="{{ route('postes.create') }}" class="btn btn-info mb-2 float-right">Ajouter des postes</a>
      @endcan
      <div class="bd bd-gray-300 rounded table-responsive">
        <div class="d-flex justify-content-center mt-3">
            
        </div>
        <table class="table mg-b-0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Titre</th>
              <th>Nombres de Personnes</th>
              @can("access-admin")
              <th>Actions</th>
              @endcan
            </tr>
          </thead>
          <tbody>
            @foreach ($postes as $poste)
                <tr>
                    <th scope="row">{{ $poste->id }}</th>
                    <td>{{ $poste->nom }}</td>
                    <td>{{ $poste->nombres_personnels }}</td>
                    @can("access-admin")
                    <td class="d-flex">
                      
                        <a href="{{ route('postes.edit', $poste->id) }}" class="btn btn-warning btn-sm mr-2">Modifier</a>

                        <form method="post" action="{{ route('postes.destroy', $poste->id) }}" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                    @endcan
                </tr>
            @endforeach
          </tbody>
        </table>
        <div class="d-flex justify-content-center mt-3">
            
        </div>

      </div><!-- bd -->
    </div>
</div>

@endsection