@extends('layouts.wrapper')
@Section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card-header">
                    <h4>Veuiller vous connecter :</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('login-responsable')}}" method="POST">

                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif

                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif

                        @csrf
                        
                        <div class="form-group mb-3">
                            <label for="email">Entrer votre Email : </label>
                            <input type="text" name="email" id="" class="form-control" value="{{old('email')}}" required>
                            <span class="text-danger">@error('email'){{$message}} @enderror</span>
                        </div>                       

                        <div class="form-group mb-3">
                            <label for="password">Mot de passe : </label>
                            <input type="password" name="password" id="" class="form-control" required>
                            <span class="text-danger">@error('password'){{$message}} @enderror</span>
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Connexion</button>
                        </div>
                        <br>
                        <a href="registrationResponsable">Vous etes nouveaux ? Enregistrer vous !</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endSection