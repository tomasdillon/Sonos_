<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-whidt, initial-scale=1">
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="image/claveSol.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
  <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Caveat+Brush|Homemade+Apple|Itim|Source+Sans+Pro" rel="stylesheet">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nav-bar.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/perfil.css">
  <link rel="stylesheet" href="css/eventos.css">
  @if (isset($_COOKIE['cssTheme']))
   <link rel="stylesheet" href={{ $_COOKIE['cssTheme'] }} id="theme">
 @else
   <link rel="stylesheet" href=" " id="theme">
 @endif
</head>

<body>
  @include('layouts.nav-bar')

  @yield('section')

  @yield('section2')

  <footer>
    @include('layouts.footer')
  </footer>

  @yield('section3')
  @yield('section4')
</body>
</html>
