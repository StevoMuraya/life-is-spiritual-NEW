<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="#" />

    <link
      rel="shortcut icon"
      href="{{ asset('/frontend/images/logo_new.png') }}"
      type="image/x-icon"
    />

    <title>Life is Spiritual</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('frontend/css/llyv.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/media-query.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}" />
  </head>
  <body>
      @yield('home_content')
    <script src="{{ asset('frontend/js/nav.js')  }}"></script>
  </body>
</html>