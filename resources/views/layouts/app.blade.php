<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   

   
<link href="{{asset('/resources/css/app.css')}}" rel='stylesheet'>
<link href="{{asset('css/style.css')}}" rel='stylesheet'>



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

 
</head>
<body>
<div id="app">
      

        <main class="py-4">
         
            <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav
       id="sidebarMenu"
       class="collapse d-lg-block sidebar collapse bg-dark"
       class='hidden'>
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           aria-current="true"
           >
          <i class="fas fa-home-alt fa-fw me-3"></i
            ><span>home</span>
        </a>
       
      
       
           
       
      
         
         
       
        <!-- <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-calendar fa-fw me-3"></i
          ><span>Calendar</span></a -->
          
          <a
           href="#"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-calendar fa-fw me-3"></i
          ><span>Rendez-vous</span></a
          >
          <a
           href="{{route('patients.create')}}"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-add fa-fw me-3"></i><span>Créer Patient</span></a
          >
        <a
           href="{{route('patients.index')}}"
           class="list-group-item list-group-item-action py-2 ripple"
           ><i class="fas fa-users fa-fw me-3"></i><span>Patients</span></a
          >
     
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

   
  
  <!-- Navbar -->
  <nav
       id="main-navbar"
       class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
       >

    <div class="container-fluid">
      

   
      <a class="navbar-brand" href="#">
      
      <h1 style="font-family: fantasy;font-size:larger;color:purple">Cabinet</h1>
      </a>
    

      <!-- Right links -->
     
      <div class="container">
                
             

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
      
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="margin-left: 800px;">
                                <img src="js\images\faces\face5.jpg" style="border-radius:50%;" height="40"> 
                                {{ Auth::user()->name }}
                                </a>
                            

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                       
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px">
  <div class="container pt-4">

  </div>
</main>
<!--Main layout-->
@yield('content')
        </main>
    </div>
</body>
</html>
