
@extends('layouts.wrapper')
@Section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                @if(session('status'))

                    <h6 class="alert alert-success">{{ session('status')}}</h6>
                
                @endif


                <div class="card-header">
                    <h4>Veuiller remplir ce formulaire
                    <a href="{{url('conges')}}" class="btn btn-danger float-end">back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('send-forms')}}" method="POST">

                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Nom</label>
                            <input type="text" name="nom" id="" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Prenom</label>
                            <input type="text" name="prenom" id="" class="form-control">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="" value="email">Votre Email</label>
                            <select name="email" id="" class="form-control">
                                <option value="{{Auth::user()->email}}" required>{{Auth::user()->email}}</option>
                            </select>
                        </div>


                        <div class="form-group mb-3">
                            <label for="">Motif</label>
                            <textarea name="motif" id="" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Depart</label>
                            <input type="date" name="date1" id="" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Arrive</label>
                            <input type="date" name="date2" id="" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Envoi du formulaire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endSection