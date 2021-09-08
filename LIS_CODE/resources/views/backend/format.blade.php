<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LIS Admin</title>
    <link rel="shortcut icon" href="#" />

    <link
      rel="shortcut icon"
      href="{{ asset('backend/images/logo_new.png') }}"
      type="image/x-icon"
    />

    <link rel="stylesheet" href="{{ asset('backend/css/llyv.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/media-querry.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/all.css') }}" />
  </head>
  <body>
      @yield('home_content')
  </body>
  </html>