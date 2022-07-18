@extends('blank')

@section('page-title', 'Ajout client')
@section('page-description', 'Gestion de client')

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">TABLE CLIENT</h6>
      <p class="br-section-text">Données des clients de l'entreprise</p>

      <a href="{{ route('clients.create') }}" class="btn btn-info mb-2 float-right">Ajouter client</a>
      <div class="bd bd-gray-300 rounded table-responsive">
        <div class="d-flex justify-content-center mt-3">
            {{ $clients->links() }}
        </div>
        <table class="table mg-b-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->description }}</td>

                    <td class="d-flex">
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning btn-sm mr-2">Modifier</a>

                        <form method="post" action="{{ route('clients.destroy', $client->id) }}" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                        

                    </td>

                </tr>
            @endforeach
          </tbody>
        </table>
        <div class="d-flex justify-content-center mt-3">
            {{ $clients->links() }}
        </div>

      </div><!-- bd -->
    </div>
</div>

@endsection