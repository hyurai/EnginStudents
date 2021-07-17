<head>
  <title>EnginStudnets</title>
  <link rel="stylesheet" href="{{ asset('css/tweet.css') }}">
  <link rel="stylesheet" href="{{ asset('css/icon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/38fa1aa7d6.js" crossorigin="anonymous"></script>
</head>
<body style = "background: #eee;">
  @yield('content')
  <script src = "{{ asset('js/tweet.js') }}"></script>
  <script src = "{{ asset('js/icon.js') }}"></script>
  <script src = "{{ asset('js/profile.js') }}"></script>


</body>