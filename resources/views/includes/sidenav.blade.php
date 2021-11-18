<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="../dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="../dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
</head>
<body>
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      
      <!-- User -->
      
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="/static/assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <!-- <li class="nav-item">
            <a class="nav-link {% if 'icons' in segment %} active {% endif %}" href="/">
              <i class="ni ni-planet text-blue"></i> Home
            </a>
          </li> -->
          <li class="nav-item">
          <a class=" nav-link {% if 'index' in segment %} active {% endif %}" href="/"> 
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class=" nav-link {% if 'index' in segment %} active {% endif %}" href="/book"> 
              <i class="ni ni-check-bold text-primary"></i> Book Ticket
              </a>
            </li>
          <li class="nav-item">
            <a class="nav-link {% if 'tables' in segment %} active {% endif %}" href="/admin">
              <i class="ni ni-circle-08 text-info"></i> Admin
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{% url 'logout' %}">
              <i class="ni ni-user-run text-red"></i> Logout
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <!-- <hr class="my-3"> -->
        <!-- Heading -->
        
      </div>
    </div>
  </nav>
  
</body>
