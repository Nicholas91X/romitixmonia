<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>RMxtr</title>
        <link rel="stylesheet" href="{{asset("css/front.css")}}">
    </head>
    <body>
        <div class="login">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('admin/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        {{-- Not needed because only main administrators have access granted --}} 
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif
        </div>
        <div id="app">
            
        </div>
        <script src="{{asset("js/front.js")}}"></script>
    </body>
</html>