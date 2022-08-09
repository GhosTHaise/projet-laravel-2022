
<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login now</title>
    <!-- vendor css -->
    <link href="{{ asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body class="h-100">
    <div class="container-fluid h-100 bg-light px-4 pt-4" >
        <div class="row h-100">
            <div class="bg-light h-100 col-md-6 d-flex flex-column   ">
                <div class="h-25 w-100">
                    <img class="" src="{{ asset('storage/Login-picture/logo.png') }}" alt="...">
                </div>
                <div class="d-flex w-100 px-4  justify-content-center">
                    <img class="img-fluid"  src="{{ asset('storage/Login-picture/illustration.png') }}" alt="...">
                </div>
            </div>
            <div class=" h-100 col-md-6">
                {{-- right --}}
                <form  class="form-group d-flex  h-100 ml-4 px-3 flex-column justify-content-center align-item-center" action="">
                    <label class="h5" for="email">Username</label>
                    <input class="mb-4 form-control" type="text" name="username" id="username">
                    <label class="h5" for="password">Password</label>
                    <input class="mb-4 form-control" type="password" name="password" id="password">
                    <button type="button" class="btn  btn-outline-info rounded">Login</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>