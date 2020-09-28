<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name1') }}</title>

    <!-- Scripts -->
    <script  src="https://code.jquery.com/jquery-3.5.1.js"  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="  crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="{{ asset('js/suit_app.js') }}"></script>
    <script src="{{ asset('js/upload_file.js') }}"></script>
    <script>
        function reset_image()
        {
            if(document.getElementById("personal-photo").src != "" || document.getElementById("personal-photo").src == "images/question_mark.png")
            {
            document.getElementById("personal-photo").src = "images/question_mark.png";
            $("#clear-image").css("display","none");
            return false;
            }

        }
    </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/suit_app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="lang-header">
<a href="{{url('/home')}}"><img src="{{asset('images/f1.png')}}" width="60px" height="55px"></a>
<ul>
    <li>EN </li>
    <li>&nbsp;&nbsp;</li>
    <li> <a href="{{url("/fi/home")}}">FI</a></li>
</ul>
</div>
<div class="main-container">
<div class="main-header">
        <ul class="outer-ul">
            <li id="o-li">Items for sale</li>
            <li id="o-li">Services for sale</li>
            <li id="o-li">New service plan</li>
        </ul>

        <ul class="inner-ul">
            <li id="i-li">Register</li>
            <li id="i-li">Login</li>
        </ul>

</div>
    <main>
        @yield('container')
    </main>    
</div>

</body>
</html>