<!DOCTYPE html>
  <html>
    <head>
<<<<<<< HEAD
    <meta name="csrf-token" content="{{ csrf_token() }}">
      <!--Import Google Icon Font-->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <link href="{{ url('http://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
      <!--Import materialize.css-->
=======
      <!--Import Google Icon Font-->
      <link href="{{ url('http://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
      <!--Import materialize.css-->
      <script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>
>>>>>>> 1f99628cb77c6b681e14b284c4b1943c25502ce5
      <link type="text/css" rel="stylesheet" href="{{ url('css/materialize.min.css') }} "  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<<<<<<< HEAD

    <body>
  
        <nav>
          <div class="nav-wrapper">
            <a href="{{ url('/') }}" class="brand-logo center"> API Laravel </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="{{ url('master/currency') }}"> Currency </a></li>
              <li><a href="{{ url('master/country') }}"> Country </a></li>
              <li><a href="{{ url('master/lang') }}"> Language </a></li>
              <li><a href="{{ url('master/airport') }}"> Airport </a></li>
            </ul>
          </div>
        </nav>
                
      <div class="container">
    @yield('content')
=======
    
    <body>
        <nav>
          <div class="nav-wrapper">
            <a href="{{ url('/') }}" class="brand-logo center">Belajar API </a>
            <ul class="right hide-on-med-and-down">
              <li><a href="{{ url('master/currency') }}">Currency</a></li>
              <li><a href="{{ url('master/country') }}">Country</a></li>
              <li><a href="{{ url('master/lang') }}">Language</a></li>
              <li><a href="{{ url('master/airport') }}">Airport</a></li>
              
            </ul>
          </div>
        </nav>  
          
      <div class="container">
      @yield('content')
>>>>>>> 1f99628cb77c6b681e14b284c4b1943c25502ce5
    </div>

    
      <!--Import jQuery before materialize.js-->
<<<<<<< HEAD
      <script type="text/javascript" src="{{ url('js/jquery.min.js') }}">
        
      </script>
      
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script type="text/javascript" src="{{ url('js/materialize.min.js') }}"></script>
=======
      <script type="text/javascript" src="{{ url('https://code.jquery.com/jquery-2.1.1.min.js') }}"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
>>>>>>> 1f99628cb77c6b681e14b284c4b1943c25502ce5
  
  

      @yield('footer')

<<<<<<< HEAD
<script type="text/javascript">
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
</script>
=======
>>>>>>> 1f99628cb77c6b681e14b284c4b1943c25502ce5
    </body>
  </html>