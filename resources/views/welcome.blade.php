<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social App Go!</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" class="css">
    <link rel="stylesheet" href="../../public/css/style.css" class="css">
</head>
<body>
<header>
    <div class="container">
        <img src="" alt="">
        <h1>Social App Go!</h1>
        <div class="index-form">
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
            @endif
        <div class="index-login-form">
            <button class="index-login-btn">Register!</button>
            <span>or</span>
            <button class="index-login-btn">Login</button>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad adipisci amet assumenda atque beatae dignissimos, dolore ea earum eos fugit nemo nisi nobis odio, quia quis quos reiciendis sint.</p>
    </div>
</main>
<footer>
    <div class="container"><span>&copy; 2019 Code Down Productions</span></div>
</footer>
</body>
</html>

</html>
