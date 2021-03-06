<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register to acces Download page</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body>

    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Register | Custom Auth</h4>
                <form action="{{ route("auth.save") }}" method="post">

                    @if (Session::get("success"))
                        <div class="alert alert-success">
                            {{ Session::get("success") }}
                        </div>
                    @endif

                    @if (Session::get("fail"))
                        <div class="alert alert-danger">
                            {{ Session::get("fail") }}
                        </div>
                    @endif

                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Inserisci il tuo nome completo" value="{{ old("name") }}">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Inserisci il tuo indirizzo mail" value="{{ old("email") }}">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Inserisci la tua password">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Register</button>
                    <br>
                    <a href="{{ route("auth.login") }}">Ho gi?? un account, vai alla pagina di Login</a>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>