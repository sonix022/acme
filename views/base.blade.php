<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    @yield('browsertitle')
  </title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/style.css">

  @yield('css')

</head>

<body>

  @include('topnav')
  @yield('outsidecontainer')

  <div class="container">
    <div class="row">
      <br><br>
      @include('errormessage')
    </div>

  @yield('content')

  </div>

  <div class="row footer-background">
    <div class="col-md-3">
      <div class="padding-left-8px">
        <h4>Contact Us</h4>
        123 Main St.<br>
        Unionville, PA<br>
        95051<br>
        +1 (858)-337-7478
      </div>
    </div>
    <div class="col-md-6">

    </div>
    <div class="col-md-3">
      <img src="/assets/map-small.png" class="pull-right">
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous">
  </script>

  @yield('bottomjs')

</body>

</html>
