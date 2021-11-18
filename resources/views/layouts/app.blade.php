<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>
    Ticketing System
  </title>

  <!-- Favicon - loaded as static -->
  <link href="{% static 'assets/img/brand/favicon.png' %}" rel="icon" type="image/png">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="/static/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="/static/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="/static/assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />

 

</head>

<body class="">
    
    @include('\includes.sidenav')
  <div class="main-content">
 
    @include('\includes.navigation')
    @yield('content')


  </div>
    @include('\includes.scripts')


</body>

</html>

