<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="">
    <div id="app">
        <section class="px-5">
            <header>
                <h1>
                    <img style="width: 100px" src="/images/bang.jpg" alt="ami ekta bang">
                </h1>
            </header>
        </section>
      

        <section class="px-5">
            <main class="py-2">
                <div class="container">
                    <div class="row">
                        
                            
                        <div class="col-lg-3">
                            @auth
                            @include('_sidebar-links')
                            @endauth
                        </div>
                  
                        <div class="col-lg-6">
                          
                            @yield('content')
                           
                        </div>
                        
                            
                        
                        <div class="col-lg-3">
                            @auth
                            <div>
                            <h3>Following</h3>
                            @include('_friends-list')
                             </div>
                            @endauth
                        </div>
                        
                    </div>
                </div>
            </main>
        </section>
        
    </div>
</body>
</html>
