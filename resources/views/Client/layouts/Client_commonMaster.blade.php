<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Electro - HTML Ecommerce Template</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/Client/css/bootstrap.min.css') }}" />
  <!-- Slick -->
  <link rel="stylesheet" href="{{ asset('assets/Client/css/slick.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/Client/css/slick-theme.css')}}" />

  <!-- nouislider -->
  <link type="text/css"rel="stylesheet" href="{{ asset('assets/Client/css/nouislider.min.css') }}" />


  <!-- Font Awesome Icon -->

  <link rel="stylesheet" href="{{ asset('assets/Client/css/font-awesome.min.css')}}" />


  <!-- Custom stlylesheet -->
  <link type="text/css"rel="stylesheet" href="{{ asset('assets/Client/css/style.css') }}" />
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
@include('Client.layouts.sections.Client_header.header')

@include('Client.layouts.sections.Client_navbar.navbar')
<!-- Layout Content -->
@yield('content')
@include('Client.layouts.sections.Client_footer.footer')

<!-- jQuery Plugins -->

<script src="{{ asset('assets/Client/js/jquery.min.js') }}"></script>

<script src="{{ asset('assets/Client/js/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('assets/Client/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/Client/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/Client/js/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/Client/js/main.js')}}"></script>
</body>

</html>
