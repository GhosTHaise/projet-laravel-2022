@extends('layouts.wrapper')
@Section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>Veuiller vous enregistrer :</h4>
                    <hr>
                </div>
                <div class="card-body">
                    <form action="{{route('register-responsable')}}" method="POST">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif

                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif

                        @csrf

                        <div class="form-group mb-3">
                            <label for="name">Entrere votre Nom : </label>
                            <input type="text" name="name" id="" class="form-control" value="{{old('name')}}" required>
                            <span class="text-danger">@error('name'){{$message}} @enderror</span>
                        </div>
                        
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
                            <button type="submit" class="btn btn-primary">Enregistrement</button>
                        </div>
                        <br>
                        <a href="loginResponsable">Deja enregistrer ? Connecter vous ici !</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endSection